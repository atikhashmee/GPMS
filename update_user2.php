<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>
<?php include"header.php"; ?>


<!------- start hedaer part --------->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="well">
				<div class="custom-heading">
					<h3 style="text-align:center">Update User</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!-------- end of header part ------>
<!------------ start update content ----------->
<link href="css/datepicker.css" rel="stylesheet">
	 <script src= "js/bootstrap-datepicker.js" type="text/javascript"></script>


<div class="container">
 <div class="row">
 
  
   
     <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
        <div class="col-md-6">
		<div class="well">
		 <div class="custom-heading">
		   <h4>General info </h4>
		 </div>
		 <table>
		    <?php 
			  require_once("connection.php");
			   $result = "SELECT * FROM `pms_user`";
			   $query = mysql_query($result) or die ($result);
			   while ($get = mysql_fetch_array($query))
			   {
			   
			   $name = $get['full_name'];
			   $date = $get['date_of_birth'];
			   $phone = $get['phone'];
			   $select_country = $get['country'];
			   $city = $get['city'];
			   $gender = $get['gender'];
			   $email = $get['email'];
			   $uname = $get['u_name'];
			   $pass = md5($get['pass']);
			   $copass= md5($get['co_pass']);
			   $userrole = $get['user_role'];
			   }
			   ?>
			   
			
           <tr>
             <div class="form-group">
             <td><label for="exampleInputName2">Full name:</label></td>
             <td><input type="text"  name="name" class="form-control" id="exampleInputName2" placeholder="Jane Doe" value="<?php echo $name; ?>"></td>
             </div>
         </tr>
                        
                               <tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">Date of birth:</label></td>
                                  <td><input type="date" name="date" class="datepicker form-control" data-date-format="mm/dd/yyyy"  value="<?php echo $date_of_birth; ?>"></td>
								 
                                  </div>
                              </tr>
                        
                              <tr>
                                 <div class="form-group">
                                 <td><label for="exampleInputName2">Phone no:</label></td>
                                 <td><input type="text" name= "phone" class="form-control" id="exampleInputName2" placeholder="Phone number" value="<?php echo $phone; ?>"></td>
                                 </div>
                             </tr>
                        
                             <tr>
                                <div class="form-group">
                                <td><label for="exampleInputName2">Country:</label></td>
                                <td>
								   <select name="select_country" id="" class="form-control" value="<?php echo $select_country; ?>" >
								      <option value="select item">select an item</option>
								      <option value="Bangladesh">Bangladesh</option>
								      <option value="India">India</option>
								      <option value="Pakistan">Pakistan</option>
								      <option value="chaina">Chaina</option>
								      <option value="Honckok">hongkok</option>
 								  </select>
								
								</td>
                                </div>
                           </tr>
                        
                           <tr>
                               <div class="form-group">
                               <td> <label for="exampleInputEmail2">City</label></td>
                               <td><input type="text"  name= "city" class="form-control" id="exampleInputEmail2" placeholder="City" value="<?php echo $city; ?>"></td>
                               </div>
					
                          </tr> 
						  <tr>
						  		    <td>Gender</td><td>
	         <select name="select_sex" class="form-control" value="<?php $gender; ?>" >
                <option value="select sex">select sex</option>
                <option value="male">male</option>
                <option value="female">female</option>
                
               </select>
	
	
	       </td>
						  </tr>
                          <tr>
                           <div class="form-group">
                           <td> <label for="exampleInputEmail2">E-mail</label></td>
                           <td><input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" value="<?php echo $email; ?>"></td>
                           </div>
                          </tr>
                 
          
		   </div>
		</div>
        
		
		 
		
					<tr>
                        <div class="form-group">
                          <td><label for="exampleInputName2">Username</label></td>
                          <td><input type="text" name="username" class="form-control" id="exampleInputName2" placeholder="Username" value="<?php echo $uname; ?>"></td>
                        </div>
					</tr>
							</br> </br>
					<tr>
                         <div class="form-group">
                          <td><label  for="exampleInputName2">Password</label></td>
                           <td><input type="password" name="password" class="form-control" id="exampleInputName2" placeholder="Password" value="<?php echo  $pass; ?>"></td>
                         </div>
					</tr>
		</br> </br>
					<tr>
                         <div class="form-group">
                           <td><label for="exampleInputName2">Confirm pass:</label></td>
                           <td><input type="password"  name="cpassword" class="form-control" id="exampleInputName2" placeholder="Confirm pass" value="<?php echo $copass; ?>"></td>
                         </div>
					</tr>
  </br> 
					<tr>
					<div class="form-group">
                   <td> <label for="exampleInputName2">User type:</label></td>
  	       <td>
	         <select name="select_type" class="form-control"  value="<?php echo $userrole; ?>">
			  <option value="role">select type</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="manager">Manager</option>
                
               </select>
	
	
	       </td>
	              </div>
         </tr>
		 <?php
			   
			   ?>
  </table>
  
		</div>
	
		<div class="col-md-12">
		<div class="well">
		 <center> <button type="submit" class="btn btn-success" name="UPDATE">submit</button></center>
		</div>
		</div>
	
     </form>
   
 </div>
</div>