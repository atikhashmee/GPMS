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
<?php include"all_category.php";  ?>
<div class="container">
<div class="row"> 
<div class="col-md-12">
 <div class="well"> 
 <div class="custom-heading"> 
 <center><h3><a href="#">AHB</a> :::::::::Brand Entry Form</h3></center>
 </div>
 </div>

</div>

</div>


</div>



<div class="container"> 
<div class="row">
<div class="col-md-12"> 
 <form  class="form-inline" action="" method="POST">
   
		 <center><table>
		 <div class="well"> 
           <tr>
             <div class="form-group">
             <td><label for="exampleInputName2">Brand name:</label></td>
             <td><input type="text" name="bname" class="form-control" id="exampleInputName2" placeholder="Brand name"></td>
             </div>
         </tr>
                        
                               <tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">Brand Code:</label></td>
                                  <td><input type="text" name="bcode" class="form-control" id="exampleInputName2" placeholder="Brand Code"></td>
                                  </div>
                              </tr>
                        
                              <tr>
                                 <div class="form-group">
                                 <td><label for="exampleInputName2"> Country:</label></td>
                                 <td><input type="text" name="bcountry" class="form-control" id="exampleInputName2" placeholder="Countryr"></td>
                                 </div>
                             </tr>
							  </div>
							 </table>
							 </center>
							 
							
 
 <div class="col-md-12">
		<div class="well">
		 <center> <button name="submit" class="btn btn-success">submit</button></center>
		</div>
		</div>
 
<?php  brand_add() ?>
 </form>


</div>

</div>


</div>



<?phprequire('footer.php'); ?>