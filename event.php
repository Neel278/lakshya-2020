<?php
include("database.php");
if($_SESSION['login']==true){
if(isset($_GET['id'])){
	$id=$_GET['id'];
    $sql="SELECT * FROM `event_detail` WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows >0){
    	while($row=mysqli_fetch_assoc($result)){
    		echo $row['name'];
    		echo "<br>";
    		echo $row['detail'];
    		echo "<br>";
    		echo $row['date'];
    		echo "<br>";
    		echo $row['price'];
    	}
    } 
}else{
	header("location:buy.php");
}
}else{
    header("location:signup.php");
}
?>