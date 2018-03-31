<?php
 
 require_once '../config.php';
 $sql = "SELECT id FROM ref_no_msl WHERE ref_no=:ref_no ";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':ref_no', $param_username, PDO::PARAM_STR);
			
            // Set parameters
            $param_username = trim($_POST["ref_no"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
					echo true;
				} else{
					
					echo false;
                    
                }
            } else{
                echo "error";
            }
        }
?>