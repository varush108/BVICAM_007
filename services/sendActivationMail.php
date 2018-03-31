<?php

$data_inserted =false;
require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$UID = uniqid($prefix);
		// Prepare an insert statement
        $sql = "INSERT INTO users (uid,fullname,email,mobile,password_hash,DOB,college,email_verified,mobile_verified,user_type,email_hash,is_active,is_deleted) 
		VALUES (:uid,:fullname,:email,:mobile,:password,:DOB,:college,:e_verified,:m_verified,:user_type,:email_hash,:is_active,:is_deleted)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$timestamp = time();
            $stmt->bindParam(":uid",$ID);
			$stmt->bindParam(":fullname",$name);
			$stmt->bindParam(":email",$email);
			$stmt->bindParam(":password",$password);
			$stmt->bindParam(":mobile",$mobile);
			$stmt->bindParam(":DOB",$DOB);
			$stmt->bindParam(":college",$college);
			$stmt->bindParam(":user_type",$user_type);
			$stmt->bindParam(":email_hash",$email_hash);
			$stmt->bindParam(":is_active",$is_active);
			$stmt->bindParam(":is_deleted",$is_deleted);
			$stmt->bindParam(":m_verified",$m_verified);
			$stmt->bindParam(":e_verified",$e_verified);
			
            // Set parameters
			$ID = $UID;
			$name = $_POST["userName"];
			$email = $_POST["userEmail"];
			$password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
			$mobile = $_POST["userPhone"];
			$DOB = $_POST["userDOB"];
			$college= $_POST["userCollege"];
			$user_type= "student";
			$email_hash = hash("md5",$email);
			$is_active = 0;
			$is_deleted = 0;
			$m_verified = "yes";
			$e_verified = "no";
			$created = $timestamp;
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

