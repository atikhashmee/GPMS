
<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>



<?php include"user_header.php";  ?>

<?php 

if (isset($_get['de']))
{
	$id = $_get['de'];
	$result = "select * from `products` where pro_id = '$id' ";
	$query = mysql_query($result) or die (mysql_error());
	while ( $row = mysql_fetch_array($query))
	{
		?>
		<div class="col-lg-12">
		  <div class="well">
		 <td> <h1><b> <?php echo $row['pro_name'];?></b></h1><br />
		 <a href=""><?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"200\" width=\"220\" >"; echo"</br>";  echo"<center>".$row['selling_price']."</center>"; ?></a><br />
		   
		 </td>
           		 
		</div>
		</div>
		<?php 
	}
}

?>