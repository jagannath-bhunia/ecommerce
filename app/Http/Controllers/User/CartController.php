<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Item; 
use App\Models\Cart;
use App\Models\Book; 
use App\Models\Order; 

use DB; 
class CartController extends Controller
{
    
    public function cartindex()
    {

        $item = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'items.id')->where('carts.user_id', '=', Auth::user()->id)
            
            ->get();
 
        return view('user.page.cart', compact('item'));
    }
    public function cart()
    {
        return view('user.page.cart');
    }
    public function addToCart( Request $request)
    {
        $qty = $request->qty;
        $product = Item::find($request->item_id);
        $item_id = $product->id;
        $userid = Auth::User()->id;

        //if cart is empty then this the first product
        $a=DB::table('carts')->where('item_id',$item_id)->where('user_id',$userid)->count();
        if($a==0){
            $item = new Cart;
            $item->item_id = $item_id;
            $item->user_id = $userid;
            $item->qty = $qty;
            $item->save();
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        }else{
            DB::table('carts')->where('item_id',$item_id)->where('user_id',$userid)->update(['qty' => $qty]);
           
        }

        

    }


    public function update(Request $request)
    {
        // echo "abc";
        // exit();
        $qty = $request->qty;
        $product = Item::find($request->item_id);
        $item_id = $product->id;
        $userid = Auth::User()->id;
        DB::table('carts')->where('item_id',$item_id)->where('user_id',$userid)->update(['qty' => $qty]);
    }
 
    public function remove(Request $request)
    {

        
        $cart_id = $request->cart_id;
       $a= DB::table('carts')->where('cart_id',$cart_id)->delete();
        echo $a;
        // $user->delete();
    }


    public function qty(){
        $userid = Auth::User()->id;
        $count = DB::table('carts')->where('user_id',$userid)->count();
        echo $count;
    }


    public function checkout(Request $request){
        $item = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'items.id')->where('carts.user_id', '=', Auth::user()->id)
            
            ->get();
            return view('user.page.checkout', compact('item'));
    
         
    }

    public function book(Request $request){

        
        $abc = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'items.id')->where('carts.user_id', '=', Auth::user()->id)
            
            ->get();
            
        $total = 0;
        foreach($abc as $details){
            $total += $details->price * $details->qty;
        }
       
        $userid = Auth::User()->id;

        $book = new Book;
        $book->user_id = $userid;
        $book->order_id=uniqid();
        $book->status='pending';
        $book->transaction_id='';
        $book->total = $total;
        $book->country = $request->country;
        $book->f_name = $request->f_name;
        $book->l_name = $request->l_name;
        $book->address = $request->address;
        $book->city = $request->city;
        $book->state = $request->state;
        $book->zip = $request->zip;
        $book->email = $request->email;
        $book->phone = $request->phone;
        $book->payment = $request->payment;

        $book->save();
        
     
        $users =  DB::table('books')->latest('book_id')->first();
        $userid = Auth::User()->id;
        $cart=Cart::all(); 
            foreach($cart as $cart1){
                $cart2= new Order;
                $cart2->book_id=$users->book_id;
                $cart2->item_id=$cart1->item_id;
                $cart2->qty=$cart1->qty;
                $cart2->save();
            } 
        DB::table('carts')->delete();
        
        // echo $email;
        $data_for_request=$this->paytmrequest($book->order_id,$book->total);
        $payment_txn_url='https://securegw-stage.paytm.in/theia/processTransaction';  
        $paramList=$data_for_request['paramList'];
        $checkSum=$data_for_request['checkSum'];
        
        return view('user.page.paytm_merchant_form',compact('payment_txn_url','paramList','checkSum'));
    }


    public function paytmrequest($order_id,$amount){
      

        $this->getallfunc();
        $this->config();

        $checkSum="";
        $paramList=array();

        $paramList['MID']='oFvNHC87870937224898';
        $paramList['ORDER_ID']=$order_id;
        $paramList['CUST_ID']=$order_id;
        $paramList['INDUSTRY_TYPE_ID']='Retail';
        $paramList['CHANNEL_ID']='WEB';
        $paramList['TXN_AMOUNT']=$amount;
        $paramList['WEBSITE']='WEBSTAGING';
        $paramList['CALLBACK_URL']=url('/paytmcallback');
        $paytm_merchant_key = 'B_4g8j_VnOFtMMek';

        $checkSum = getChecksumFromArray($paramList,$paytm_merchant_key);

        return array(
            'checkSum'=>$checkSum,
            'paramList'=>$paramList
        );  
    }


    public function paytmcallback(Request $request){
        // return $request;
        $order_id=$request['ORDERID'];
        // $user_id=auth()->id();
        // $user=User::find($user_id);

        if('TXN_SUCCESS'===$request['STATUS']){
            $transaction_id=$request['TXNID'];
            $id=$request['ORDERID'];
            $status='complete';
            //$order=Book::where('order_id',$id)->update('status','=',$status)->update('transaction_id','=',$transaction_id);
            $order=DB::table('books')->where('order_id',$id)->update(['status' => "complete"],['transaction_id'=>$transaction_id]);
            //  $order->status='complete';
            // // // $order->payment_received='yes';
            //  $order->transaction_id=$transaction_id;
            //  $order->save();
            return view('user.page.ordercomplete',compact('order'));
        }else if('TXN_FAILURE'===$request['STUTUS']){
            return view('user.page.paymentfail');
        }

    }





    function getallfunc(){
                
        function encrypt_e($input, $ky) {
            $key   = html_entity_decode($ky);
            $iv = "@@@@&&&&####$$$$";
            $data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
            return $data;
        }

        function decrypt_e($crypt, $ky) {
            $key   = html_entity_decode($ky);
            $iv = "@@@@&&&&####$$$$";
            $data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
            return $data;
        }

        function generateSalt_e($length) {
            $random = "";
            srand((double) microtime() * 1000000);

            $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
            $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
            $data .= "0FGH45OP89";

            for ($i = 0; $i < $length; $i++) {
                $random .= substr($data, (rand() % (strlen($data))), 1);
            }

            return $random;
        }

        function checkString_e($value) {
            if ($value == 'null')
                $value = '';
            return $value;
        }

        function getChecksumFromArray($arrayList, $key, $sort=1) {
            if ($sort != 0) {
                ksort($arrayList);
            }
            $str = getArray2Str($arrayList);
            $salt = generateSalt_e(4);
            $finalString = $str . "|" . $salt;
            $hash = hash("sha256", $finalString);
            $hashString = $hash . $salt;
            $checksum = encrypt_e($hashString, $key);
            return $checksum;
        }
        function getChecksumFromString($str, $key) {
            
            $salt = generateSalt_e(4);
            $finalString = $str . "|" . $salt;
            $hash = hash("sha256", $finalString);
            $hashString = $hash . $salt;
            $checksum = encrypt_e($hashString, $key);
            return $checksum;
        }

        function verifychecksum_e($arrayList, $key, $checksumvalue) {
            $arrayList = removeCheckSumParam($arrayList);
            ksort($arrayList);
            $str = getArray2StrForVerify($arrayList);
            $paytm_hash = decrypt_e($checksumvalue, $key);
            $salt = substr($paytm_hash, -4);

            $finalString = $str . "|" . $salt;

            $website_hash = hash("sha256", $finalString);
            $website_hash .= $salt;

            $validFlag = "FALSE";
            if ($website_hash == $paytm_hash) {
                $validFlag = "TRUE";
            } else {
                $validFlag = "FALSE";
            }
            return $validFlag;
        }

        function verifychecksum_eFromStr($str, $key, $checksumvalue) {
            $paytm_hash = decrypt_e($checksumvalue, $key);
            $salt = substr($paytm_hash, -4);

            $finalString = $str . "|" . $salt;

            $website_hash = hash("sha256", $finalString);
            $website_hash .= $salt;

            $validFlag = "FALSE";
            if ($website_hash == $paytm_hash) {
                $validFlag = "TRUE";
            } else {
                $validFlag = "FALSE";
            }
            return $validFlag;
        }

        function getArray2Str($arrayList) {
            $findme   = 'REFUND';
            $findmepipe = '|';
            $paramStr = "";
            $flag = 1;	
            foreach ($arrayList as $key => $value) {
                $pos = strpos($value, $findme);
                $pospipe = strpos($value, $findmepipe);
                if ($pos !== false || $pospipe !== false) 
                {
                    continue;
                }
                
                if ($flag) {
                    $paramStr .= checkString_e($value);
                    $flag = 0;
                } else {
                    $paramStr .= "|" . checkString_e($value);
                }
            }
            return $paramStr;
        }

        function getArray2StrForVerify($arrayList) {
            $paramStr = "";
            $flag = 1;
            foreach ($arrayList as $key => $value) {
                if ($flag) {
                    $paramStr .= checkString_e($value);
                    $flag = 0;
                } else {
                    $paramStr .= "|" . checkString_e($value);
                }
            }
            return $paramStr;
        }

        function redirect2PG($paramList, $key) {
            $hashString = getchecksumFromArray($paramList);
            $checksum = encrypt_e($hashString, $key);
        }

        function removeCheckSumParam($arrayList) {
            if (isset($arrayList["CHECKSUMHASH"])) {
                unset($arrayList["CHECKSUMHASH"]);
            }
            return $arrayList;
        }

        function getTxnStatus($requestParamList) {
            return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
        }

        function getTxnStatusNew($requestParamList) {
            return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
        }

        function initiateTxnRefund($requestParamList) {
            $CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
            $requestParamList["CHECKSUM"] = $CHECKSUM;
            return callAPI(PAYTM_REFUND_URL, $requestParamList);
        }

        function callAPI($apiURL, $requestParamList) {
            $jsonResponse = "";
            $responseParamList = array();
            $JsonData =json_encode($requestParamList);
            $postData = 'JsonData='.urlencode($JsonData);
            $ch = curl_init($apiURL);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
            'Content-Type: application/json', 
            'Content-Length: ' . strlen($postData))                                                                       
            );  
            $jsonResponse = curl_exec($ch);   
            $responseParamList = json_decode($jsonResponse,true);
            return $responseParamList;
        }

        function callNewAPI($apiURL, $requestParamList) {
            $jsonResponse = "";
            $responseParamList = array();
            $JsonData =json_encode($requestParamList);
            $postData = 'JsonData='.urlencode($JsonData);
            $ch = curl_init($apiURL);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
            'Content-Type: application/json', 
            'Content-Length: ' . strlen($postData))                                                                       
            );  
            $jsonResponse = curl_exec($ch);   
            $responseParamList = json_decode($jsonResponse,true);
            return $responseParamList;
        }
        function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
            if ($sort != 0) {
                ksort($arrayList);
            }
            $str = getRefundArray2Str($arrayList);
            $salt = generateSalt_e(4);
            $finalString = $str . "|" . $salt;
            $hash = hash("sha256", $finalString);
            $hashString = $hash . $salt;
            $checksum = encrypt_e($hashString, $key);
            return $checksum;
        }
        function getRefundArray2Str($arrayList) {	
            $findmepipe = '|';
            $paramStr = "";
            $flag = 1;	
            foreach ($arrayList as $key => $value) {		
                $pospipe = strpos($value, $findmepipe);
                if ($pospipe !== false) 
                {
                    continue;
                }
                
                if ($flag) {
                    $paramStr .= checkString_e($value);
                    $flag = 0;
                } else {
                    $paramStr .= "|" . checkString_e($value);
                }
            }
            return $paramStr;
        }
        function callRefundAPI($refundApiURL, $requestParamList) {
            $jsonResponse = "";
            $responseParamList = array();
            $JsonData =json_encode($requestParamList);
            $postData = 'JsonData='.urlencode($JsonData);
            $ch = curl_init($apiURL);	
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $refundApiURL);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);  
            $jsonResponse = curl_exec($ch);   
            $responseParamList = json_decode($jsonResponse,true);
            return $responseParamList;
        }

    }

    function config(){
                /*
        - Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.
        - Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
        - Change the value of PAYTM_MERCHANT_MID constant with details received from Paytm.
        - Change the value of PAYTM_MERCHANT_WEBSITE constant with details received from Paytm.
        - Above details will be different for testing and production environment.
        */

        define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
        define('PAYTM_MERCHANT_KEY', 'B_4g8j_VnOFtMMek'); //Change this constant's value with Merchant key received from Paytm.
        define('PAYTM_MERCHANT_MID', 'oFvNHC87870937224898'); //Change this constant's value with MID (Merchant ID) received from Paytm.
        define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.

        $PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
        $PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
        if (PAYTM_ENVIRONMENT == 'PROD') {
            $PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
            $PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
        }

        define('PAYTM_REFUND_URL', '');
        define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
    }
}
