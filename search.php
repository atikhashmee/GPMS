<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>


 <?php require('user_header.php'); ?>
 
  <div class="page-content">
     <div class="row">
	    <div class="col-lg-12">
		  <div class="well">
		      <form action="" class="form-inline">
			    
				<td>
						      <select name="select_country" id="parent_cat" class="form-control">
				 <option value="select item">select category</option>
				<?php include"all_category.php";?>
				 <?php maincat() ?>
 								  </select>
								
								</td>
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
								<td>
						      <select name="Sub_Category" class="form-control" id="sub_cat">
				 <option value="select item">select sub category</option>
				 
 								  </select>
								
								</td>
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
								<td><button type="submit" class="btn btn-success" name="save">submit</button></td>
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
			  
			
		 
		</form>
		 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-inline" method="get">
			   <td> 
			<input type="text" class="form-control" placeholder="Search ..." id="msearch">
			
			<button class="btn btn-success" name="search">
			 search
			</button>
		 </td>
		 <?php 
		  require_once("connection.php");
		  	
		    if (isset($_get['search']))
			{ 
		        $user_search = $_post['user_search'];
				
			
				$result = "SELECT * FROM `products`  where keywords like '%$user_search%'";
				$query = mysql_query ($result) or die (mysql_error());
				while ( $count = mysql_fetch_array($query))
				{
					?>
					<td><a href=""><?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"200\" width=\"220\" >"; echo"</br>";  echo"<center>".$row['selling_price']."</center>"; ?></a><br />
				   <input type="submit" name="user_search" class="btn btn-success"  value="sell it now" />
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   <input type="submit" name="search" class="btn btn-success"  value="details" />
				 </td>
		 <?php 
				}
				
			}
				 
		 
		 ?>
			  </form>
			  
			   
		  </div>
		</div>
	 </div>
  </div>
  
  
  
  
  <div class="page-content">
	
	  <div class="row">
		<div class="col-lg-12">
			
		
 <div class="page-content">
   <div class="row">
     <div class="col-lg-12">
	   <div class="well">
	   <tr>
	     <td> <h4><strong>total sold product</strong></h4></td>
	     <td><p><strong>total</strong> amount of money</p></td>
		 </tr>
	   </div>
	 
	 </div>
   </div>
  
  </div>
 
 
 <?php  require('footer.php'); ?>