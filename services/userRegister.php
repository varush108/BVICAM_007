<?php

$data_inserted =false;
require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$prefix = "user";

	$UID = uniqid($prefix);
		// Prepare an insert statement
        $sql = "INSERT INTO user (UID,name,email,phoneNo,DOB,aadharNo,password_hash,mobile_verified,email_verified,user_type) 
		VALUES (:uid,:name,:email,:phoneNo,:DOB,:aadharNo,:password,:m_verified,:e_verified,:user_type)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$timestamp = date(NULL);
            $stmt->bindParam(":uid",$ID);
			$stmt->bindParam(":name",$name);
			$stmt->bindParam(":email",$email);
			$stmt->bindParam(":password",$password);
			$stmt->bindParam(":phoneNo",$mobile);
			$stmt->bindParam(":aadharNo",$aadhar);
			$stmt->bindParam(":DOB",$DOB);
			$stmt->bindParam(":user_type",$user_type);
			$stmt->bindParam(":m_verified",$m_verified);
			$stmt->bindParam(":e_verified",$e_verified);
		

			
            // Set parameters
			$ID = $UID;
			$name = $_POST["userName"];
			$email = $_POST["userEmail"];
			$password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
			$mobile = $_POST["userMobile"];
			$aadhar = $_POST["userAadhar"];
			$DOB = $_POST["userDOB"];
			$user_type= "user";
			$m_verified = 1;
			$e_verified = 0;
			
            // Attempt to execute the prepared statement
            if($stmt->execute()){
               $data_inserted = true;
			   
			   
            } else{
				$data_inserted = false;
            }
        }
		echo $data_inserted;
}

?>

