<?php

$IPaddress=$_SERVER['REMOTE_ADDR'];
echo $msg='';
echo $IPaddress; 


//$geoIP  = json_decode(file_get_contents("http://freegeoip.net/json/$IPaddress"), true);

//echo '<pre>'; print_r($geoIP); exit;

$msg.="IPaddress: ".$IPaddress;
$msg.='lat: ' . $geoIP['latitude'] . '<br />';
$msg.='lat: ' . $geoIP['longitude'] . '<br />';


$from = 'renukapdambal@gmail.com';
$to = 'shishirpatil007@gmail.com' ;
$subject="Location";

if ( mail($to,$subject,$msg,$headers) ) {
   echo 'The email has been sent!';
   } else {
   echo 'The email has failed!';
   }



exit;



?>




