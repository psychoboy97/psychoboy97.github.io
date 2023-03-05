<?php
    if(isset($_POST['submit'])){
        $to = "kumarnaiknutan@gmail.com"; // this is the to address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
		$message = $_POST['message'];
        $subject = "Message";
        $body = "Name: ". $name. "\n From: " . $_POST['email'] . "\n Message: " . $_POST['message'];

        $headers = "From:" . $from;
        $mail=mail($to,$subject,$body,$headers);
		if($mail){
			echo "Mail Sent. Thank you " ;
		}else{
			echo "Mail sending failed";
		}
   }
?>
