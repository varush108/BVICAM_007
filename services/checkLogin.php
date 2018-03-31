<?php

require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$err=1;
	$email = $_POST["emailLog"];
	$password= $_POST["passwordLog"];
	$sql = "SELECT UID,email,name,phoneNo,user_type,password_hash,image FROM user WHERE email = :email ";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':email', $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["emailLog"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
					
                    if($row = $stmt->fetch()){
                        $hashed_password = $row['password_hash'];
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
							session_start();
							$_SESSION['logged_in']=true;
                            $_SESSION['uid'] = $row['UID'];
							$_SESSION['name'] = $row['name'];	
							 $_SESSION['role'] = $row['user_type'];
							  $_SESSION['email'] = $row['email'];
							  $_SESSION['image'] = $row['image'];
							  $_SESSION["mobile"]=$row["phoneNo"];
							$err=0;	
								
                            
                        }
						else
						{
							//echo "Password error";
							$err=1;
						}
					}
					else
					{
						$err=1;
					}
				}
			}
		}
		if($err==0)
		{
			if($_SESSION['role']=='user')
			{
				 $err =  "profile_user.php";
			}
			else if($_SESSION['role']=='system manager')
			{
				$err = "profile_sm.php";
			}
			else if($_SESSION['role']=='inspector')
			{
				$err = "profile_inspector.php";
			}
			else if($_SESSION['role']=='msl')
			{
				$err = "Add-Building-map.php";
			}
			
		}
		echo $err;
					
	
}
		

?>