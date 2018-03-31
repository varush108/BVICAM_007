<?php
 
 require_once '../config.php';
 $result=array();
 $sql = "SELECT ref_no.ref_no,request_details.visits,request_details.ref_id, request_details.status,request_details.building_address,user.name,
		user.email,user.phoneNo, ref_no.ref_no
		FROM request_details,user ,ref_no
		WHERE ref_no.user_id = user.UID  AND request_details.ref_id=ref_no.id and ref_no.ref_no= :ref_no" ;
       
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':ref_no', $param_userid);
			
            // Set parameters
            $param_userid = trim($_POST["ref_no"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
				$result["success"]=true;
                if($stmt->rowCount() == 1){
					$result["data"]=true;
					
					while($row=$stmt->fetch())
					{
						$result["refNo"]=$row["ref_no"];
						$result["visits"]=$row["visits"];
						$result["status"]=$row["status"];
						$result["address"]=$row["building_address"];
						$result["InspectorName"]=$row["name"];
						$result["InspectorEmail"]=$row["email"];
						$result["InspectorMobile"]=$row["phoneNo"];
						
					}
				
				} else{
					
					$result["data"]=false;
                    
                }
            } else{
                	$result["success"]=false;
            }
        }
		$result = json_encode($result);
		echo $result;
?>