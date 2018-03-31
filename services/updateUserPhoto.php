<?php
require_once '../config.php';
		// Prepare an insert statement
        $sql = "UPDATE users SET images = :image WHERE UID = :uid";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$stmt->bindParam(":image",$uid);
			$stmt->bindParam(":uid",$uid);

			
            // Set parameters
			$uid = $_SESSION["UID"];
            if($stmt->execute()){
               $data_inserted = true;
			   
            } else{
				$data_inserted = false;
            }
        }

?>

