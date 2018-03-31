<?php

$data_inserted =false;
require_once '../config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$prefix = "user";
$id=0;
	$UID = uniqid($prefix);
		// Prepare an insert statement
        $sql = "INSERT INTO ref_no (ref_no,user_id) 
		VALUES (:ref_no,:uid)";
		$pdo->beginTransaction(); 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
		$stmt->bindParam(":ref_no",$_POST["ref_no"]);		
		$stmt->bindParam(":uid",$_SESSION["uid"]);
		if($stmt->execute())
		{
			$pdo->commit(); 
			$stmt = $pdo->query("SELECT LAST_INSERT_ID()");
			$id = $stmt->fetchColumn();			
			$sql1 = "INSERT INTO user_answers (question_id,answer,reference_id) 
					VALUES (:qid,:ans,:rid)";
			 if($stmt1 = $pdo->prepare($sql1)){
            // Bind variables to the prepared statement as parameters
			$stmt1->bindParam(":qid",$qid);		
			$stmt1->bindParam(":ans",$ans);
			$stmt1->bindParam(":rid",$rid);		
			for($i=0;$i<20;$i++)
			{
				
				$qid=$_POST["question"][$i];
				$ans=$_POST["answer"][$i];
				$rid=$id;
				if($stmt1->execute())
					$data_inserted=true;
				else
					$data_inserted=false;
			}
			
            // Attempt to execute the prepared statement
        }
		}
		}
		echo $data_inserted;
}

?>

