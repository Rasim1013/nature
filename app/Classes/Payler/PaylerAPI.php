<?php
namespace App\Classes\Payler;

use App\Classes\Payler\Models\SessionAnswer;
use App\Classes\Payler\Models\GetStatusAnswer;
use App\Classes\Payler\settings;
use Redirect;		

class PaylerAPI
{
	//session_start();
	private $key;
	private $refund_password;
	private $success_url;

	public function __construct(){
		$this->key =  env('PAYLER_KEY');
		$this->refund_password =  env('PAYLER_REFUND_KEY');
		// $this->success_url =  env('PAYLER_SUCCESS_URL');
	}
		
	public function StartSession($amount, $type, $account, $product)
	{
		$order_id = strtoupper(bin2hex(openssl_random_pseudo_bytes(8)));
		$amount = $amount * 100;
		$currency = "TJS";
		$email = "leica530@mail.ru";
		$template = "";
		$lang = "en";
		$userdata = "";
		$recurrent = 0;
		$pay_page_param = "";
		$total = 1;
		
		$url = "https://sandbox.payler.com/gapi/StartSession?key=$this->key&type=$type&order_id=$order_id&amount=$amount&currency=$currency&product=$account&total=$total&recurrent=$recurrent&email=$email";
		$amount = $amount / 100;
		
		$body = $this->SendRequest($url);
		$json = json_decode($body, true);
		$result = new SessionAnswer();
			
		$result->amount = $json['amount'];
		$result->session_id = $json['session_id'];
		$result->order_id = $json['order_id'];  

		/*$servername = "localhost";
		$username = "epayuser";
		$password = "Yagonchi314";
		$dbname = "epay";
				
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec("set names utf8");
					
		$phone = preg_replace("/[^0-9]/", "", $account);
		
		$stmt = $conn->prepare('insert into payment_v (order_id, amount, init_date, account, session_idd) values (:order, :amount, now(), :account, :sess)');
		$stmt->bindParam(':order',$result->order_id);
		$stmt->bindParam(':amount',$amount);
		$stmt->bindParam(':account',$phone);
		$stmt->bindParam(':sess',$result->session_id);
		$stmt->execute();*/
		
		return $result->session_id;
	}
	
	public function Payment($session_id){
	
		if (empty($session_id))
		{
			dd(1);
			echo "no_session_id_found";
		}
		else
		{
			//echo "https://sandbox.payler.com/gapi/Pay?session_id=".$session_id;
			$url = "https://sandbox.payler.com/gapi/Pay?session_id=".$session_id;

			return redirect()->to($url)->send();
		}
	}
	
	public function GetStatus($order_id)
	{
		$url = "https://sandbox.payler.com/gapi/GetStatus?key=$this->key&order_id=$order_id";
		
		$body = $this->SendRequest($url);
		$json = json_decode($body, true);
				
		$result = new GetStatusAnswer();
		try
		{
			if (!strpos($body, "code"))
			{
				$result->status = $json['status'];
				$result->amount = $json['amount'];
				//$result->recurrent_template_id = $json['recurrent_template_id'];  
				$result->order_id = $json['order_id'];
				$result->payment_type = $json['payment_type'];
				return $result->status;
			}
			else
			{
				return $json["error"]["message"];
			}
		}
		catch(Exception $exc)
		{
			return $exc->getMessage();
		}
	}
	
	public function Refund($order_id, $amount)
	{
		$url = "https://sandbox.payler.com/gapi/Refund?key=$this->key&order_id=$order_id&password=$this->refund_password&amount=$amount";
		
		$body = $this->SendRequest($url);
		$json = json_decode($body, true);
		try
		{
			if (!strpos($body, "code"))
			{
				return $json["amount"];
			}
			else
			{
				return $json["error"]["message"];
			}
		}
		catch(Exception $exc)
		{
			return $exc->getMessage();
		}
	}
	
	private function SendRequest($url)
	{
		$process = curl_init($url);
		
		curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-type: x-www-form-urlencoded'));
		curl_setopt($process, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		curl_setopt($process, CURLOPT_HEADER, 1);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($process, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($process, CURLOPT_RETURNTRANSFER,TRUE);
		
		$response=curl_exec($process);
		
		if($response === FALSE)
		{
			die(curl_error($process));
		}
		
		$header_size = curl_getinfo($process, CURLINFO_HEADER_SIZE);
		$header = substr($response, 0, $header_size);
		$body = substr($response, $header_size);
		
		curl_close($process);
		return $body;
	}
}

?>