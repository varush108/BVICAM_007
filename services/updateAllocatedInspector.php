<?php

$data_inserted =false;
require_once '../config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
     $sql = "UPDATE  request_details SET inspector_allocated=:ins , status='Accepted', DOI=:doi where ref_id=:rid";
         
        if($stmt = $pdo->prepare($sql)){
			$stmt->bindParam(":rid",$ID);
			$stmt->bindParam(":ins",$ins);
			$stmt->bindParam(":doi",$doi);


			$ID = $_POST["rid"];
			$ins = $_POST["ins"];
			$doi = $_POST["doi"];

			if($stmt->execute()){
               $data_inserted = true;
			   
			   
            } else{
				$data_inserted = false;
            }
        }
		echo $data_inserted;
}

?>

