<?php 
require("connection.php");

function maincat(){
     	
 	 $qry = mysql_query("select * from category ") or die (mysql_error());
	 while($row = mysql_fetch_array($qry)) {
		 $cat = $row['cat_id'];
		  $ctegory_name =  $row['category_name'];
		  $ctegory_code =  $row['category_code'];
		 //echo"<option value=''>$row[category_name]</option>";
		 echo'<option value="'.$row['cat_id'].'">'.$row['category_name'].'</option>';
	 }
 
}
?>
<?php 

 function subcat(){
     
       $qrye = mysql_query("select * from sub_category ") or die (mysql_error());
	 while($row = mysql_fetch_array($qrye)) {
		$sub_cat_name = $row['s_cat_id'];
		$ctegory_name =  $row['category_name'];
		  $ctegory_code =  $row['category_code'];
		 //echo"<option value=''>$row[sub_cat_name]</option>";
		 echo'<option value="'.$row['sub_cat_name'].'">'.$row['sub_cat_name'].'</option>';
 }
 }                                                        

?>
<?php 
 function shiftment(){
     
         $qryy = mysql_query("select * from shipment ") or die (mysql_error());
	 while($row = mysql_fetch_array($qryy)) {
		 /* $ctegory_name =  $row['category_name'];
		  $ctegory_code =  $row['category_code'];*/
		// echo"<option value="'.$row[ship_name].'">$row[ship_name]</option>";
		 echo'<option value="'.$row['ship_name'].'">'.$row['ship_name'].'</option>';
 }


 }
 ?>
 <?php 
 function modify_shifment(){
	 
	 echo'<table class="table">';
	 echo"<tr><th>shiftment no</th> <th>ship_name</th><th>shiftment typ</th><th>action</th></tr>";
	  $update = mysql_query("SELECT * FROM `shipment`") or die (mysql_error());
	  while($row = mysql_fetch_array($update)){
		  $shipment_no = $row['shipment_no'];
		  $ship_name = $row['ship_name'];
		  $origine = $row['origine'];
		  echo"<tr>";
		  echo "<td>".$shipment_no."</td>";
		  echo "<td>".$ship_name."</td>";
		  echo "<td>".$origine."</td>";
		 echo"<td><a class='btn btn-primary'   href='modify_shif.php?id=$row[ship_id]'>delete now</a></td>";
		  echo"</tr>";
	  }
	  
	  echo"</table>";
	 
	 
 }
 ?>
 <?php 
 
 function shif_delete(){
	 if (isset($_GET['id'])){
		 
		 $id = $_GET['id'];
		 $delete = mysql_query("DELETE FROM `shipment` WHERE ship_id= '$id'") or die (mysql_error());
		 echo'data has been deleted';
	 }
	 
	 
	 
 }
?>
<?php 


 function brand(){
     
             $bqry = mysql_query("select * from brand ") or die (mysql_error());
	 while($row = mysql_fetch_array($bqry)) {
		 /* $ctegory_name =  $row['category_name'];
		  $ctegory_code =  $row['category_code'];*/
		// echo"<option value=''>$row[brand_name]</option>";
		  echo'<option value="'.$row['brand_name'].'">'.$row['brand_name'].'</option>';
		 
 }


 }
 ?>
 <?php


/// add product segment 
 function insert_product(){
                
     

 }
////end product segment

?>
<?php 
/*
// view product segment 
function  view_product(){
    
        $presult = mysql_query("SELECT * FROM `products`") or die (mysql_error());
        while ($row = mysql_fetch_array($presult)){
            ?>
			<tr>
               
			$pr_code = $row ['pro_code'];
             $pr_name = $row ['pro_name'];
              $pr_quantity = $row ['product_quantity'];
               $pr_details = $row ['product_details'];
                $pr_brand = $row ['m_brand'];
                $file_name = $row['product_image'];
                 
                  echo"<tr>";
                 echo"<td></td>";
                   
                 echo"<td>$pr_name</td>";
                   
                 echo"<td>$pr_quantity</td>";
                   
                 echo"<td>$pr_details</td>";
                <td><?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"50\" width=\"70\" >"; ?></td>	

                 echo'</tr>';
                 
        }

}
*/
 ?>
 

<!----Brand adding segment ----------->
<?php 
function brand_add(){
   if(isset($_POST['submit'])){
    
				$bname = $_POST['bname'];
				$bcode = $_POST['bcode'];
				$bcountry=$_POST['bcountry'];
				if ( empty($bname)&& empty($bcode)&& empty($bcountry))

				 {
					echo'plesae fill up the information';
				}else{
					$binsert = mysql_query("INSERT INTO `brand`(`brand_name`, `brand_code`, `country`) VALUES ('$bname','$bcode','$bcountry')") or die (mysql_error());
				}
				echo'success';

			}
			}


?>



<?php 
 
 function modify(){
   $delete= mysql_query("SELECT * FROM `brand`") or die (mysql_error());
  echo"<table class='table'>
    <tr>
	<th>Brand code</th>
	<th>Brand name</th>
	<th>Country</th> 
	<th>delete</th></tr>";
   while ($row = mysql_fetch_array($delete)){
	    
		echo"<tr>";  
		echo"<td>" .$row['brand_code']."</td>";
		echo "<td>".$row['brand_name']."</td>";
		echo"<td>".$row['country']."</td>";
		//echo"<td>".$row['bra_id']."</td>";
		echo"<td>";
		echo"<a href='modification_brand.php?id=$row[bra_id]'>delete now</a>";
		echo"</td>";
		
		 echo"</tr>";
		 
	
	
   }
   echo"</table>";
 }
 ?>
 
 
 <?php 
 
function delete(){
	
	
	if (isset($_GET['id'])){
$id= $_GET['id'];
$sql = mysql_query("DELETE FROM `brand` WHERE bra_id='$id'") or die (mysql_error());

//header('location: modification_brand.php');
}

}

 ?>
 
 