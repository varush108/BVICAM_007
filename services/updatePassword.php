<?php

$data_inserted =false;
require_once '../config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
     $sql = "UPDATE  users SET fullname=:name where UID=:uid";
         
        if($stmt = $pdo->prepare($sql)){
			$stmt->bindParam(":uid",$ID);
			$stmt->bindParam(":password",$password);
			$password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
			$ID = $_SESSION["UID"];
			$name = $_POST["name"];
			if($stmt->execute()){
               $data_inserted = true;
			   
			   echo "password changed";
			   
            } else{
				$data_inserted = false;
            }
        }
		echo $data_inserted;
		//header("location:../my-profile-login.php");
}

?>

