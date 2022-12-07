if(isset($_POST['submit'])) 
      { 
      	$to= "pranske@ou.edu"; 
      	$subject= "Man Clothes Message"; 
      	$msg= $_POST["message"]; //textarea value will be send as message here. 
      	$header= "From: " . "contact@pranske.oucreate.com" //For example: From: abc@xyz.com 
      	mail($to,$subject,$msg,$header); 
      } 
