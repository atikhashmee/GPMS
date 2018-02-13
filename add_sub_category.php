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
<?php 
 require_once("connection.php");
 
 function show_subcategory()
 {
	 $result ="SELECT * FROM `category`";
	 $qry = mysql_query($result) or die (mysql_error());
	 while( $row = mysql_fetch_array($qry ))
	 {
		 $cat_id = $row['cat_id'];
		 $category_name = $row['category_name'];
		 echo"<option value='$cat_id'> $category_name</option>";
	 }
 }

?>

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
             <td><label for="exampleInputName2">sub Category-name:</label></td>
             <td><input type="text"  name="cat_name" class="form-control" id="exampleInputName2" placeholder="Category-name"></td>
             </div>
         </tr>      <tr>
                           <div class="form-group">
                           <td> <label for="exampleInputEmail2">Category-code:</label></td>
                           <td><input type="text" name="sub_cat_code" class="form-control" id="exampleInputEmail2" placeholder="Category-code"></td>
                           </div>
                          </tr>
                        <tr>
                                 <div class="form-group">
                                 <td><label for="exampleInputName2">Category-list:</label></td>
                                 <td><select  class= "form-control" name="main_cat" id="">
								 <option value="">select a category</option>
								  <?php show_subcategory() ?>
								 </select></td>
                                 </div>
                             </tr>
							 </div>
							 </table>
							 </center>
	 <div class="col-md-12">
		<div class="well">
		 <center> <button class="btn btn-success" name="save">submit</button></center>
		</div>
		</div>
		<?php 
		  if (isset($_POST['save']))
		  {
			  $sub_cat_name = $_POST['cat_name'];
			  $sub_cat_code = $_POST['sub_cat_code'];
			  $main_cat = $_POST['main_cat'];
			  if(empty ($cat_name) && empty($sub_cat_code) && empty ($main_cat))
			  {
				   echo"please fill up the fields";
			  }else
			  {
				  $result = "INSERT INTO `sub_category`(`main_cat`, `sub_cat_name`, `sub_cat_code`) VALUES ('$main_cat','$sub_cat_name','$sub_cat_code')";
				  $qry = mysql_query($result) or die (mysql_error());
			  }
		  }
		
		?>
			
		</form>
		
		
		</div>
		
		
		</div>

</div>



<?phprequire('footer.php'); ?>