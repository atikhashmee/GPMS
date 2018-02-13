
 

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	 <link href="css/datepicker.css" rel="stylesheet">
	 <script src= "js/bootstrap-datepicker.js" type="text/javascript"></script>
	 
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
	
	
	
	
	
	
	
 
  	<link rel="icon" sizes="192x192" href="img/touch-icon.png" /> 
	<link rel="apple-touch-icon" href="img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="img/touch-icon-ipad-retina.png" />
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.min.css">
	
	<!-- Pixeden Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="css/pe-icon-7-filled.css">
	<link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
	 
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
<body>
	
		   
		   
		      


		   
	<div class="page-content">
     <div class="row">
	    <div class="col-lg-12">
		  <div class="well">
		      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-inline">
			    
				<td>
						      <select name="select_country" id="parent_cat" class="form-control">
				 <option value="select item">select category</option>
				<?php include"all_category.php";?>
				
				 <?php echo maincat(); ?>
 								  </select>
								
								</td>
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
								<td>
						      <select name="Sub_Category" class="form-control" id="sub_cat">
				              <option value="select item">select sub category</option>
				 
 								  </select>
								
								</td>
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
								<td><button type="submit" class="btn btn-success" name="save">submit</button></td>
								
			  
			<?php
                     if (isset($_POST['save']))
					 {
						 require_once('connection.php');
						 $select_country = $_POST['select_country'];
						 $Sub_Category = $_POST['Sub_Category'];
						 $result ="SELECT * FROM `products` WHERE `category`='$select_country' And `sub_category` = '$Sub_Category' order by `pro_name` ASC";
						 $query = mysql_query($result) or die (mysql_error());
						 while($row = mysql_fetch_array($query))
						 {
							 ?>
					<td><a href=""><?php $file_name = $row['product_image']; echo "<img src=\"profile_image/$file_name\" height=\"200\" width=\"220\" >"; echo"</br>";  echo"<center>".$row['selling_price']."</center>"; ?></a><br />
				   <input type="submit" name="" class="btn btn-success"  value="sell it now" />
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   <input type="submit" name="" class="btn btn-success"  value="details" />
				 </td>
						
        <?php						}
					 }						 
			
			   
			
			
			
			?>
		 
		  
		 
			  </form>
			   
		  </div>
		</div>
	 </div>
  </div>
  
		
		
</body>
</html>