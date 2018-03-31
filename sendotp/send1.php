<?php
require __DIR__ . '/vendor/autoload.php';
use sendotp\sendotp;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$otp = new sendotp( '187962Azrq0fML5a3128a3','Hello, You have a new reply on the topic you started on IPUFORUMS{{otp}}.');
$phone = $_POST["number"];
$response = $otp->send($phone, 'IPUFORUMS');
$out = array_values($response);
print_r (json_encode($response));
}
?>
