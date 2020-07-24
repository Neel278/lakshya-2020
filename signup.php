<?php
include("database.php");
if($_SESSION['login']==false){
	function redirect(){
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="assets1/css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="assets1/css/style.css"/>
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="assets1/images/form-v6.jpg" alt="form">
			</div>
			<form class="form-detail" action="db.php" method="post">
				<h2>Register Form</h2>
				<div class="form-row">
					<input type="text" name="username" id="full-name" class="input-text" placeholder="Your Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
				</div>
				<div class="form-row">
					<input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
					<a href="login.php" class="register" style="padding: 13px; padding-left: 50px; padding-right: 50px ">Login</a>
					<!-- <input onclick="redirect()" type="submit" name="login" class="register" value="Login"  > -->
				</div>
			</form>
		</div>
	</div>
</body>
</html>
<?php
}else{
	header("location:index.php");
}

?>