<?php

$name = $_POST['name'];
$request =  $_POST['request'];

$to = "shishirpatil007@gmail.com";
$subject = "request ip address";
$body = "do not reply for this message. \n\n $request";


mail ($to,$subject,$body);

echo "message sent! <a href='index.html'> clickhere </a> to send another email";

?>