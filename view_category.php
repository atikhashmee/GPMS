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




  
		   
			    
			



<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
			   <div class="custom-heading">
			     <div class="well">
				   <center><h3> Category view form</h3></center> 
				 
				 </div>
			   
			   </div>
			</div>
		</div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
			   <div class="custom-heading">
			     <div class="well">
				   <table class="table">
				      <tr>
				      	<th>Category name</th>
				      	<th>Category code</th>
				      	<th>Category type</th>
				      </tr>
					  <tr>
					 	<td>
				
				<?php include"all_category.php";?>
				 <?php maincat() ?>
 								 
								
								</td>
					  </tr>
				   </table>
				 </div>
			   </div>
			</div>
		</div>
	</div>
</div>



<?php  include"footer.php";  ?>