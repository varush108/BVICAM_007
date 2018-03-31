<?php
require __DIR__ . '/vendor/autoload.php';
use sendotp\sendotp;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$otp = new sendotp( '187962Azrq0fML5a3128a3','Your otp for IPUFORUMS is {{otp}}. Please do not share this with anyone.');
$phone = $_POST["number"];
$response = $otp->send($phone, 'IPUFORUMS');
$out = array_values($response);
print_r (json_encode($response));
}
?>
