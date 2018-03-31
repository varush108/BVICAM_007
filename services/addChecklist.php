<?php

require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
		$count = 0;	
		// Prepare an insert statement
        $sql = "INSERT INTO ref_checklist (ref_id,checklist_id) 
		VALUES (:rid,:cid)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$timestamp = date(NULL);
			echo $timestamp;
            $stmt->bindParam(":rid",$ID);
			$stmt->bindParam(":cid",$cid);
			
            // Set parameters
			
            // Attempt to execute the prepared statement
			$cids=$_POST["cid"];
			foreach($cids as $cid)
			{
				$ID = $_POST["rid"];
				
				if($stmt->execute()){
					
				}
				else{
				$data_inserted = false;
				}
			
			}   
            }
		else
		{
				$data_inserted = false;
		}			
        }
		
		
		if(isset($data_inserted) && $data_inserted === false)
		{
			echo false;
		}
		else
		{
			echo true;
		}
		

?>

