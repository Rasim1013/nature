//		<?php
//		if (empty($_GET["order_id"]))
//		{
//			//header ("Location: https://sandbox.payler.com/gapi/Pay?session_id=".$session_id);
//			echo "no order_id found";
//			die();
//		}
//		else
//		{
//			include("PaylerApi.php");
//			
//			$payler = new PaylerIntegration();
//			$status = $payler->GetStatus($_GET["order_id"]); 
//			
//			if ($status == "Charged")
//			{
//				header ("Location: https://goole.com");
//			}
//		}
//		?>