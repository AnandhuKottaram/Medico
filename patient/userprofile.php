<?php

include ('include/config.php');
session_start();

?>

<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/patient-profile.html  30 Nov 2019 04:12:09 GMT -->
<head>
		<meta charset="utf-8">
		<title>profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

	              <?php

				   include ('include/header.php');
				  ?>

	
						
			
			<!-- /Header -->

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
							<h2 style="color:white; text-transform: uppercase;"> <?php echo $_SESSION['username']; ?> </h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->


			<!-- Banner section -->
			<section class="section section-search" id=#search>
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Search Doctor, Make an Appointment</h1>
							<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box">
							<form action="" method="POST">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location" name="location">
									<span class="form-text">Based on your Location</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc" name="spec">
									<span class="form-text">Ex : Dental or Sugar Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn" name="search"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->
						
					</div>
				</div>
			</section>



			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft">
						
							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
									       <div class="profile-det-info">
											<h3>  <?php echo $_SESSION['username'];   ?></h3>
												
												<div class="patient-details">
													<h5><b>Patient ID :</b> <?php echo $_SESSION['id']; ?></h5>
													<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $_SESSION['city']; ?> </h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info">
										<ul>
											<li>Phone <span>	<?php echo $_SESSION['phnum'];?>
				
					</span></li>
											<li>Gender <span><?php echo $_SESSION['gender'];?></span></li>
											
										</ul>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->
							
							
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
							<div class="card">
								<div class="card-body pt-0">
									<div class="user-tabs">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Doctor List</a>
											</li>
											
										</ul>
									</div>
									<div class="tab-content">
										
										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Doctor Name</th>
																	<th> Specialization</th>
																	<th>Place</th>
																	<th>Fee</th>
																	<th>Consultation Days</th>
																	
																	<th>Booking</th>
																</tr>
															</thead>
															<tbody>
																<?php

															if(isset($_POST['search']))
															{ 
																$location=$_POST['location'];
																$spec=$_POST['spec'];
																$query=mysqli_query($con,"SELECT * FROM `doc_reg` WHERE city='$location' OR spec ='$spec';");
																 $res=mysqli_num_rows($query);
																 if($res==0)
																 {
																	 ?>
                                                                         <div class="alert alert-info">
																		    
																			<h4>No Result Found</h4>
																		 
																		 
																		 </div>

																	 <?php
																 }  else {

																	while($row=mysqli_fetch_array($query))
																	{
																		$_SESSION['dname']=$row['dname'];
																		$_SESSION['spec']=$row['spec'];
																		$_SESSION['days']=$row['cons_days'];
																		$_SESSION['place']=$row['city'];
																		$_SESSION['did']=$row['id'];
																		$_SESSION['time']=$row['cons_time'];
																		$_SESSION['add']=$row['address'];

																		


																		?>
																		<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																					<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
																				</a>
																				<a href="booking.php"><?php echo $row['dname']; ?> </a>
																			</h2>
																		</td>
																		<td><?php echo $row['spec']; ?></td>
																		<td><?php echo $row['city']; ?></td>
																		<td><?php echo $row['fee']; ?></td>
																		<td><?php echo $row['cons_days']; ?></td>
																		
																		<td class="text-right">
																			<div class="table-action">
																				<a href="booking.php" class="btn btn-sm bg-success-light">
																					<i class="far fa-book"></i> Book Appoiniment
																				</a>
																			</div>
																		</td>
																	</tr>
																	<tr>
																	<?php

																	
																	}
																 }


															   
															   
																 
			
															}
															?>


															
															</tbody>
														</table>
													</div>
			
			
			<!-- /Page Content -->
   
			
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Add Medical Records Modal -->
		<div class="modal fade custom-modal" id="add_medical_records">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">Medical Records</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<form>					
						<div class="modal-body">
							<div class="form-group">
								<label>Date</label>
								<input type="text" class="form-control datetimepicker" value="31-10-2019">
							</div>
							<div class="form-group">
								<label>Description ( Optional )</label>
								<textarea class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>Upload File</label> 
								<input type="file" class="form-control">
							</div>	
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								<button type="button" class="btn btn-secondary submit-btn" data-dismiss="modal">Cancel</button>							
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Medical Records Modal -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/patient-profile.html  30 Nov 2019 04:12:13 GMT -->
</html>