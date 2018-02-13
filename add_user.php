<?php
    if(!isset($_SESSION)){
		session_start(); // starting session for checking username
	}
        if(is_null($_SESSION['username']))
	{
		header("location:index.php"); // Redirect to login.php page
	}
?>



<?php 
/*if(isset($_POST['Save'])) {
    $length = 6;

    $ac = substr(str_shuffle("123457890"), 0, $length);
	try {

		if(empty($_POST['stuname'])) {
			throw new Exception('Student name can not be empty');
		}
		
		//if(empty($_POST['gpa'])) {
			//throw new Exception('**********GPA can not be empty**********');
		//}
		
		if(empty($_POST['father'])) {
			throw new Exception('Father name can not be empty');
		}
		
		if(empty($_POST['mother'])) {
			throw new Exception('Mother Name can not be empty');
		}
		
		if(empty($_POST['class'])) {
			throw new Exception('Class name can not be empty');
		}
		
		if(empty($_POST['section'])) {
			throw new Exception('Section name can not be empty');
		}
		
		if(empty($_POST['cell'])) {
			throw new Exception('Cell number can not be empty');
		}
		
		if(empty($_POST['age'])) {
			throw new Exception('Student age can not be empty');
		}
		
		if(empty($_POST['bdate'])) {
			throw new Exception('Date of birth can not be empty');
		}
		
		if(empty($_POST['adate'])) {
			throw new Exception('Admission date can not be empty');
		}
		
		if(empty($_POST['present_address'])) {
			throw new Exception('Present address can not be empty');
		}
        if(empty($_POST['version'])) {
            throw new Exception('Version can not be empty');
        if(empty($_POST['father_occupation'])) {
                throw new Exception('Father Occupation can not be empty**********');
            }
        if(empty($_POST['permanent_address'])) {
                throw new Exception('Permanent address can not be empty');
            }

            }
		
		$file_type = $_FILES['picture']['type'];
		$file_name = $_FILES['picture']['name'];
		if((($file_type == "image/jpeg")||
			($file_type == 'image/gif') || 
			($file_type == 'image/pjpeg')) && 
			($_FILES['picture']['size'] < 1073741824))
			{
				if($_FILES['picture']['error'] > 0){
					echo "Error: ".$_FILES['picture']['error'];
			}
			else{
				if(file_exists("profile_image/".$_FILES['picture']['name'])){
					echo $file_name. "already exists.";
				}else{
					move_uploaded_file($_FILES['picture']['tmp_name'],"profile_image/".$file_name);
				}
			}
		}
			else{
			echo "Invalid file size.";
		}
		
		$result = mysql_query("insert into db_students_admission (reg_id,stuname,roll,gpa,father,mother,class,section,cell,age,bdate,adate,present_address,picture,version,father_occupation,blood,religion,permanent_address)
		values('$ac','$_POST[stuname]','$_POST[roll]','$_POST[gpa]','$_POST[father]','$_POST[mother]','$_POST[class]','$_POST[section]','$_POST[cell]','$_POST[age]','$_POST[bdate]','$_POST[adate]','$_POST[present_address]','$file_name','$_POST[version]','$_POST[father_occupation]','$_POST[blood]','$_POST[religion]','$_POST[permanent_address]') ");
	//	$result1 = mysql_query("Select `reg_ifd` form db_students_a");
    //	$success_message = ' Student information has been inserted successfully.';
        echo $success_message;
        header("location:notice_student.php?reg=$ac");



	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

*/

?>



<?php require('header.php'); ?>

<link href="css/datepicker.css" rel="stylesheet">
	 <script src= "js/bootstrap-datepicker.js" type="text/javascript"></script>
	



<div class="container">
<div class="row"> 
<div class="col-md-12">
 <div class="well"> 
 <div class="custom-heading"> 
 <h3><a href="#">AHB</a> :::::::::User Registration Form</h3>
 </div>
 </div>

</div>

</div>


</div>


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
             <td><input type="text"  name="full_name" class="form-control" id="exampleInputName2" placeholder="TAHRIMA SHADIA"></td>
             </div>
         </tr>
                        
                               <tr>
                                  <div class="form-group">
                                  <td><label  for="exampleInputName2">Date of birth:</label></td>
                                  <td><input type="date" name="date" class="datepicker form-control" data-date-format="mm/dd/yyyy" ></td>
								 
                                  </div>
                              </tr>
                        
                              <tr>
                                 <div class="form-group">
                                 <td><label for="exampleInputName2">Phone no:</label></td>
                                 <td><input type="number" name= "phone" class="form-control" id="exampleInputName2" placeholder="Phone number"></td>
                                 </div>
                             </tr>
                        
                             <tr>
                                <div class="form-group">
                                <td><label for="exampleInputName2">Country:</label></td>
                                <td>
								   <select name="select_country" id="" class="form-control">
								      <option value="select item">select an country`</option>
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
                               <td><input type="text"  name= "city" class="form-control" id="exampleInputEmail2" placeholder="City"></td>
                               </div>
					
                          </tr> 
						  <tr>
						  		    <td>Gender</td><td>
	         <select name="select_sex" class="form-control" >
                <option value="select sex">select sex</option>
                <option value="male">male</option>
                <option value="female">female</option>
                
               </select>
	
	
	       </td>
						  </tr>
                          <tr>
                           <div class="form-group">
                           <td> <label for="exampleInputEmail2">E-mail</label></td>
                           <td><input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="tahasha@example.com"></td>
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
                          <td><input type="text" name="username" class="form-control" id="exampleInputName2" placeholder="Username"></td>
                        </div>
					</tr>
							</br> </br>
					<tr>
                         <div class="form-group">
                          <td><label  for="exampleInputName2">Password</label></td>
                           <td><input type="password" name="password" class="form-control" id="exampleInputName2" placeholder="Password"></td>
                         </div>
					</tr>
		</br> </br>
					<tr>
                         <div class="form-group">
                           <td><label for="exampleInputName2">Confirm pass:</label></td>
                           <td><input type="password"  name="cpassword" class="form-control" id="exampleInputName2" placeholder="Confirm pass"></td>
                         </div>
					</tr>
  </br> 
					<tr>
					<div class="form-group">
                   <td> <label for="exampleInputName2">User type:</label></td>
  	       <td>
	         <select name="select_type" class="form-control" >
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
		 <center> <button type="submit" class="btn btn-success" name="save">submit</button></center>
		</div>
		</div>
		 <?php
         require('connection.php');

      if (isset($_POST['save']))
	  {
		  $full_name = $_POST['full_name'];
		  $date = $_POST['date'];
		  $phone = $_POST['phone'];
		  $select_country = $_POST['select_country'];
		  $city = $_POST['city'];
		  $select_sex = $_POST['select_sex'];
		  $email = $_POST['email'];
		  $username = $_POST['username'];
		  $password = md5($_POST['password']);
		  $cpassword =  md5($_POST['cpassword']);
		  $select_type = $_POST['select_type'];
		    if (empty($full_name) &&  empty($date)=="0000-00-00" && empty($phone) &&  empty($select_country)=="select item" && empty($city) && empty($select_sex)=="select sex" &&  empty($email)&& empty($username) && empty($password) && empty($cpassword) && empty($select_type)=="role")
			{
				echo"<script type='text/javascript'>alert('please fill up the fields');</script>";
			}else 
			{
				$insert = "INSERT INTO `pms_user`(`full_name`, `date_of_birth`, `phone`, `email`, `country`, `city`, `gender`, `u_name`, `pass`, `co_pass`, `user_role`) VALUES ('$full_name','$date','$phone','$email','$select_country','$city','$select_sex','$username','$password','$cpassword','$select_type')";
				$query = mysql_query($insert);
				echo'success';
			}
		   
		  
		  
	  }		  
		    
		 
		 
		 
		 
		 
		 ?>
		
		
		
		
		
		
		
		
		
		
		
     </form>
   
 </div>
</div>
 











<?php require('footer.php'); ?>

