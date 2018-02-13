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
					<h3 style="text-align:center">List of User</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!-------- end of header part ------>

<!------- start page content ----->

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="well">
				<table class="table">
					<tr>
					
						<th>Sl no</th>
						<th>Name</th>
						<th>Date of Birth</th>
						<th>User Type</th>
						<th>Phone number</th>
						<th>E-mail</th>
						<th>Gender</th>
						<th>Country</th>
						<th colspan="2">Action</th>
						
					</tr>
					
						<?php 
						
					      require_once("connection.php");
						     $i= 0;
						   $query = mysql_query("SELECT * FROM `pms_user`") or die (mysql_error());
						   while ($row = mysql_fetch_array($query))
						   {
							   $i++;
							   echo'<tr>';
							   
							   echo"<td>";
							    echo $i;
							   echo"</td>";
							   echo"<td>".$row['full_name']."</td>";
							   echo"<td>".$row['date_of_birth']."</td>";
							   echo"<td>".$row['user_role']."</td>";
							   echo"<td>".$row['phone']."</td>";
							   echo"<td>".$row['email']."</td>";
							   echo"<td>".$row['gender']."</td>";
							   echo"<td>".$row['country']."</td>";
							   echo"<td>";
							   echo"<a href='update_user.php?update=$row[u_id]'>update now</a>";
							   echo"</td>"; 
							   echo"<td>";
							   echo"<a href='update_user2.php?update2=$row[u_id]'>update now</a>";
							   echo"</td>";
							   echo"<td>";
							   echo"<a href='delete_user.php?delete=$row[u_id]'>Delete now</a>";
							   echo"</td>";
							   
							   
						   }
						   
						
						
					echo'</tr>';
				echo'</table>';
				?>
			</div>
		</div>
	</div>
</div>
<!------- End of page content ----->

<?php include"footer.php";   ?>