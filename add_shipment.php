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
<?php   include"all_category.php";  ?>
<div class="container">
<div class="row"> 
<div class="col-md-12">
 <div class="well"> 
 <div class="custom-heading"> 
 <center><h3><a href="#">AHB</a> :::::::::Shipment addition Form</h3></center>
 </div>
 </div>

</div>

</div>


</div>



<div class="container"> 
<div class="row">
<div class="col-md-12"> 
 <form  class="form-inline" action="" method="post">
   
		 <center><table>
		 <div class="well"> 
           <tr>
             <div class="form-group">
             <td><label for="exampleInputName2">Shift  no:</label></td>
             <td><input type="text" name="sno"class="form-control" id="exampleInputName2" placeholder="1457896545858"></td>
             </div>
         </tr>
                        
                               <tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">Shift name:</label></td>
                                  <td><input type="text" name="sname" class="form-control" id="exampleInputName2" placeholder="Shipmen name:"></td>
                                  </div>
                              </tr>
                               <tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">Shift type:</label></td>
                                  <td><input type="text" name="stype" class="form-control" id="exampleInputName2" placeholder="Shipmen Type:"></td>
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
 
<?php 

if (isset($_POST['submit'])){
    
    $sno =     $_POST['sno'];
    $sname =   $_POST['sname'];
    $stype = $_POST['stype'];
	 if ( empty($sno) && empty($sname) && empty($stype)) {
		 echo"please fill up the fields";
		 
	 }else{
		 
		 $insert = mysql_query("INSERT INTO `shipment`(`shipment_no`, `ship_name`, `origine`) VALUES ('$sno','$sname','$stype')") or die (mysql_error());
	 }

}




?>


 </form>


</div>

</div>


</div>


<?phprequire('footer.php'); ?>