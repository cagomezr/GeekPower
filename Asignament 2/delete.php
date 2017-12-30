<?php
require "Database.php";
	
if(isset($_POST['id'])){
	Database::delete($_POST['id']);
	header("Location: index.php");
}else{
	 header("Location: index.php");
} 
?>
	