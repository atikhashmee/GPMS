


<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>GPMS-Gradient Product management system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
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
  
  <style>
  select {
    display: inline-block;
    width: 100%;
    border: none;
    height: 64px;
    vertical-align: top;
    background-color: rgba(0,0,0,.25);
    margin: 1px 0 0;
    padding-left: 24px;
    font-weight: 100;
    color: #fff;
}
th {
    /* border-top: 1px solid #fff; */
    border-bottom: 1px solid #fff;
}

  </style>	
	
	
	
	

</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

	<!----<header class="top-bar">
		
		<ul class="profile"> 
			    <!-- user dropdown starts -->
           <!--- <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
     
				
            </div>
            <!-- user dropdown ends -->
		<!--</ul>

	<!---	<div class="main-search">
			<input type="text" placeholder="Search ..." id="msearch">
			<label for="msearch">
				<i class="pe-7s-search"></i>
			</label>
			<button>
				<i class="pe-7g-arrow-circled pe-rotate-90"></i>
			</button>
		</div>
		
		<div class="main-brand">
			<div class="main-brand__container">
				<div class="main-logo"><img alt="Gradient Product Management System Logo" src="img/logo20.png" class="hidden-xs"/><span>AHB</span></div>
				
			</div>
		</div>
		
	</header> --><!-- /top-bar -->
	

<?php } ?>

   	<div class="wrapper">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
		
		<aside class="sidebar">
			
			<div class="user-info">
					<figure class="rounded-image profile__img">
						<a href="dashbord.php"><img class="media-object" src="img/profile.png" alt="user"></a>
					</figure>
					<h2 class="user-info__name"><?php echo $_SESSION['username'];?></h2>
					<h3 class="user-info__role">Admin</h3>
					
				</div> <!-- /user-info -->

				<ul class="main-nav">
					<li class="main-nav--active">
						<a class="main-nav__link" href="dashbord.php">
							<span class="main-nav__icon"><i class="pe-7f-home"></i></span>
							Dashboard
						</a>
					</li>
				
					<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="glyphicon glyphicon-user"></i></span>
							User 
						</a>
						<ul class="main-nav__submenu">
							<li><a href="add_user.php"><span>Add User</span></a></li>
							<li><a href="view_user.php"><span>View User</span></a></li>
						</ul>
					</li>
					
						<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-monitor"></i></span>
							Category 
						</a>
						<ul class="main-nav__submenu">
							<li><a href="add_category.php"><span>Add Category</span></a></li>
							<li><a href="add_sub_category.php"><span>Add sub Category</span></a></li>
							<li><a href="view_category.php"><span>View Category</span></a></li>
							<li><a href="#"><span>Edit Category</span></a></li>
							<li><a href="#"><span>Delete Category</span></a></li>
							
						</ul>
					</li>
					
					
					<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-monitor"></i></span>
							Product 
						</a>
						<ul class="main-nav__submenu">
							<li><a href="add_product.php"><span>Add Product</span></a></li>
							<li><a href="view_product.php"><span>View Product</span></a></li>
							<li><a href="#"><span>Edit Product</span></a></li>
							<li><a href="#"><span>Delete Product</span></a></li>
							
						</ul>
					</li>
					
					
				<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-monitor"></i></span>
							Chart Report 
						</a>
						<ul class="main-nav__submenu">
							<!---<li><a href="chart.php"><span>Daily Report</span></a></li>
							<li><a href="chart.php"><span>weekly Report</span></a></li>
							<li><a href="chart.php>Monthly Report</span></a></li>--->
							
						</ul>
					</li>
					
					
					<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-monitor"></i></span>
							Accounts 
						</a>
						<ul class="main-nav__submenu">
							<li><a href="admin_account_report.php"><span>View Report</span></a></li>
						</ul>
					</li>
					
					
					<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-monitor"></i></span>
							Settings 
						</a>
						<ul class="main-nav__submenu">
							<li><a href="add_brand.php"><span>Add Brand</span></a></li>
							<li><a href="modification_brand.php"><span>Brand Modify</span></a></li>
							<li><a href="add_shipment.php"><span>Add Shift</span></a></li>
							<li><a href="modify_shif.php"><span>Modify Shift</span></a></li>
						</ul>
					</li>
			
						<li class="main-nav--active">
						<a class="main-nav__link" href="logout.php">
							<span class="main-nav__icon"><i class="pe-7f-home"></i></span>
							Logout
						</a>
					</li>
					
				</ul> <!-- /main-nav -->
				
			
		</aside> <!-- /sidebar -->
		
		

        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="#" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <section class="content">
            <!-- content starts -->
            <?php } ?>
