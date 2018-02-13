
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
                
				
				
              require_once("connection.php");
			  

			  
          $i= 0;
        $presult = mysql_query("SELECT * FROM `products` ") or die (mysql_error());
        while ($row = mysql_fetch_array($presult))
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
	$page = $_GET['page'];
	if ($page=="" || $page=="1")
	{
		$page1= 0;
	}else
	{
		$page1 = ($page*5)-5;
	}
// this is for counting value 
$presult1 = mysql_query("SELECT * FROM `products` limit $page1,5 ") or die (mysql_error());
 $rw = mysql_num_rows($presult1);
 $ro = 	$rw /2;
 $r =  ceil($ro);
  for ( $b= 1; $b<=$r; $b++)
  {
	  ?><a href="view_product.php? page=<?php  echo $b; ?>" style="text-decoration:none"> <?php echo $b." "; ?></a> <?php 
	  
  }
?>
                     
					 
             </table>
		
			 </div>
			 <!------ this segment contain page pagination ----------> 
		 <nav>
		 <?php  
		 $page = $_GET['page'];
	if ($page=="" || $page=="1")
	{
		$page1= 0;
	}else
	{
		$page1 = ($page*5)-5;
	}
// this is for counting value 
$presult1 = mysql_query("SELECT * FROM `products` limit $page1,5 ") or die (mysql_error());
 $rw = mysql_num_rows($presult1);
 $ro = 	$rw /2;
 $r =  ceil($ro);
		 
		 ?>
		  <ul class="pagination">
			<li>
			  <a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			  </a>
			</li>
			<li><a href="view_product.php? page=<?php  echo $b; ?>"><?php echo $b." "; ?></a></li>
			
			<li>
			  <a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				      </a>
					</li>
				  </ul>
				 			  
				  <?php require('connection.php'); ?>
				  <?php 
				  $total_page = 10;
				  $res = mysql_query("SELECT * FROM `products` limit 0,10") or die (mysql_error());
				  $res1 = mysql_num_rows($res);
				  $count = $res1/$total_page ; 
				  
				  
				  
				   
				  
				  ?>
				</nav>
				
				
				<!------end of pagination------->
							
						 </div>
				  
  </div>
  </div>









<?php  require('footer.php'); ?>