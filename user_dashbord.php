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
    $data = "SELECT * FROM `products`";
	 $query = mysql_query($data) or die (mysql_error());
	 while($row =  mysql_fetch_array($query))
	 {
		 ?>
		 <div class="col-lg-4">
		  <div class="well">
		 <td> <h1><b> <?php echo $row['pro_name'];?></b></h1><br />
		 <?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"200\" width=\"220\" >"; echo"</br>";  echo"<center>".$row['selling_price']."</center>"; ?><br />
		   <a href="confirm_sell.php?con=<?php echo $row['pro_id']; ?>"><input type="submit" name="" class="btn btn-success"  value="sell it now" /></a>
		   &nbsp;
		   &nbsp;
		   &nbsp;
		   &nbsp;
		    <a href="indevidual_pro_details.php?de<?php echo $row['pro_id']?>"; ><button type="submit" name="" class="btn btn-success"   />
		    details 
		   </button></a>
		 </td>
           		 
		</div>
		</div>
	<?php 	
	 }
			

  ?>
			</div>
		</div>
	  </div>
	
  
 
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