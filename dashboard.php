<?php 
    session_start();
    include_once('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Phoenixcoded" />
      <!-- Favicon icon -->
      <link rel="icon" href="./files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="./files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="./files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="./files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="./files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="./files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="./files/assets/css/style.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="./files/assets/css/common.css">
  </head>

  <body themebg-pattern="theme0">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>

        <center>
            <br> <br>
            <a href="dashboard.php">
                <img class="img-fluid" src="./files/assets/images/blogo.png" alt="Theme-Logo" style="max-width: 20% !important;"/>
            </a>
            <br> <br>
        </center>
        <!-- Menu header end -->
        <section class="">
            <!-- Container-fluid starts -->

            <div class="container">

                    <br>

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <a href="">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                            <a href="customer.php"><i class="fa fa-users f-60 text-c-purple"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-purple">
                                        <div class="row align-items-center">
                                            <div class="col-12" style="text-align: center;">
                                                <p class="text-white m-b-0" ><a href="customer.php" style="font-size: 20px;color:#fff">CUSTOMER</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <a href="">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                            <a href="material.php" style="font-size: 20px;color:#fff"><i class="fa fa-calendar-o f-60 text-c-green"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center">
                                            <div class="col-12" style="text-align: center;">
                                                <p class="text-white m-b-0" style="font-size: 20px;"><a href="material.php" style="font-size: 20px;color:#fff">MATERIAL</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <a href="">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                            <a href="bill.php" style="font-size: 20px;color:#fff"><i class="fa fa-file-text f-60 text-c-red"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-red">
                                        <div class="row align-items-center">
                                            <div class="col-12" style="text-align: center;">
                                                <p class="text-white m-b-0" style="font-size: 20px;"><a href="bill.php"style="font-size: 20px;color:#fff">BILLS<a></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <a href="">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                            <a href="challan.php"><i class="fa fa-tasks f-60 text-c-purple" style="color:yellowgreen !important;" ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-purple" style="background:yellowgreen !important;">
                                        <div class="row align-items-center">
                                            <div class="col-12" style="text-align: center;">
                                                <p class="text-white m-b-0" ><a href="challan.php" style="font-size: 20px;color:#fff">CHALLAN</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <a href="">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                            <a href="comingSoon.html" style="font-size: 20px;color:#fff"><i class="fa fa-book f-60 text-c-green"  style="color:darkcyan !important;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-green" style="background:darkcyan !important;">
                                        <div class="row align-items-center">
                                            <div class="col-12" style="text-align: center;">
                                                <p class="text-white m-b-0" style="font-size: 20px;"><a href="comingSoon.html" style="font-size: 20px;color:#fff">KHATA BOOK</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <a href="">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                            <a href="comingSoon.html" style="font-size: 20px;color:#fff"><i class="fa fa-cogs f-60 text-c-red" style="color:slategrey !important;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-red" style="background:slategrey !important;">
                                        <div class="row align-items-center" >
                                            <div class="col-12" style="text-align: center;">
                                                <p class="text-white m-b-0" style="font-size: 20px;"><a href="comingSoon.html"style="font-size: 20px;color:#fff">REPORT<a></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>

                
            <!-- end of container-fluid -->
            </div>
        </section>

        <center style="font-size: large;font-weight: 500;">
            <br>
            Copyright © BillSoft | 2020
        </center>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="./files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="./files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="./files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="./files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="./files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="./files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="./files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="./files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="./files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="./files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="./files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="./files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="./files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="./files/assets/js/common-pages.js"></script>
<script src="./js/sweet.js"></script>

</body>

</html>
