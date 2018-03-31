<?php
 
 require_once '../config.php';
 $sql = "SELECT installation_checklist.name FROM installation_checklist , ref_checklist WHERE installation_checklist.id = ref_checklist.checklist_id 
		and ref_checklist.ref_id =".$_POST["ref_id"];
        $result=array();
        if($stmt = $pdo->prepare($sql)){
			
            // Bind variables to the prepared statement as parameters
          
			
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
				
                $result["success"]=true;
				if($stmt->rowCount() >0){
					while($row=$stmt->fetch())
					{
					$result["name"][]=$row["name"];
					}
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