<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
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

        $contact = '6'.$request->contact_no; 
        $smscode = $request->code; 
        $message = "RM0 GRH, Your verification code is ".$smscode;

        $this->url = $this->url . "&to=".$contact."&text=".rawurlencode($message);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $sentResult = curl_exec($ch);
        curl_close($ch);

        return response()->json(['status' => 'success', 'message' => 'Connected', 'data' => $request->all(),'otp_reply' => $sentResult], 200);
    }

    public function otp_callback(Request $request)
    {
        Log::info('OTP Callback: ' . json_encode($request->all()));
    }

}
