<?php
 
 require_once '../config.php';
 $result=array();
 $sql = "UPDATE request_details SET status='Rejected' WHERE ref_id=:ref_no" ;
       
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':ref_no', $param_userid);
			
            // Set parameters
            $param_userid = trim($_POST["ref_no"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
				$data_inserted = true;
				
			} 
			else{
					
				$data_inserted = false;
                   
                }
        } 
		else
		{
					$data_inserted = false;
        }
        
		echo $data_inserted;
?>