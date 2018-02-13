<?php require('header.php'); ?>
 <?php require_once("connection.php"); ?>
 



 <div class='container'>
		    <div class='row'>
			  <div class='col-lg-10'>
				<div class='well'>
					<table class='table'>
			 <?php 
			
 if (isset($_GET['details']))
 {
	
	 $id = $_GET['details'];
	  
	 $result = mysql_query("SELECT * FROM `products` WHERE `pro_id`=$id ") or die(mysql_error());
	 
	 while($row= mysql_fetch_array($result))
	 {
		 echo"<div class='row'>
			<div class='col-lg-6'>";
				
		
		  echo'<tr>';
		  echo"<th>product code </th>";
		  echo"<td>".$row['pro_code']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>product name</th>";
		  echo"<td>".$row['pro_name']."</td>";
		  echo'</tr>'; 
		  echo'<tr>';
		  echo"<th>product category</th>";
		  echo"<td>".$row['category']."</td>";
		  echo'</tr>';  
		  echo'<tr>';
		  echo"<th>product sub category</th>";
		  echo"<td>".$row['sub_category']."</td>";
		  echo'</tr>'; 
		  echo'<tr>';
		  echo"<th>product Size</th>";
		  echo"<td>".$row['size']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>shipment name</th>";
		  echo"<td>".$row['shipment']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>purchasing cost</th>";
		  echo"<td>".$row['total_cost']."</td>";
		  echo'</tr>'; 
		  echo'<tr>';
		  echo"<th>selling price</th>";
		  echo"<td>".$row['selling_price']."</td>";
		  echo'</tr>'; 
		  echo'<tr>';
		  echo"<th>profit amount</th>";
		  echo"<td>".$row['profit_amount']."</td>";
		  echo'</tr>'; 
		  echo'<tr>';
		  echo"<th>product quantity</th>";
		  echo"<td>".$row['product_quantity']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>supplier</th>";
		  echo"<td>".$row['supplier']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>product details</th>";
		  echo"<td>".$row['product_details']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>brand name</th>";
		  echo"<td>".$row['m_brand']."</td>";
		  echo'</tr>';
		  echo'<tr>';
		  echo"<th>issue date</th>";
		  echo"<td>".$row['date']."</td>";
		  echo'</tr>';  
		 
		  echo'</div>';
		  echo'
			<div class="col-lg-4">';
			
			
		  echo"<tr><td>";
		   echo $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"150\" width=\"200\" >";
		  echo"</tr></td>";
		  echo'</div></div>';
	 
	 }
	echo"		
					</table>
				</div>
			</div>
		</div>
	</div>	 
		 ";
	 
	 }
	 ?>

	
			

 
 

 
 
 
 <?php  require('footer.php'); ?>
    <?php  
/*   
     if (isset($_GET['id'])){
	 $id = $_GET['id'];
	   echo"<table class='table'>";
	   
	   echo"<tr> 
	     <td>acos</td>
	     <td>b</td>
	     <td>c</td>
	     <td>d </td>
	     <td>e
		 </td>
	   
	   </tr>";
	   
	   
		
	 $query = mysql_query("SELECT * FROM `products` WHERE pro_id= '$id' ") or die (mysql_error());
	 
	   while($row = mysql_fetch_array($query))
	   {
		 
		 
	  }
	  
   }
 
 */
 ?>
 