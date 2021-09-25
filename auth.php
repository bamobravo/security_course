<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login-btn'])) {
		// admin
		 // echo password_hash('admin@test', PASSWORD_DEFAULT);
		 // exit;
		 $username = trim(@$_POST['user_login']);
		 $password = trim(@$_POST['user_key']);
		 if (!($username && $password)) {
		 	$response=array('status'=>false,'message'=>'username or password cannot be empty');
		 	echo json_encode($response); exit;
		 }
		 require_once "db.php";
		 $query ="SELECT user_key from login where user_login=?";
		 $statement = $con->prepare($query);
		 $statement->bind_param('s',$username);
		 $statement->execute();
		 $resultSet = $statement->get_result();

		 if ($resultSet->num_rows==1) {
		 	$row = $resultSet->fetch_assoc();
		 	$passHash = $row['user_key'];
		 	if (password_verify($password, $passHash)) {
		 		session_start();
		 		$response=array('status'=>true,'message'=>'success');
		 		echo json_encode($response);
		 		$_SESSION['user_login']=$username;
		 	}
		 	else{
		 		$response=array('status'=>false,'message'=>'invalid login details');
		 		echo json_encode($response);
		 	}
		 	
		 }
		 else{
		 	$response=array('status'=>false,'message'=>'invalid login details');
		 	echo json_encode($response);
		 }
	}

 ?>