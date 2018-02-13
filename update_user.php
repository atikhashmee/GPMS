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


<?php 
 include"connection.php";
 $result =  mysql_query("SELECT * FROM `pms_user`") or die (mysql_error());
 while ($row = mysql_fetch_array($result))
 {
	$full_name = $row['full_name']; 
	$date_of_birth = $row['date_of_birth']; 
	$phone = $row['phone']; 
	$email = $row['email']; 
	$country = $row['country']; 
	$city = $row['city']; 
	$gender = $row['gender']; 
	$u_name = $row['u_name']; 
	$pass = $row['pass']; 
	$co_pass = $row['co_pass']; 
	$user_role = $row['user_role']; 
 ?>
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
		 
           <tr>
             <div class="form-group">
             <td><label for="exampleInputName2">Full name:</label></td>
             <td><input type="text"  name="full_name" class="form-control" id="exampleInputName2" placeholder="Jane Doe" value="<?php echo $full_name; ?>"></td>
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
								   <select name="select_country" id="" class="form-control" value="<?php echo $country; ?>" >
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
                 
          </table>
		   </div>
		</div>
        <div class="col-md-6">
		<div class="well">
		 <div class="custom-heading">
		 <h4>login info</h4>
		 </div>
		<table>
					<tr>
                        <div class="form-group">
                          <td><label for="exampleInputName2">Username</label></td>
                          <td><input type="text" name="username" class="form-control" id="exampleInputName2" placeholder="Username" value="<?php echo $u_name; ?>"></td>
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
                           <td><input type="password"  name="cpassword" class="form-control" id="exampleInputName2" placeholder="Confirm pass" value="<?php echo $co_pass; ?>"></td>
                         </div>
					</tr>
  </br> 
					<tr>
					<div class="form-group">
                   <td> <label for="exampleInputName2">User type:</label></td>
  	       <td>
	         <select name="select_type" class="form-control"  value="<?php echo $user_role; ?>">
			  <option value="role">select type</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="manager">Manager</option>
                
               </select>
	
	
	       </td>
	              </div>
         </tr>
  </table>
  </div>
		</div>
	
		<div class="col-md-12">
		<div class="well">
		 <center> <button type="submit" class="btn btn-success" name="UPDATE">submit</button></center>
		</div>
		</div>
	
     </form>
   
 </div>
</div>
<?php 
}
  
?>
 
 	<?php 
 include"connection.php";
if(isset($_REQUEST['update'])) {
	$id = $_REQUEST['update'];
}

if(isset($_POST['UPDATE'])) {

	try {
	
		if(empty($_POST['full_name'])) {
			throw new Exception('name can not be empty');
		}
		

		
		if(empty($_POST['date_of_birth'])) {
			throw new Exception('Date of birth can not be empty');
		}
		
		if(empty($_POST['phone'])) {
			throw new Exception('Phone number can not be empty');
		}
		
		if(empty($_POST['email'])) {
			throw new Exception('email can not be empty');
		}
		
		if(empty($_POST['country'])) {
			throw new Exception('country name can not be empty');
		}
		
		if(empty($_POST['city'])) {
			throw new Exception('city name can not be empty');
		}
		

		if(empty($_POST['gender'])) {
			throw new Exception('gender can not be empty');
		}
		if(empty($_POST['u_name'])) {
			throw new Exception('Username field can not be empty');
		}
		if(empty($_POST['pass'])) {
			throw new Exception('password  field can not be empty');
		}
		if(empty($_POST['co_pass'])) {
			throw new Exception('Confirm Password  field can not be empty');
		}
		if(empty($_POST['user_role'])) {
			throw new Exception('User Type field can not be empty');
		}
		

								
		//$result = mysql_query("insert into db_students_admission (stuname,roll,gpa,father,mother,class,section,cell,age,bdate,adate,present_address,picture) values('$_POST[stuname]','$_POST[roll]','$_POST[gpa]','$_POST[father]','$_POST[mother]','$_POST[class]','$_POST[section]','$_POST[cell]','$_POST[age]','$_POST[bdate]','$_POST[adate]','$_POST[present_address]','$_POST[picture]') ");
		$result = mysql_query("UPDATE `pms_user` SET `full_name`=$_POST[full_name],`date_of_birth`= $_POST[date],`phone`=$_POST[phone],`email`=$_POST[email],`country`=$_POST[select_country],`city`=$_POST[city],`gender`=$_POST[select_sex],`u_name`=$_POST[username],`pass`=md5($_POST[password]),`co_pass`=md5($_POST[cpassword]),`user_role`=$_POST[select_type] WHERE `u_id`='$id'  ");
		
		$success_message = 'User information has been updated successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}
?>
<!------------ End of update content ----------->

<?php include"footer.php"; ?>