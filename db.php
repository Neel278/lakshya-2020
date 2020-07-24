<?php
include("database.php");
	if(isset($_POST['register'])) {
	$username=htmlspecialchars($_POST['username']);
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);
	// $re_password=$_POST['confirm_password'];
		$sql="INSERT INTO `signup`(`username`, `email`, `password`) VALUES (?,?,?)";
	    $stmt = mysqli_prepare($conn, $sql);
	    if($stmt){
	    	mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
    		mysqli_stmt_execute($stmt);
    		// $_SESSION['signup']=true;
	    	header("location:login.php");
	    	
	}else{
		echo "can`t sign you in!!";
		// $_SESSION['signup']=false;
		exit();
	}
}else if(isset($_POST['login'])){
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['pass']);
	$sql1="SELECT * FROM `signup` WHERE `email`=? AND `password`=?";
	$stmt=mysqli_prepare($conn,$sql1);
	if($stmt){
		mysqli_stmt_bind_param($stmt,"ss", $email,$password);
    	mysqli_stmt_execute($stmt);
    	$row = mysqli_stmt_fetch($stmt);
    	if($row){
    		$_SESSION['login']=true;
    		header("location:index.php");
        }else{
            echo "something is wrong.";
            exit();   
        }
	}
}else{
	header("location:index.php");
}
?>