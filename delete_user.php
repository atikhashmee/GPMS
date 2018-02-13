<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>


<?php require('header.php'); ?>
 
 <?php include"all_category.php";  ?>

<?php 
if (isset($_GET['delete']))
{
	$id = $_GET['delete'];
	$result = "DELETE FROM `pms_user` WHERE u_id = '$id'";
	$query = mysql_query($result) or die (mysql_error());
	header("location:view_user.php");
	
}

?>