<?php
	session_start();
	require_once 'inc/connection.php';

	if(isset($_POST['login'])){

		$email=$conn->real_escape_string($_POST['email']);
		$password=$conn->real_escape_string($_POST['password']);

		$query=$conn->prepare("SELECT * FROM users WHERE email=?");
		$query->bind_param("s", $email);
		$query->execute();
		$result=$query->get_result();
		if($result->num_rows==1){
			$row=$result->fetch_array();
			if(password_verify($_POST['password'], $row['password'])){
				$_SESSION['user']=$row['id'];
				$_SESSION['usermail']=$conn->real_escape_string($_POST['email']);
				//$_SESSION['profile']=""$row['photo']
				header('location: index.php');
			}else{
				$_SESSION['message']= "Invalid email or password!";
		   		$_SESSION['msg_type']="danger"; 
		   		header("location: login.php");
			}
		}else{
			$_SESSION['message']= "Invalid email or password!";
	   		$_SESSION['msg_type']="danger"; 
	   		header("location: login.php");
		}
	}
	
?>