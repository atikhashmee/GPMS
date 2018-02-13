<?php

include"connection.php";
// To properly get the config.php file

$username=mysql_real_escape_string($_POST['name']);  //Set UserName   htmlentities()

$password=mysql_real_escape_string(md5($_POST['pass'])); //Set Password
$option = mysql_real_escape_string($_POST['select_type']);	// set select option

$msg ='';
if($option == 'admin'){
	if(isset($username, $password))
	{
		$sql="SELECT * FROM `pms_user` WHERE u_name='$username' AND pass='$password' ";
                //echo die($sql);
		 $result= mysql_query($sql) or die (mysql_error());
		$count=mysql_num_rows($result);
		if($count==1){
			// Register $myusername, $mypassword and redirect to file "admin.php"
			session_start(); //Start the session
			$_SESSION['username']= $username;

            header("location:dashbord.php");
			
		}
		else {
			$msg ="<font color='red'>Wrong Username or Password. Please retry</font>";
			header("location:index.php?msg=$msg");
		}
		
	}
	
}
else if($option == 'user'){
	if(isset($username, $password))
	{
		$sql="SELECT * FROM `pms_user` WHERE u_name='$username' AND pass='$password' and user_role='".$option."'";
                //echo die($sql);
		 $result= mysql_query($sql) or die (mysql_error());
		$count=mysql_num_rows($result);
		if($count==1){
			// Register $myusername, $mypassword and redirect to file "admin.php"
			session_start(); //Start the session
			$_SESSION['username']= $username;

            header("location:user_dashbord.php");
			
		}
		else {
			$msg ="<font color='red'>Wrong Username or Password. Please retry</font>";
			header("location:index.php?msg=$msg");
		}
		
	}
	
}
else if($option == 'Teacher'){
		if(isset($username, $password)) 
	{
		$sql="SELECT * FROM db_users_login WHERE email='$username' and password='$password' and u_type='".$option."'";
                //echo die($sql);
		 $result=$obj->sql($sql);
		$count=mysql_num_rows($result);
		if($count==1){
			// Register $myusername, $mypassword and redirect to file "admin.php"
			session_start(); //Start the session
			$_SESSION['username']= $username;
			
			header("location: Home.php");
			
		}
		else {
            $msg ="<B STYLE='color: red;'> Wrong Username or Password. Please retry</font>";
       //     echo $msg;
		header("location:index.php?msg=$msg");
		}
		ob_end_flush();
	}
	
}
else if($option == 'Account'){
		if(isset($username, $password)) 
	{
		$sql="SELECT * FROM db_users_login WHERE email='$username' and password='$password' and u_type='".$option."'";
                //echo die($sql);
		 $result=$obj->sql($sql);
		$count=mysql_num_rows($result);
		if($count==1){
			// Register $myusername, $mypassword and redirect to file "admin.php"
			session_start(); //Start the session
			$_SESSION['username']= $username;
			
			header("location: Home.php");
			
		}
		else {
            $msg ="<B STYLE='color: red;'> Wrong Username or Password. Please retry</font>";
         //   echo $msg;
          header("location: index.php?msg=$msg");
		}
		ob_end_flush();
	}
	
}
else {
		header("location:index.php?msg=Please enter username and password");
}
?>