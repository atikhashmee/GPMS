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
<center> <h3><a href="#">AHB</a> :::::::::Product Adoption Form</h3></center>
 </div>
 </div>

</div>

</div>


</div>
<head>
<link href="css/datepicker.css" rel="stylesheet">
	 <script src= "js/bootstrap-datepicker.js" type="text/javascript"></script>
<script> 
	     $(function(){
			 
			 $('.datepicker').datepicker()
			 
		 })
	 
	 </script>
	 
			  <script type="text/javascript"> 
	     function getTotal() {
        var paid = document.getElementsByName('paid')[0].value;
        var donation = document.getElementsByName('donation')[0].value;
        var total = (+donation)- (+paid) ;
        document.getElementsByName('total')[0].value = total;
    }
	   
</script>



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

	 </head>
<div class="container">
 <div class="row">
 

   
     <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
		<div class="well">
		 <div class="custom-heading">
		   <h4>General info </h4>
		 </div>
		 <table>
		 
           <tr>
             <div class="form-group">
             <td><label for="exampleInputName2">Product code:</label></td>
             <td><input type="text" name="p_code"class="form-control" id="exampleInputName2" placeholder="Jane Doe"></td>
             </div>
         </tr>
                        
                               <tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">Product-name:</label></td>
                                  <td><input type="text" name="p_name" class="form-control" id="exampleInputName2" placeholder="Jane Doe"></td>
                                  </div>
                              </tr>
                        
                              <tr>
                                 <div class="form-group">
                                 <td><label for="exampleInputName2">Category:</label></td>
                                <td><select  class= "form-control" name="Category" id="parent_cat">
								 <option value="">select a category</option>
								 
								 <?php maincat() ?>
								 </select></td>
                                 </div>
                             </tr> 
							 <tr>
                                 <div class="form-group">
                                 <td><label for="exampleInputName2"> Sub Category:</label></td>
                                <td><select  class= "form-control" name="Sub_Category" id="sub_cat">
								 <option value="">select a subcategory</option>
								     
								 </select></td>
                                 </div>
                             </tr>
                        
                             <tr>
                                <div class="form-group">
                                <td><label for="exampleInputName2">Size:</label></td>
                                <td><input type="text" name="size" class="form-control" id="exampleInputName2" placeholder="Size"></td>
                                </div>
                           </tr>  
						   <tr>
                                <div class="form-group">
                                <td><label for="exampleInputName2">Keyword:</label></td>
                                <td><input type="text" name="keyword" class="form-control" id="exampleInputName2" placeholder="keyword"></td>
                                </div>
                           </tr>
                        
                           <tr>
                               <div class="form-group">
                               <td> <label for="exampleInputEmail2">Shift-ment</label></td>
                              <td><select  class= "form-control" name="Shiftment" id="">
								 <option value="1">select a shiftment</option></option>
								 <?php  shiftment() ?>
								 </select></td>
                               </div>
                          </tr> 
						  
			
                          <tr>
                           <div class="form-group">
                           <td> <label for="exampleInputEmail2">Purchasing cost:</label></td>
                           <td><!--<input type="email"  name="paid" class="form-control" id="exampleInputEmail2" placeholder="Purchasing cost">--->
						   <input type='text' class="form-control" name='paid' />
						   </td>
                           </div>
                          </tr>       
          </table>
		   </div>
		</div>
        <div class="col-md-6">
		<div class="well">
		 <div class="custom-heading">
		 <h4></h4>
		 </div>
		<table>  
		
		
		           <tr>
                         <div class="form-group">
                          <td><label  for="exampleInputName2">Selling-price</label></td>
                           <td><!---<input type="text" name= "donation" class="form-control" id="exampleInputName2" placeholder="Selling-price" onblur="getTotal()"/>--->
						   <input type='text' name='donation' class="form-control" onblur="getTotal()"/>
						   </td>
                         </div>
					</tr>
					<tr>
                        <div class="form-group">
                          <td><label for="exampleInputName2">Profit amount:</label></td>
                          <td><!---<input type="text" name="total" class="form-control" id="exampleInputName2" placeholder="Profit amount">--->
						   <input type='text' name='total' class="form-control" /></td>
                        </div>
					</tr>
							</br> 
							<tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">issue Date:</label></td>
                                  <td><input type="date" name="date" class="datepicker form-control" data-date-format="mm/dd/yyyy" ></td>
								 
                                  </div>
                              </tr>
							  
					
		</br> 
					<tr>
                         <div class="form-group">
                           <td><label for="exampleInputName2">Product quantity:</label></td>
                           <td><input type="text" name="quantity"class="form-control" id="exampleInputName2" placeholder="	Product quantity"></td>
                         </div>
					</tr>
					
					<tr>
                         <div class="form-group">
                           <td><label for="exampleInputName2">Product image:</label></td>
                           <td><input type="file"name="product_image" class="form-control" id="exampleInputName2" placeholder=""></td>
                         </div>
					</tr>
  </br> 
					<tr>
					<div class="form-group">
                   <td> <label for="exampleInputName2">Supplier:</label></td>
  	       <td>
	        
			
	<input type="text" name="Supplier" class="form-control" id="exampleInputName2" placeholder="">
	
	       </td>
	              </div>
         </tr>	
		 <tr>
					<div class="form-group">
                   <td> <label for="exampleInputName2">Brand/manufacturer:</label></td>
  	       <td>
	         <select  class="form-control " name="brand" >
                                 <option value="">select a brand</option>
                                 <?php brand()  ?>
								 
                                
               </select>
	
	
	       </td>
	              </div>
         </tr>
		 <tr>
                         <div class="form-group">
                           <td><label for="exampleInputName2">Product details:</label></td>
                           <td><textarea type="password" name="details" class="form-control" id="exampleInputName2" placeholder="	Product details"></textarea></td>
                         </div>
					</tr>
  </table>
  </div>
		</div>
		
		<div class="col-md-12">
		<div class="well">
		 <center> <button class="btn btn-success" name="submit">submit</button></center>
		</div>
		</div>
		
		<?php  


			if (isset($_POST['submit']))  {
           
          $p_code        = $_POST['p_code'];
          $p_name        =  $_POST['p_name'];
          $Category      =$_POST['Category'];
          $Sub_Category  = $_POST['Sub_Category'];
              $size      =$_POST['size'];
              $Shift_ment=$_POST['Shiftment'];
              $paid      =    $_POST['paid'];
              $donation  = $_POST['donation'];
              $total     =  $_POST['total'];
              $quantity  = $_POST['quantity'];
              $Supplier  = $_POST['Supplier'];
              $brand     =  $_POST['brand'];
              $details   = $_POST['details'];
			  $date = $_POST['date'];
              $keyword = $_POST['keyword'];
              	$file_type = $_FILES['product_image']['type'];
		$file_name = $_FILES['product_image']['name'];
		if((($file_type == "image/jpeg")||
			($file_type == 'image/gif') || 
			($file_type == 'image/pjpeg')) && 
			($_FILES['product_image']['size'] < 1073741824))
			{
				if($_FILES['product_image']['error'] > 0){
					echo "Error: ".$_FILES['product_image']['error'];
			}
			else{
				if(file_exists("profile_image/".$_FILES['product_image']['name'])){
					echo $file_name. "already exists.";
				}else{
					move_uploaded_file($_FILES['product_image']['tmp_name'],"profile_image/".$file_name);
				}
			}
		}
			else{
			echo "Invalid file size.";
		}
		if ( empty ($p_code ) &&  empty ($p_name) && empty ($Category) && empty ($Sub_Category) && empty ($size) && empty ($Shift_ment) && empty ($paid ) && empty ($donation) && empty ($total) && empty ($quantity) && empty($Supplier) && empty($brand)  && empty($details) )
		{
			echo'please fill up the fields';
		}else{
         
          
        $insert =  "INSERT INTO `products`(`pro_code`,`pro_name`,`category`,`sub_category`,`size`,`shipment`,`total_cost`,`selling_price`,`profit_amount`,`product_quantity`,`supplier`,`product_image`,`product_details`,`m_brand` ,`date`,`keywords`) VALUES ('$p_code','$p_name','$Category ','$Sub_Category','$size','$Shift_ment','$paid','$donation','$total',' $quantity ','$Supplier','$file_name','$details','$brand','$date','$keyword')";
        $result=mysql_query( $insert);
        echo'success';
		}
      }





		?>
     </form>
   
 </div>
</div>













<?phprequire('footer.php'); ?>

