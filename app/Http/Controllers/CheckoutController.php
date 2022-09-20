<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Payler\PaylerAPI;

class CheckoutController extends Controller
{
    
    public function checkout(Request $request)
    {
        $key = env('PAYLER_KEY'); 
        $refund_key = env('PAYLER_REFUND_KEY'); 
        $request_body = $request->all();

        $payler = new PaylerAPI($key, $refund_key);
        $session_id = $payler->StartSession(
            $request_body['amount'],
            'OneStep',
            'test-account', 
            $request_body['product_name'] 
        );
        
        $payler->Payment($session_id );
        
    }
   
    public  function checkStatus(Type $var = null)
    {
        $status = $payler->GetStatus($_GET["order_id"]); 
	
        if ($status == "Charged")
        {
            header ("Location: https://goole.com");
        }
    }
}
