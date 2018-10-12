<?php
session_start();

$firstname="";
$middlename="";
$lastname="";
$username="";
$email="";
$kilogram="";
$gram="";
$pound="";
$deyt="";
$errors = array();

$db = mysqli_connect('localhost','root','','webappdb');

if(isset($_POST['get_weight'])){
    $kilogram = mysqli_real_escape_string($db,$POST['kilograms']);
    
    if(empty($kilogram)){array_push($errors,"Input required");}
    
    if(count($errors)==0){
        $query="INSERT INTO weighttable(kgrms) ORDER BY username VALUES
        ('$kilograms')";
    }
}

if(isset($_POST['reg_user'])){
    $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
    $middlename = mysqli_real_escape_string($db,$_POST['middlename']);
    $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    if(empty($firstname)){array_push($errors,"First Name is required");}
    if(empty($middlename)){array_push($errors,"Middle Name is required");}
    if(empty($lastname)){array_push($errors,"Last Name is required");}
    if(empty($username)){array_push($errors,"Username is required");}
	if(empty($email)){array_push($errors,"Email is required");}
	if(empty($password_1)){array_push($errors,"Password is required");}
	if($password_1 != $password_2){
		array_push($errors,"Password don't match");
	}

	$user_check_query = "SELECT * FROM userinfo WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db,$user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user){
		if($user['username']===$username){
			array_push($errors,"Username already exists");
		}
		if($user['email']===$email){
			array_push($errors,"email already exists");
		}
	}

	if(count($errors)==0){
		$password=md5($password_1);
		$query="INSERT INTO userinfo(first_name,middle_name,last_name,username,email,password) VALUES ('$firstname','$middlename','$lastname','$username','$email','$password')";
		mysqli_query($db,$query);
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now registered";
		header('location: login.php');
	}
}

if(isset($_POST['login_user'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}

	if(empty($password)){
		array_push($errors,"Password is required");
	}

	if(count($errors)==0){
		$password=md5($password);
		$query="SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
		$results=mysqli_query($db,$query);
		if(mysqli_num_rows($results)==1){
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in as ";
			header('location:index.php');
		}else{
			array_push($errors, "Incorrect Username or Password");
		}
	}
}