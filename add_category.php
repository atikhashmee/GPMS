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


<div class="container">

   <div class="row">
   <div class="col-md-12">
 <div class="well"> 
 <div class="custom-heading"> 
<center> <h3><a href="#">AHB</a> :::::::::Category Registration Form</h3></center>
 </div>
 </div>

</div>
   
   </div>
   
		<div class="row">
		<div class="col-md-12">
		
		<form action="" class="form-inline" method="POST">
		    
		 <center> <table>
		  <div class="well">
           <tr>
             <div class="form-group">
             <td><label for="exampleInputName2">Category-name:</label></td>
             <td><input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Category-name"></td>
             </div>
         </tr>      <tr>
                           <div class="form-group">
                           <td> <label for="exampleInputEmail2">Category-code:</label></td>
                           <td><input type="text" name="code" class="form-control" id="exampleInputEmail2" placeholder="Category-code" ></td>
                           </div>
                          </tr>
                        
							 </div>
							 </table>
							 </center>
	 <div class="col-md-12">
		<div class="well">
		 <center> <button class="btn btn-success" name="submit">submit</button></center>
		</div>
		</div>
			
			<?php 
			require_once("connection.php");
			  if (isset($_POST['submit']))
			  {
				  $name = $_POST['name'];
				  $code = $_POST['code'];
				  if (empty ($name) && empty($code))
				  {
					  echo"please fill up the fields";
				  }else
				  {
					  $insert = mysql_query("INSERT INTO `category`(`category_name`, `category_code`) VALUES ('$name','$code')") or die (mysql_error());
					  echo"thank you very much for your submitting ";
				  }
				  
			  }
			
			
			?>
		</form>
		
		
		</div>
		
		
		</div>

</div>



<?phprequire('footer.php'); ?>