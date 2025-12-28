<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SmsTransaction;
use App\Models\SmsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Jobs\SendTelegramAlertJob;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    private $user   = 'gl9av4VdG1';
    private $pass   = 'aIoyRLcJ2CHMUiYTUoyxbNsupNm7yM4et0KD9aQI';
    private $from   = '68068';
    private $url    = 'https://sms.360.my/gw/bulk360/v3_0/send.php';

    public function __construct(){
        $this->user = urlencode($this->user);
        $this->pass = urlencode($this->pass);
        $this->url = $this->url . "?user=$this->user&pass=$this->pass&from=$this->from&detail=1";
    }

    public function send_otp(Request $request)
    {
        $findMerchant = User::where('merchant_code' , $request->merchant_code)->first();
        if(!$findMerchant){
            return response()->json(['status' => 'error', 'message' => 'Invalid Merchant'], 400);
        }
        $signature = md5($findMerchant->merchant_code.$findMerchant->secret_key.$request->contact_no.$request->code);
        if($signature !== $request->signature){
            return response()->json(['status' => 'error', 'message' => 'Invalid Signature'], 400);
        }

        if($findMerchant->wallet < 2){
            return response()->json(['status' => 'error', 'message' => 'Insufficient Wallet'], 400);
        }

        $contact = '6'.$request->contact_no; 
        $smscode = $request->code; 
        $message = "RM0 GRH, Your verification code is ".$smscode;

        if (
            SmsTransaction::where('contact_no', $contact)
                ->where('created_at', '>=', now()->subSeconds(30))
                ->exists()
        ) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please wait 30 seconds before requesting another OTP'
            ], 429);
        }
        
        if($findMerchant->type == "sms360myr"){
            $this->url = $this->url . "&to=".$contact."&text=".rawurlencode($message);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $sentResult = curl_exec($ch);
            curl_close($ch);

            if ($sentResult === FALSE) {
                return [
                    'status'  => 'error',
                    'message' => 'OTP ERROR',
                ];
            } 

            $data = json_decode($sentResult, true);
            $smsType = SmsType::where('type', 'sms360myr')->first();
            $before_wallet = $findMerchant->wallet;
            $amount = $smsType->price ??0.12;
            $predict_cost = $smsType->cost ?? 0.12;
            $predict_earn = round($amount - $predict_cost,4);

            $after_wallet = round($before_wallet - $amount, 4);
            $getLastSMS = SmsTransaction::orderBy('id', 'DESC')->whereNull('new_balance_count_from_next')->first();
            
            $newSMS = SmsTransaction::create([
                'user_id'   => $findMerchant->id,
                'contact_no'=> $contact,
                'code'      => $smscode,
                'amount'    => $amount,
                'before_wallet'=>$before_wallet,
                'after_wallet'=>$after_wallet,
                'desc'      => $data['desc'] ?? null,
                'to'        => $data['to'] ?? null,
                'ref'       => $data['ref'] ?? null,
                'currency'  => $data['currency'] ?? null,
                'balance'   => $data['balance']?? null,
                'predict_cost' => $predict_cost,
                'predict_earn' => $predict_earn,
            ]);
            $findMerchant->update([
                'wallet' => $after_wallet,
            ]);

            if(isset($getLastSMS)){
                $cost_count_from_next = round($getLastSMS->balance - $newSMS->balance,4);
                $new_balance_count_from_next = round($getLastSMS->balance - $cost_count_from_next,4);
                $getLastSMS->update([
                    'cost_count_from_next' => $cost_count_from_next,
                    'new_balance_count_from_next' => $new_balance_count_from_next,
                    'earning' => round($getLastSMS->amount - $cost_count_from_next,4),
                ]);
            }

            if ($data['balance'] <= 50) {
                SendTelegramAlertJob::dispatch(
                    "SMS360 Low Balance Alert: {$data['balance']}"
                );
            }

            if ($after_wallet <= 50) {
                SendTelegramAlertJob::dispatch(
                    "Low Balance Alert: User: {$findMerchant->username} - Wallet: RM{$after_wallet}"
                );
            }


            return response()->json(['status' => 'success', 'message' => 'Otp Sent'], 200);
        }else{
            return response()->json(['status' => 'error', 'message' => 'Invalid Type'], 400);
        }
    }

    public function otp_callback(Request $request)
    {
        Log::info('OTP Callback: ' . json_encode($request->all()));
    }

}
