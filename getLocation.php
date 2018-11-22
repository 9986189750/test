
<?php

echo "here"; 
if(isset($_GET["Latitude"]))
{ $Latitude=$_GET["Latitude"];	}

if(isset($_GET["Longitude"]))
{ $Longitude=$_GET["Longitude"];	}

$IPaddress=$_SERVER['REMOTE_ADDR'];
$msg='';



//$geoIP  = json_decode(file_get_contents("http://freegeoip.net/json/$IPaddress"), true);

//echo '<pre>'; print_r($geoIP); exit;

$msg.="IPaddress: ".$IPaddress;
$msg.='lat: ' . $Latitude . '<br />';
$msg.='lat: ' . $Longitude . '<br />';


$headers = "From: soumyachidambara@gmail.com\r\n";
$headers .= "Reply-To: shishirpatil007@gmail.com\r\n";
$headers .= "Return-Path: soumyachidambara@gmail.com\r\n";

$to="shishirpatil007@gmail.com";
$subject="Location";

if ( mail($to,$subject,$msg,$headers) ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }



echo json_encode($msg);
exit;




?>
