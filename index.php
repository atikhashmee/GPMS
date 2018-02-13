<?php
$no_visible_elements = true;
include'header.php'; ?>
	
<head>


  
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
  </style>
  
  
  
  
  
  


</head>

<body>

					<div>
					
					<div class="col-md-4  col-md-offset-4">
					<form class="form-horizontal" action="login.php" method="post">
					
						<article class="widget widget__login">
							<header class="widget__header one-btn">
								<div class="widget__title">
									<h2>Welcome to Gpms</h2>
								</div>
								<div class="widget__config">
									<a href="#"></a>
								</div>
							</header>

							<div class="widget__content">
							
							<input type="text" name="name" placeholder="Username">
							<input type="password" name="pass" placeholder="Password">	
								
								 <select name="select_type" >
						  <option value="role">select type</option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
							<option value="manager">Manager</option>
							
						   </select>
								
								<button type="submit" name="submit">Login</button>
						
							</div>
							<div class="login__remember text-center">
								<input type="checkbox" class="custom-checkbox" id="cc1" checked>
								<label for="cc1"><input type="checkbox" id="remember"></label>
								Remember me
							</div>
						</article><!-- /widget -->
							</form>
					</div>
				</div>

<?php require('footer.php'); ?>




