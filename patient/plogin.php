<?php
include_once('include/config.php');
session_start();
if (isset(($_SESSION['username'])))
{
   header("location:userprofile.php");
}
?>


<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Patient Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body class="account-page">

		
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="../index.php" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="../index.php" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li >
								<a href="../index.php">Home</a>
							</li>
							<li class="has-submenu active">
								<a href="#">Login <i class="fas fa-chevron-down "></i></a>
								<ul class="submenu">
									<li  class="active"><a href="../patient/plogin.php">Patient</a></li>
									<li><a href="../doctor/dlogin.php">Doctor</a></li>
								</ul>
							</li>	
							
					
							<li>
								<a href="admin/adminlogin.php" target="_blank">Admin</a>
							</li>
							<li>
								<a href="community.html" target="_blank">Community</a>
							</li>
							<li class="login-link">
								<a href="plogin.php">Login / Signup</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login.html">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
		
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/p1.jpg" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Patient Login <a href="../doctor/dlogin.php">Are you a Doctor?</a>
											</h3>
										</div>
										<form action="" method="POST">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="useremail">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="userpass">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="ubtn">Login</button>
																			
											<div class="text-center dont-have">Don’t have an account? <a href="pregister.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

			<?php

			if (isset($_POST['ubtn']))

			    {

		
				$count=0;
				$sql=mysqli_query($con," SELECT * from `user_reg` where useremail='$_POST[useremail]' && userpass='$_POST[userpass]';");
			   
				$count=mysqli_fetch_array($sql);

				if($count==0)
				  {
					?>

                       <div class="alert alert-danger">
                         <strong> Email and Password invalid </strong>                     
     
					   </div>
					   <?php
				}

				else 
				{ 
					$_SESSION['username']=$count['username'];
					$_SESSION['useremail']=$count['useremail'];

					$_SESSION['id']=$count['id'];
					$_SESSION['city']=$count['city'];
					$_SESSION['gender']=$count['gender'];
					$_SESSION['phnum']=$count['phnumber'];
					





				   ?>
                  <script>
				     location.replace("../patient/userprofile.php");
				    
				  </script>

				<?php
			      
				}

              
			}
			?>
   
		
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
</html>