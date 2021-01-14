<!DOCTYPE html> 
<html lang="en">
	


<?php
   include_once('include/config.php');

   if(isset($_POST['ubtn']))
    {
		$pname = $_POST['username'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$phnumber = $_POST['phnumber'];
		$gender = $_POST['gender'];
		$email = $_POST['useremail'];
		$upassword = $_POST['userpass'];

		$count=0;

		$sql=mysqli_query($con ,"select useremail from user_reg");
		while($row=mysqli_fetch_assoc($sql))
		{
			if ($row['useremail']==$email)
			{
				$count=$count+1;
			}
		}
	 
		if($count==0)
		{

		   $query= mysqli_query($con, "INSERT INTO `user_reg` (`id`, `username`, `address`, `city`, `phnumber`, `gender`, `useremail`, `userpass`) VALUES (NULL, '$pname', '$address',  '$city', '$phnumber', '$gender', '$email','$upassword');");
		
		        if($query)
		           {
	     	          echo "<script>alert ('Registration Sucessfull..You can now login');</script>";
					   header('location:plogin.php');
		
					}

		}
		else
		{
		
			echo "<script>alert ('Email Already Exist');</script>";
		}
	}





   
 ?>







<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Patient Register</title>
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

<!--  password match -->
		
		<script type="text/javascript">
function valid()
{
 if(document.pregister.userpass.value!= document.pregister.userpass_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.pregister.userpass_again.focus();
return false;
}
return true;
}
</script>
		

	
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
						<a href="../admin/index.html" target="_blank">Admin</a>
					</li>
					<li>
						<a href="../community.html" target="_blank">Community</a>
					</li>
					<li class="login-link">
						<a href="../patient/plogin.php">Login / Signup</a>
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
					<a class="nav-link header-login" href="plogin.php">login / Signup </a>
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
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/p1.jpg" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Patient Register <a href="../doctor/dregister.php">Are you a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="" method="POST" name="pregister" id="pregister" onSubmit="return valid();">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="username">
												<label class="focus-label">FullName</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="address">
												<label class="focus-label">Address</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating " name="city">
												<label class="focus-label">City</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="phnumber">
												<label class="focus-label">Phone Number</label>
											</div>
											<div class="form-group form-focus ">
						                       <label class="block" style="font-size:20px;">
									              Gender
								               </label>
								            <div class="clip-radio radio-primary ">
								            	<input type="radio" id="rg-female" name="gender" value="female" >
								             	<label for="rg-female" style="font-size:18px;">
									            	Female
								            	</label>
								            	<input type="radio" id="rg-male" name="gender" value="male" style="margin-left:22px;">
								            	<label for="rg-male" style="font-size:18px;">
									            	Male
									           </label>
							               	</div>
							                </div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="useremail" required>
												<label class="focus-label">Email</label>
												
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="userpass">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="userpass_again">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="plogin.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="ubtn">Signup</button>
											
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/footer-logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
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

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
</html>