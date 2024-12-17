<?php
$to="najumv36@gmail.com";
$subject="message";
$message="Hello,how are you?hope you are doing well";
$headers="From:yusraash44@gmail.com";
if (mail($to,$subject,$message,$headers)){
	echo "EMAIL SENT SUCCESSFULLY";
}else{
	echo "FAILED TO SEND EMAIL";
}
?>