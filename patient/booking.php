<?php
include ('include/config.php');
session_start();
$uid=$_SESSION['id'];
$email=$_SESSION['useremail'];
$id=$_SESSION['dname'];
$spec=$_SESSION['spec'];
?>



<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/booking.html  30 Nov 2019 04:12:16 GMT -->
<head>
		<meta charset="utf-8">
		<title>Booking</title>
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
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<?php
			include ('include/header.php');

		
			?>
		
		
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
							<div class="card">
								<div class="card-body">
									<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="booking-info">
											<h3><a href="doctor-profile.html"><?php echo $_SESSION['dname'];?></a></h3>
											<p class="text mb-0"><i class="fas fa-user-tag"> Specialisation: <span style="color:#007bff;; font-size:30px;">    <?php echo $_SESSION['spec'];?> </span></i></p>
											<p class="text mb-0"><i class="fas fa-map-marker-alt"> Address: <span style="color:#007bff;; font-size:30px;">    <?php echo $_SESSION['add'];?> </span></i></p>
											
											<p class="text mb-0"><i class="fas fa-calendar-day"> Consultation Days: <span style="color:#007bff;; font-size:30px;">    <?php echo $_SESSION['days'];?> </span></i></p>
											<p class="text mb-0"><i class="fas fa-clock"> Consultation Time: <span style="color:#007bff;; font-size:30px;">    <?php echo $_SESSION['time'];?> </span></i></p>
										
											
											
										
									</div>
								</div>
							</div>
							
							<!-- Schedule Widget -->
							<div class="card booking-schedule schedule-widget">
							
								<!-- Schedule Header -->
								<div class="schedule-header">
									<div class="row">
										<div class="col-md-12">
										
										
											<h3 class="text-center" style="color:#09e5ab;font-family:impact;"> Make Appointment  </h3>
											
										</div>
									</div>
								</div>
								<!-- /Schedule Header -->
								
								<!-- Schedule Content -->
								<div class="schedule-cont mx-4">
									<div class="row align-content-center" style="margin-left:200px;">
										<div class="col-md-7">
										<form action="" method="POST">
									
						         
						             	<div class="row">
							         	<div class="col-sm-6">
							           		<div class="form-group">
										<span class="form-label">Patient Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" name='patname'>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label" name="email">Email</span>
										<input class="form-control" type="email"  value="<?php echo $email;?>" disabled>
										
									</div>
									
								</div>
								<div class="form-group">
										<span class="form-label" name="email">Specialisation</span>
										<input class="form-control" type="email"  value="<?php echo $spec;?>" disabled>
										
									</div>
							</div>
							<div class="form-group">
								<span class="form-label" >Phone</span>
								<input class="form-control" type="number" placeholder="Enter your phone number" name="phnum">
							</div>
							<div class="row">
								<div class="col-md-5">
							<div class="form-group">
								<span class="form-label" >Age</span>
								<input class="form-control" type="number" placeholder="Enter Age" name="age">
							</div>
							</div>
							   <div class="col-md-7">
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
											</div>
							
						</div>
						<div class="row">
								<div class="col-md-5">
								<div class="form-group">
								<span class="form-label" >Place</span>
								<input class="form-control" type="text" placeholder="Enter Location" name="place">
							</div>
							</div>
							<div class="col-md-7">
								<div class="form-group">
								<span class="form-label">Address</span>
								<input class="form-control" type="text" placeholder="Enter Location"  name="address">
							</div>
							</div>


							</div>
						
							
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<span class="form-label">Appointment Date</span>
										<input class="form-control" type="date"  name="appdate" required>
									</div>
                               </div>						
							</div>
							<!-- Submit Section -->
							<div class="submit-section proceed-btn text-right" >
								<button class="btn btn-primary submit-btn" name="bbtn">Confirm </button>
							</div>
						</form>
										
										
									</div>
									</div>
								</div>
							
								
							</div>
						
						
							
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
  <?php
					  
			if(isset($_POST['bbtn']))
  
			 {
				
				 $pname=$_POST['patname'];
				 $age=$_POST['age'];
				 $address=$_POST['address'];
				 $ph=$_POST['phnum'];
				 $gen=$_POST['gender'];
				 $place=$_POST['place'];
				 $date=$_POST['appdate'];
				 


				 $querry=mysqli_query($con,"INSERT INTO `bboking` (`id`,`docid`,`uid` ,`spec`, `patname`,`paddress`,`age`,`gender`,`appdate`,`phnum`,`email`) VALUES ( NULL,'$id','$uid' ,'$spec','$pname','$address','$age','$gen','$date','$ph','$email')");
				
				 if($querry)
				 {
					 ?>
					 <script>
						  location.replace("../patient/booksucess.php");
					 </script>
					 <?php
				 }else{


					echo "NOT SUCCESS";
				 }

   



			 }
		
			   ?>
			   

			   <?php
			     include ('include/footer.php');
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

</html>


			
		
							 
	