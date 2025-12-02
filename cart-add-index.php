<?php
	session_start();
	require_once 'inc/connection.php';

	if(!isset($_SESSION['user'])){
			$_SESSION['error']="Signup or Login to continue";
			header('location: login.php');
	}else{

		if(isset($_GET['add'])){

			$user_id=$_SESSION['user'];
			$product_id=$_GET['add'];

			echo "User ID: ".$_SESSION['user'].'<br>';
			echo "Product ID: ".$_GET['add'].'<br>';

			$query=$conn->prepare("SELECT * FROM cart WHERE user_id=? AND product_id=?");
			$query->bind_param("ss", $user_id, $product_id);
			$query->execute();
			$result=$query->get_result();
			if($result->num_rows>0){
				$_SESSION['error']="Product already exist";
				header('location: index.php');
			}else{
				$proQty=1;
				$query=$conn->prepare("INSERT INTO cart(user_id, product_id, quantity) VALUES(?,?,?) ");
				$query->bind_param("sss", $_SESSION['user'], $_GET['add'], $proQty);
				$query->execute();
				$_SESSION['success']="Item added to cart";
				header('location: index.php');
			}
		}
	}



	#when the add to cart button in the prodts.php form in clicked 
	if(isset($_POST['add-item'])){
		$user_id=$_SESSION['user'];
		$product_id=$conn->real_escape_string($_SESSION['proid']);
		echo "User: ". $user_id;
		echo "pro ID: ". $product_id;
	}

?>