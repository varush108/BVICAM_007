<?php

$data_inserted =false;
require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){


	
		// Prepare an insert statement
        $sql = "INSERT INTO ref_no_msl (ref_no,owner_name,address,building_map,checklist) 
		VALUES (:ref_no,:name,:addr,:bmap,:cl)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$timestamp = date(NULL);
            $stmt->bindParam(":ref_no",$ref_no);
			$stmt->bindParam(":name",$name);
			$stmt->bindParam(":addr",$addr);
			$stmt->bindParam(":bmap",$bmap);
			$stmt->bindParam(":cl",$cl);
		

			
            // Set parameters
			$ref_no = $_POST["ref_no"];
			$name = $_POST["ownerName"];
			$addr = $_POST["address"];
			$bmap= "test.pdf";
			$cl="test.pdf";
			
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

