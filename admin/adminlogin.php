<?php
include_once('include/config.php');
session_start();
if (isset(($_SESSION['username'])))
{
   header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="../index.php" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="../index.php" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
                <!-- /Logo -->
             </div>
             <!-- /header -->

				
			
				
                    	<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row" style="margin-top:200px;">
						<div class="col-md-8 offset-md-4">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								
								<div class="col-md-12 col-lg-6 login-right">
									<div class="login-header">
											<h3>Admin Login
											</h3>
										</div>
										<form action="" method="POST">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="useremail">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="userpass">
												<label class="focus-label">Password</label>
											</div>
										
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="ubtn">Login</button>
											
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

            </div>	
            
            
            <?php


            if (isset($_POST['ubtn']))

                {


             $count=0;
             $sql=mysqli_query($con," SELECT * from `admin` where adname='$_POST[useremail]' && password='$_POST[userpass]';");

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
    $_SESSION['username']=$count['adname'];
   




   ?>
  <script>
     location.replace("../admin/index.php");
    
  </script>

<?php
  
}


}
?>

                         
					
					
					
					
						
		
		
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets/plugins/raphael/raphael.min.js"></script>    
		<script src="assets/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>