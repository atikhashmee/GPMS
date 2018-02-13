<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>
<?php require('user_header.php'); ?>


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
<div class="page-content">
     <div class="row">
	    <div class="col-lg-8">
		  <div class="well">
		      <form action="category_dashboard.php" class="form-inline" method ="GET">
			    
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
			 
			   </div>
		  </div>
		  <div class="col-lg-4">
		  <div class="well">
		   <form action="final_search.php" class="form-inline">
			   <td> 
			<input type="search" name="name"class="form-control" placeholder="Search ..." id="msearch">
			
			<button class="btn btn-success" name="btn">
			 search
			</button>
		 </td>
			  </form>
		  
		  </div>
		  </div>
		
	 </div>
  </div>




<div class="page-content">
	
	  <div class="row">
		<div class="col-lg-12">



<?php 
		  require_once("connection.php");
		  	
		    if (isset($_GET['save']))
			{ 
		        $select_country = $_GET['select_country'];
				$Sub_Category   =  $_GET['Sub_Category'];
			
				$result = "SELECT * FROM `products` WHERE `category` = '$select_country ' AND `sub_category` = '$Sub_Category' ORDER BY `pro_id` DESC ";
				$query = mysql_query ($result) or die (mysql_error());
				while ( $count = mysql_fetch_array($query))
				{
					?>
							 <div class="col-lg-4">
		  <div class="well">
		 <td> <h1><b> <?php echo $count['pro_name'];?></b></h1><br />
		 <a href=""><?php $file_name = $count['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"200\" width=\"220\" >"; echo"</br>";  echo"<center>".$count['selling_price']."</center>"; ?></a><br />
		   <input type="submit" name="" class="btn btn-success"  value="sell it now" />
		   &nbsp;
		   &nbsp;
		   &nbsp;
		   &nbsp;
		   <input type="submit" name="" class="btn btn-success"  value="details" />
		 </td>
           		 
		</div>
		</div>
		 <?php 
				}
				
				
			} 
		 
		 ?> 
		 </div>
		 </div>
		 </div>