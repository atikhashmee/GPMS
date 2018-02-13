<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>


<?php include "user_header.php"; ?>
<div class="container">
	<div class="col-lg-10">
		<div class="well">
			<center><h1>please confirm your sell</h1></center>
		</div>
	</div>
</div>
<?php 
if (isset($_REQUEST['con']))
{
	require_once("connection.php");
	$id= $_REQUEST['con'];
	$result = "SELECT * FROM `products` WHERE `pro_id`=$id";
	$query = mysql_query($result) or die (mysql_error());
	while ( $count = mysql_fetch_array($query))
	{
		?>
		 <script type="text/javascript"> 
	     function getTotal() {
        var prize = document.getElementsByName('prize')[0].value;
        var quantity = document.getElementsByName('quantity')[0].value;
        var total = (+quantity)* (+prize) ;
        document.getElementsByName('total')[0].value = total;
    }
	   
</script>
<div class="container">
	<div class="col-lg-10">

		<div class="well">
			<form action="" class="form-inline" method="post">
				


			   <table class="table">
					<tr>
						<td>Product code </td><td><input type="text" name="code" class="form-control"   value="<?php echo $count['pro_code']; ?>" /></td>
						<td>Product name </td><td><input type="text" name="name" class="form-control"   value="<?php echo $count['pro_name']; ?>" /></td>
						
						
						
					</tr>
					<tr><td>Selling prize </td><td><input type="text"  name="prize" class="form-control" value="<?php echo $count['selling_price']; ?> " /></td> </tr>
					<tr><td>Quantity</td><td><input type="number" name="quantity" class="form-control"  onblur="getTotal()" value="0"  /></td> </tr>
					<tr><td>Total amount</td><td><input type="text" name="total" class="form-control"   value="0"  /></td> </tr>
					<tr><td>Write something</td><td><input type="text" name="msg" class="form-control"  placeholder="here we go "   /></td> </tr>
					<tr><td></td><td><input type="submit" name="sure" class="btn btn-success" value="sell"   /></td> </tr>
			   </table>
			   	<?php 
	}
	 }
?>
			</form>
		</div>
	</div>
</div>
 
<?php 
 if (isset($_POST['sure']))
 {
	 require_once("connection.php");
	 $code = $_POST['code'];
	 $name = $_POST['name'];
	 $prize = $_POST['prize'];
	 $quantity = $_POST['quantity'];
	 $total = $_POST['total'];
	 $msg = $_POST['msg'];
	 $user = $_SESSION['username'];
	 $insert = " INSERT INTO `confirm-sell`( `Pro_code`, `pro_name`, `selling_price`, `quantity`,`total_amount`, `messg`, `user`) VALUES ('$code','$name','$prize','$quantity','$total','$msg','$user')";
	 $query = mysql_query($insert) or die(mysql_error());
	 
	 
 }





?>