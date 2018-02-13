
<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>

<?php include"header.php"; ?>
<head> 
<link href="css/datepicker.css" rel="stylesheet">
	 <script src= "js/bootstrap-datepicker.js" type="text/javascript"></script>
 <script> 
	     $(function(){
			 
			 $('.datepicker').datepicker()
			 
		 })
	 
	 </script>
	 </head>
<div class="container">
  <div class="row">
    <div class="col-lg-10">
	 <div class="well">
		<center><form action="datewise_view_products.php" class="form-inline" method="get"> 
		  <table>
		   
		    	<td>From</td>
		    	<td><input type="date" name="startdate" class="datepicker form-control" data-date-format="mm/dd/yyyy" ></td>
		   
			
		    	<td>To</td>
		    	<td><input type="date" name="enddate" class="datepicker form-control" data-date-format="mm/dd/yyyy" ></td>
		   
			
		    	<td><button type="submit" class="btn btn-success" name="save">submit</button></td>
		
		
		  </table>
		  
		</form>
		</center>
		</div>
		
	
	
	</div>
    
  
  </div>


 


</div>
<div class="container">
 <div class="row">
     <div class="col-md-10">
            <div class="well">
 
 
 <table class="table">
			
             	<tr>
				
             		<th>SL no</th>
             		<th>Product code</th>
             		<th>product name</th>
             		<th>Quantity</th>
             		<th>Product details</th>
             		<th>Brand</th>
             		<th>image</th>
             		<th>view details</th>
             	</tr>





<?php 
//("SELECT sl_no as 'Serial No',p_type as 'Purpose',pay_to as 'Pay To',date as 'Date',tk_bdt as 'Taka',v_no as 'Voucher No' FROM office_ex where date Between '" + dateTimeInput1.Text + "' AND  '" + dateTimeInput2.Text + "'", con)
if (isset($_GET['save']))
{
	require_once("connection.php");
	$startdate = $_GET['startdate'];
	$enddate   = $_GET['enddate'];
	$result = "SELECT * FROM `products` WHERE `date` Between  '$startdate'  AND  '$enddate' ORDER BY `date` ASC";
	$myquery = mysql_query(	$result) or die (mysql_error());
	$i= "0";
	while($row= mysql_fetch_array($myquery))
	{
		$i++;
		?>
		<tr>
								
								<td><?php echo $i; ?></td> 
								<td><?php echo $row['pro_code']; ?></td>
								<td><?php echo $row['pro_name']; ?></td>
								<td><?php echo $row['product_quantity']; ?></td>
								<td><?php echo $row['product_details']; ?></td>
								<td><?php echo $row['m_brand']; ?></td>
								


								<td><?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"50\" width=\"70\" >"; ?></td>						
								<td>
								<a href="view_detail.php?details=<?php echo $row['pro_id']; ?>">See More</a></td>
							</tr>
		
		<?php 
	}
	
}




?>

</table>
</div>
</div>
</div>
</div>