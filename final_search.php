<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>
<?php include"user_header.php"; ?>
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
  if(isset($_GET['btn'])){
  
  if(preg_match("/^[  a-zA-Z]+/", $_GET['name'])){
  $name=$_GET['name'];
 
  $sql="SELECT  * FROM `products` WHERE `pro_code` LIKE '%" . $name .  "%' OR `pro_name` LIKE '%" . $name ."%'  OR `keywords` LIKE '%" . $name ."%' ";
  
  $result=mysql_query($sql);
  
  while($row=mysql_fetch_array($result)){
         ?>
		  <div class="col-lg-4">
		  <div class="well">
		 <td> <h1><b> <?php echo $row['pro_name'];?></b></h1><br />
		 <a href=""><?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"200\" width=\"220\" >"; echo"</br>";  echo"<center>".$row['selling_price']."</center>"; ?></a><br />
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
  else{
  echo  "<p>Please enter a search query</p>";
  }
  
  }
?>

</div>
</div>
</div>