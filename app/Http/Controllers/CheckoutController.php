<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Payler\PaylerAPI;
use App\Models\Addonate;
use App\Models\Donate;
class CheckoutController extends Controller
{
    
    public function checkout(Request $request)
    {
        
        
    //dd($request);
        $key = env('PAYLER_KEY'); 
        $refund_key = env('PAYLER_REFUND_KEY'); 
        $request_body = $request->all();

        $payler = new PaylerAPI($key, $refund_key);
        $session_id = $payler->StartSession(
            $request_body['amount'],
            'OneStep',
            'test-account', 
            $request_body['product_name'] ,
            $request_body['email'] 

        );
        $payler->Payment($session_id );

        
        $pay = Donate::create([
            'id_donate' => $request->id,
            'gift' => $request->amount,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'is_publish' => $request->is_publish,
            'city' => $request->city,
        ]);
        $id_donate = Addonate::find($request->id);
        $gift = Donate::where('id_donate',$id_donate->id)->get()->sum('gift');
        $id_donate->update(['funding_raised'=>$gift]);
        $amount = $request->amount;
        $name = $request->name;
        $surname = $request->surname;
        $product_name = $request->product_name;
        $country = $request->country;
        $city = $request->city;
        $token = "5192338294:AAFc_eK3HynL4xAKoAaz4IQvyW3-woCc6PE";
        $chat_info_nature_lovers = "-1001688669795"; //Для того чтобы узнать ИД чата переходим по ссылке и вводим ИД бота https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_info_nature_lovers}&parse_mode=html&text=Осушествлен DONATE со стороны <b>$name   $surname.</b> в размере <b>$amount TJS.</b> для проекта  <b>$product_name</b> Страна - <b>$country,</b>  Город - <b>$city</b>", "r");
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
