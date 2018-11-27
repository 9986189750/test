<?php
	$Latitude=$_POST["Latitude"];
	$Longitude=$_POST["Longitude"];
	$IPaddress=$_SERVER['REMOTE_ADDR'];
	$msg='';
	$msg.="IPaddress: ".$IPaddress;
	$msg.='lat: ' . $Latitude . '<br />';
	$msg.='lat: ' . $Longitude . '<br />';
	$subject = "Location Test";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <contact@cybotrix.com>' . "\r\n";
	$headers .= 'Cc: shishirpatil007@gmail.com' . "\r\n";
	$to = "shishirpatil007@gmail.com";
	mail($to,$subject,$msg,$headers);
	echo json_encode($msg);
?>
