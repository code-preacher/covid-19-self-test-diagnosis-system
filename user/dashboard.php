<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
?>
<?php
include '../config.php';
$qt=mysqli_query($con,"select sender from suggestion where sender='".$_SESSION['email']."' ");
$qr=mysqli_num_rows($qt);


$qt2=mysqli_fetch_array(mysqli_query($con,"select id from user_login where email='".$_SESSION['email']."' "));
$qr2=mysqli_num_rows(mysqli_query($con,"select uid from report where uid='".$qt2['id']."' "));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM DASHBOARD</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM">
    <meta name="keywords" content="SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
   <?php
include "inc/header.php";
   ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
   <?php
include "inc/sidebar.php";
   ?>     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> 

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <a href="view_sug.php">  <span><i class="fa fa-comment f-s-50 color-primary"></i></span></a>
                                </div>
                                <div class="media-body media-text-right">
                                  <h2>
                                        <?php 
                                        if ($qr>0) {
                                           echo $qr;
                                        } else {
                                           echo "0";
                                        }
                                        
                                        
                                        ?>
                                            
                                        </h2>
                                    <p class="m-b-0"><a href="view_sug.php">Total Suggestions</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <a href="diagnose.php">  <span><i class="fa  fa-stethoscope f-s-50 color-success"></i></span></a>
                                </div>
                                <div class="media-body media-text-right">
                                     <h2>
                                        <?php 
                                        if ($qr2>0) {
                                           echo $qr2;
                                        } else {
                                           echo "0";
                                        }
                                        
                                        
                                        ?>
                                            
                                        </h2>
                                    <p class="m-b-0"><a href="view_diagnose.php">Diagnostic Report</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <a href="profile.php">  <span><i class="fa fa-user f-s-50 color-warning"></i></span></a>
                                </div>
                                <div class="media-body media-text-right">
                                   <p></p>
                                    <p class="m-b-0"><a href="profile.php">View Profile</a></p>
                                </div>
                            </div>
                        </div>
                    </div>



 <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <a href="logout.php">  <span><i class="fa fa-sign-out f-s-50 color-danger"></i></span></a>
                                </div>
                                <div class="media-body media-text-right">
                                    <p></p>
                                    <p class="m-b-0"><a href="logout.php">Logout</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        
<div class="card">
                                <div class="card-body">
                                    <div class="year-calendar"></div>
                                </div>
                            </div>

                    </div>
                </div>



                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
           
<!-- FOOTER SCRIPT -->
<?php
include "inc/footer.php";
?>

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!-- scripit init-->

    <script src="js/scripts.js"></script>

</body>

</html>