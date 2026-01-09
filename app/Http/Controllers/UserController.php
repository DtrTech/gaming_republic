<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserVerification;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\UserCart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\UserOtp;
use App\Jobs\SendOtpJob;
use App\Exceptions\Failed;
use Exception;
use Carbon\Carbon;

class UserController extends Controller
{
    private $user   = 'gl9av4VdG1';
    private $pass   = 'aIoyRLcJ2CHMUiYTUoyxbNsupNm7yM4et0KD9aQI';
    private $from   = '68068';
    private $url    = 'https://sms.360.my/gw/bulk360/v3_0/send.php';

    public function __construct(){
        $this->user = urlencode($this->user);
        $this->pass = urlencode($this->pass);
        $this->url = $this->url . "?user=$this->user&pass=$this->pass&from=$this->from";
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'unique:users,username,NULL,id,deleted_at,NULL', 'min:4', 'max:18'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ], [
            'username.required' => 'The username is required.',
            'username.string' => 'The username must be a string.',
            'username.unique' => 'This username is already taken.',
            'username.min' => 'The username must be at least 4 characters.',
            'username.max' => 'The username may not be greater than 18 characters.',
            
            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        if ($validator->fails()) {
            throw new Failed($validator->errors()->first()); 
        }

        $contact_no= $request->contact_no;
        if (substr($contact_no, 0, 1) === '6') {
            $contact_no = substr($contact_no, 1);
        } elseif (substr($contact_no, 0, 1) === '1') {
            $contact_no = '0' . $contact_no;
        }elseif (substr($contact_no, 0, 1) === '0') {
            // Already valid, do nothing
        } else {
            return [
                'message' => 'Invalid contact number format.',
                'success' => false,
            ];
        }
        $request->merge(['contact_no'=>$contact_no]);

        // $verification = UserOtp::where('contact_no',$request->contact_no)->first();
        // if($verification->verified == 1){
        //     throw new Failed($request->contact_no.' has been taken by others.');
        // }

        // if($verification->code != $request->otp){
        //     throw new Failed('Invalid OTP');
        // }
        $request->merge(['password'=>Hash::make($request->password),'email'=>$request->contact_no.'@gmail.com','role_id'=>2]);
        
        $user = User::create($request->all());

        // $verification->update(['verified'=>1,'verified_at'=>Carbon::now()]);

        Auth::login($user);

        return response()->json(['success'=>true, 'message'=>'Account created!', 'data'=>json_encode($request->all())]);
    }


    public function request_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'unique:users,username,NULL,id,deleted_at,NULL', 'min:4', 'max:18',],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ], [
            'username.required' => 'The username is required.',
            'username.string' => 'The username must be a string.',
            'username.unique' => 'This username is already taken.',
            'username.min' => 'The username must be at least 4 characters.',
            'username.max' => 'The username may not be greater than 18 characters.',
            
            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        if ($validator->fails()) {
            throw new Failed($validator->errors()->first()); 
        }

        $contact_no= $request->contact_no;
        if (substr($contact_no, 0, 1) === '6') {
            $contact_no = substr($contact_no, 1);
        } elseif (substr($contact_no, 0, 1) === '1') {
            $contact_no = '0' . $contact_no;
        }elseif (substr($contact_no, 0, 1) === '0') {
            // Already valid, do nothing
        } else {
            return [
                'message' => 'Invalid contact number format.',
                'success' => false,
            ];
        }
        $request->merge(['contact_no'=>$contact_no]);
        
        $verification = UserOtp::where('contact_no',$request->contact_no)->first();
        if(isset($verification) && $verification->verified == 1){
            return [
                'message' => $request->contact_no.' has been taken by others.',
                'success' => false,
            ];
        }

        $contact = '6'.$request->contact_no; 
        $smscode = $this->randomNum(); 
        $message = "Your verification code is ".$smscode;

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
                'msg' => 'SMS ERROR',
                'success' => false,
            ];
        } 
        UserOtp::updateOrCreate(
            [
                'contact_no' => $request->contact_no, 
            ],
            [
                'code' => $smscode,
            ]
        );
        // dd($request->all());
        return response()->json(['success'=>true, 'message'=>'OTP has been sent to '.$request->contact_no]);
    }

    private function randomNum() {
        return rand(100000, 999999);
    }

    public function login(Request $request)
    {
        try{
            $user = User::where('username',$request->username)->orWhere('contact_no',$request->username)->first();
            // dd($user);
            if(!isset($user) || !Hash::check($request->password, $user->password)){
                throw new Failed('Invalid username/contact_no or password.');
            }
            Auth::login($user);
            return response()->json(['success'=>true, 'message'=>'Login Successful']);
        }

        catch(Failed $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
        }
        catch(Exception $e){
            return response()->json(['success'=>false, 'message'=>'There is something wrong, please try again.']);
        }
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return response()->json(['success'=>true,'message'=>'Logout']);
    }

    public function add_to_cart(Request $request){
        try{
            DB::beginTransaction();
            if(!Auth::user()){
                throw new Failed('Please login first.');
            }

            $user = User::where('id',Auth::user()->id)->first();
            if(!isset($user)){
                throw new Failed('Invalid user.');
            }

            // PRODUCT
            if(!isset($request->product)){
                throw new Failed('Undefined product, please try again.');
            }
            $product = Product::where('id',$request->product)->first();
            if(!isset($product) || $product->status == 0){
                throw new Failed('Selected product is no available.');
            }

            // VARIANT
            if(!isset($request->variant)){
                throw new Failed('Undefined product option, please try again.');
            }
            $variant = ProductVariant::where('product_id',$product->id)->where('id',$request->variant)->first();
            if(!isset($variant) || $variant->status == 0){
                throw new Failed('Selected product is no longer available.');
            }
            
            // QUANTITY
            if(!isset($request->quantity)){
                throw new Failed('Undefined quantity, please try again.');
            }
            if($request->quantity > $variant->quantity){
                throw new Failed('Selected item only have '.$varaint->quantity.' in stock. Please adjust your quantity.');
            }

            $exist_cart = UserCart::where('product_id',$product->id)->where('variant_id',$variant->id)->where('user_id',$user->id)->where('status','pending')->first();
            if($exist_cart){
                if($exist_cart->quantity + $request->quantity > $variant->quantity){
                    throw new Failed('Total quantity of selected product in your cart is more than available stock, please adjust your quantity.');
                }
                $exist_cart->update(['quantity'=>$request->quantity + $exist_cart->quantity]);
            }
            else{
                UserCart::create([
                    'product_id'=>$product->id,
                    'variant_id'=>$variant->id,
                    'quantity'=>$request->quantity,
                    'user_id'=>$user->id,
                    'status'=>'pending',
                ]);
            }
            DB::commit();
            $total_cart = UserCart::where('status','pending')->where('user_id',$user->id)->count();
            return response()->json(['success'=>true,'message'=>'Added to Cart','cart'=>$total_cart]); 
        }
        catch(Failed $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage()]);
        }
        catch(Exception $e){
            DB::rollback();
            //return response()->json(['success'=>false,'message'=>$e->getMessage()]);
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again']);
        }
    }


    public function load_cart(Request $request){
        try{
     
            if(!Auth::user()){
                return redirect()->route('home');
            }

            $user = User::where('id', Auth::user()->id)->first();
            if(!isset($user)){
                throw new Failed('Invalid user.');
            }

            $carts = UserCart::join('products','user_carts.product_id','=','products.id')
            ->join('product_variants','user_carts.variant_id', '=', 'product_variants.id')
            ->select('user_carts.id', 'user_carts.status', 'products.name as product_name', 'product_variants.name as variant_name', 'product_variants.price', 'product_variants.image', 'product_variants.discount', 'products.short_name', 'product_variants.quantity as stock', 'user_carts.quantity')
            ->where('user_carts.user_id', Auth::user()->id)->where('user_carts.status','pending')->get();
            
            $products = [];
            foreach($carts as $cart){
                if (!isset($products['c'.$cart->short_name])) {
                    $products['c'.$cart->short_name] = ['name'=>$cart->product_name,'items'=>[]];
                }
                $products['c'.$cart->short_name]['items'][] = $cart->toArray();
            }

            return view('cart')->with('carts',$products);
        }
        catch(Failed $e){
            return response()->json(['success'=>false,'message'=>$e->getMessage()]);
  
        }
        catch(Exception $e){
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again']);
        }
    }

    private function getCartDetail(UserCart $cart, ProductVariant $variant){
        $discount = false;
        if($variant->discount && $variant->discount > 0){
            $discount = ($variant->price * (1 - $variant->discount / 100));
        }
        return [
            'quantity'=>$cart->quantity,
            'price_after'=>$discount != false ? number_format(($discount * $cart->quantity), 2, '.','') : false, 
            'price_before'=>number_format(($variant->price * $cart->quantity), 2, '.','')
        ];
    }



    public function update_cart_quantity(Request $request){
        try{
            DB::beginTransaction();
            if(!Auth::user()){
                throw new Failed('Please login first.');
            }

            $user = User::where('id', Auth::user()->id)->first();
            if(!isset($user)){
                throw new Failed('Invalid user.');
            }

            if(!isset($request->quantity) || !is_numeric($request->quantity) || $request->quantity <= 0){
                throw new Failed('Invalid quantity');
            }

            $cart = UserCart::where('user_id', Auth::user()->id)->where('id',$request->cart)->first();
            if(!isset($cart)){
                throw new Failed('Failed to adjust quantity.');
            }

            $variant = ProductVariant::where('id',$cart->variant_id)->first();
            if(!isset($variant)){
                throw new Failed('Unable to find selected item.');
            }

            if($cart->status != 'pending'){
                throw new Failed('Selected item is no longer available.');
            }
            
            if($variant->status == 0){

            
                $cart->update(['status'=>'out']);
                DB::commit();
                return response(['success'=>false, 'message'=>'Selected item is no longer available.', 'action'=>'delete', 'cart'=>$cart->id]);
            }

            if($variant->quantity <= 0){
                $cart->update(['status'=>'out']);
                DB::commit();
                return response(['success'=>false, 'message'=>'Selected item is out of stock.', 'action'=>'delete', 'cart'=>$cart->id]);
            }

            if($variant->quantity < $request->quantity){
                $cart->update(['quantity'=>$variant->quantity]);
                DB::commit();
                return response(['success'=>false, 'message'=>'Only '.$variant->quantity.' stocks left.', 'action'=>'update', 'cart'=>$cart->id, 'data'=>$this->getCartDetail($cart, $variant)]);
                
            }

            $cart->update(['quantity'=>$request->quantity]);
            DB::commit();
            return response(['success'=>true, 'message'=>'updated', 'action'=>'update', 'cart'=>$cart->id, 'data'=>$this->getCartDetail($cart, $variant)]);

        }
        catch(Failed $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage(),'action'=>false]);
  
        }
        catch(Exception $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage(),'action'=>false]);
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again','action'=>false]);
          
        }
    }


    public function drop_cart(Request $request){
        try{
            DB::beginTransaction();
            if(!Auth::user()){
                throw new Failed('Please login first.');
            }

            $user = User::where('id', Auth::user()->id)->first();
            if(!isset($user)){
                throw new Failed('Invalid user.');
            }

            $cart = UserCart::where('user_id', Auth::user()->id)->where('id',$request->cart)->first();
            if(!isset($cart)){
                throw new Failed('Unable to find selected item.');
            }
            $id = $cart->id;
            $cart->delete();
            DB::commit();
            return response(['success'=>true, 'message'=>'Item has been removed from cart', 'cart'=>$id]);

        }
        catch(Failed $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage(),'action'=>false]);
  
        }
        catch(Exception $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage(),'action'=>false]);
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again','action'=>false]);
          
        }
        
    }

    function profile(){
        if(!Auth::check()){
            return redirect()->route('home');
        }
        return view('profile');
    }

    function change_password(){
        if(!Auth::check()){
            return redirect()->route('home');
        }
        return view('change_password');
    }

    function new_password(Request $request){
        if(!Auth::check()){
            return redirect()->route('home');
        }
        try{
            if(!isset($request->current_password) || !isset($request->new_password) || !isset($request->re_new_password)){
                throw new Failed('Invalid input.');
            }

            if ($request->new_password !== $request->re_new_password) {
                throw new Failed('New password does not match.');
            }

            $user = User::find(Auth::user()->id);
            if (!Hash::check($request->current_password, $user->password)) {
                throw new Failed('Current password is incorrect.');
            }
            
            $user->update(['password'=>Hash::make($request->new_password)]);
            return response()->json(['success'=>true, 'message'=>'Password updated successfly.']);
        }
        catch(Failed $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
        }
        catch(Exception $e){
            return response()->json(['success'=>false, 'message'=>'There is something wrong, please try again.']);
        }
    }

    function order(Request $request){
        if(!Auth::check()){
            return redirect()->route('home');
        }
        $status = isset($request->status) && in_array($request->status, ['completed','refunded','pending','failed']) ? $request->status : 'pending';
        $page = isset($request->page) && is_numeric($request->page) ? $request->page : 1;
        $limit = 10;
        $orders = Order::where('user_id', Auth::user()->id)->where('status',$status)->orderBy('updated_at')->paginate($limit, ['*'], 'page', $page);
        foreach($orders as $order){
            $order->items = OrderItem::where('order_id',$order->id)->select('product_name','variant_name','quantity','amount','discount','image')->orderBy('product_name')->get();    
        }
        $max_page = $orders->lastPage();
        return view('order', compact('orders','max_page','page','status'));
    }
}
