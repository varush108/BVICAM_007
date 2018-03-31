<?php
 
 require_once '../config.php';
 $sql = "SELECT name FROM installation_checklist WHERE id = :id";
        $result=array();
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':id', $param_cid);
			
            // Set parameters
            $param_cid = trim($_POST["cid"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $result["success"]=true;
				if($stmt->rowCount() == 1){
					$row=$stmt->fetch();
					$result["name"]=$row["name"];
				} else{
					
					$result["success"]=false;
                    
                }
            } else{
                $result["success"]=false;
            }
        }
		$result = json_encode($result);
		echo $result;
		
?>