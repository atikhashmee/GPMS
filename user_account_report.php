<?php
if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}

?>



<?php  
include"user_header.php";
?>
<div class="page-content">
   <div class="row">
    <div class="col-lg-12">
	  <div class="well">
	     <h2>Users Account Report</h2>
		 &nbsp;
		  &nbsp;
		  
		  <form action="" class="form-inline">
		     <td> From<input type="date" name /></td>
		     <td> TO<input type="date" name /></td>
		      <td><input type="submit"  class="btn btn-success"/></td>
		  </form>
	  </div>
	</div>
   </div>
</div>

<div class="page-content">
   <div class="row">
    <div class="col-lg-12">
	  <div class="well">
	     <table>
		 <tr>
		  <th>sl no</th>
		  &nbsp;
		  &nbsp;
		  <th>Product code</th>
		  &nbsp;
		  &nbsp;
		  <th>Product name</th>
		  &nbsp;
		  &nbsp;
		  <th>selling price</th>
		  &nbsp;
		  &nbsp;
		  <th>total amount</th>
		 </tr>
		 <?php   
		      
		    require_once('connection.php');
			$i=0;
			$user = $_SESSION['username'] ; 
			$result = "SELECT * FROM `confirm-sell` WHERE `user` = '$user' order by `user` ASC";
			$query = mysql_query($result) or die (mysql_error());
			while ($row = mysql_fetch_array($query))
			{ 
		      $i++;
				?>
				<tr>
					<td><?php echo $i ; ?></td> 
					<td><?php echo $row['Pro_code']; ?></td>
					<td><?php echo $row['pro_name']; ?></td>
					<td><?php echo $row['selling_price']; ?></td>
					<td><?php echo $row['total_amount']; ?></td>
					
				</tr>
		<?php 
		}
		 
		 
		 ?>
		 </table>
	  </div>
	</div>
   </div>
</div>

<div class="page-content">
   <div class="row">
      <div class="col-lg-12">
	      <div class="well">
		 
		    <table>
			
			 <?php 
			    require_once('connection.php');
				
				$result_amount = "SELECT sum(`profit_amount`) as total_val FROM `products`";
				$query_amount = mysql_query($result_amount) or die (mysql_error());
				$result_query = mysql_query("SELECT sum(`selling_price`) as total_val FROM `products`");
				
				$result_qer = mysql_query("SELECT sum(`total_cost`) as total_val FROM `products`");
				 while ($count3 = mysql_fetch_assoc($result_qer) ) {
					      $sum3 =$count3['total_val'];
						  
				 }
			      while ($count2 = mysql_fetch_assoc($result_query) ) {
					      $sum2 =$count2['total_val'];
						  
				 }
				 while ($count = mysql_fetch_assoc($query_amount) ) {
					      
						  $sum = $count['total_val'];
				 }
						 ?>
					 	
			   <tr>
			   <td>total purchasing cost:</td> 
			   <td><?php echo $sum3; ?></td> </br>
			   <td>total selling  cost:</td>
			   <td><?php echo $sum2; ?></td> </br>
			   
			   <td>total profit amount:</td>
			   <td><?php echo $sum; ?></td> </br>
			   </tr>
			  
			</table>
		  </div>
	  </div>
   
   </div>
 

</div>


