<?php

include ('include/config.php');
session_start();
$username=$_SESSION['username'];
$email=$_SESSION['useremail'];

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
									<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
							<h2 style="color:white; text-transform: uppercase;"> <?php echo $_SESSION['username']; ?> </h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

                 <div class="container-fluid">
                  
                  <div class="row justify-content-center mt-4" >
                   <div class="col-md-10 col-lg-6" >
                   <form method="POST">
                    <div class="form-group">
                     <label for="exampleFormControlFile1">Write Feedback</label>
                    
                     <textarea class="form-control" name="feed" rows="3"></textarea>
  
                    </div>
                   
                     <div class="form-group">
                     <button class="btn btn-block btn-primary" type="submit" name="btn">Send Feedback </button>
                   </div>
                   
                    </form>
                   
                   </div>
                  </div>
                 
                 
                 </div>
                    <?php
                 if(isset($_POST['btn']))
                 {
                     $feed=$_POST['feed'];

                   
                     $q=mysqli_query($con,"INSERT INTO `feedback`(`fid`, `name`, `email`, `feedback`) VALUES (NULL,'$username','$email','$feed')");
                     

                     if($q){
                         ?>
                             <div class="alert-primary">
                             <h2> "Feedback Sent Sucessfully..." </h2>
                             </div>
                         <?php

                     }
                
                
                
                    }


                ?>
		
			
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