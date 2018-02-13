<?php 
require_once("connection.php");

$parent_cat = $_GET['parent_cat'];

$query = mysql_query("SELECT * FROM `sub_category` WHERE main_cat= {$parent_cat}");
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[s_cat_id]'>$row[sub_cat_name]</option>";
}
?>