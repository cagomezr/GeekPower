<?php
require "Database.php";
	
if(isset($_POST['id'])){
	Database::edit($_POST['id'],$_POST['title'] ,$_POST['genre'] ,$_POST['esrb'] ,$_POST['quantity'] ,$_POST['price']);
	header("Location: index.php");
}else{
	header("Location: index.php");
} 
?>
	