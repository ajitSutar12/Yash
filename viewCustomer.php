<?php
    include_once('./config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Customer</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="./files/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="./files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./files/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="./files/assets/css/pcoded-horizontal.min.css">
    <!-- Data Table Css -->
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="./files/assets/css/common.css">
    <style>
        .dataTables_length{
            display : none;
        }
    </style>
    <!-- Style.css -->
</head>
<!-- Menu horizontal static layout -->

<body>
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

    <div id="pcoded" class="pcoded">
        
        <div class="pcoded-container">
            <nav class="navbar header-navbar pcoded-header" header-theme="theme1">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="dashboard.php">
                          <img class="img-fluid" src="./files/assets/images/blogo.png" alt="Theme-Logo" />
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                            <li style="margin-top:3px;">
                                <span><a href="#"> <i class="fa fa-home"></i> View Customer</a></span>
                            </li> 
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="./files/assets/images/user.png" class="img-radius" alt="User-Profile-Image">
                                    <span>Hi User</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                   
                                    <li class="waves-effect waves-light">
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                   
                                    <li class="waves-effect waves-light">
                                        <a href="logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                  </div>
              </div>
            </nav>


            <div class="pcoded-main-container">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="customer.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                    <span class="pcoded-mtext">Add Customer</span>
                                    <!-- <span class="pcoded-mcaret"></span> -->
                                </a>
                               
                            </li>
                            <li class="pcoded-hasmenu active1">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gift "></i><b>U</b></span>
                                    <span class="pcoded-mtext">View Customer</span>
                                    <!-- <span class="pcoded-mcaret"></span>     -->
                                </a>
                            </li>
                            <!-- <li class="pcoded-hasmenu dmenu">
                                <a href="editcustomer.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                    <span class="pcoded-mtext">Edit Customer</span>
                                </a>
                            </li> -->
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-wrapper">
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body m-t-40">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Zero config.table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Customer Details</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable" class="table table-striped table-bordered nowrap" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Action</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobile</th>
                                                                        <th>Phone</th>
                                                                        <th>Address</th>
                                                                        <th>GSTIN</th>
                                                                        <th>PAN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="custData">
                                                                    
                                                                        
                                                                </tbody>
                                                               
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zero config.table end -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- Chart js -->
<script type="text/javascript" src="./files/bower_components/chart.js/js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="./files/assets/pages/widget/amchart/gauge.js"></script>
<script src="./files/assets/pages/widget/amchart/serial.js"></script>
<script src="./files/assets/pages/widget/amchart/light.js"></script>
<script src="./files/assets/pages/widget/amchart/pie.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- Google map js -->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="./files/assets/pages/google-maps/gmaps.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="./files/assets/pages/dashboard/custom-dashboard.js"></script>
<script src="./files/assets/js/pcoded.min.js"></script>
<script src="./files/assets/js/vertical/horizontal-layout.min.js"></script>
<script src="./files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="./files/assets/js/script.js"></script>
<!-- data-table js -->
<script src="./files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="./files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="./files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="./files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="./files/assets/pages/data-table/js/vfs_fonts.js"></script>
<!-- Data table plugin-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>

<script src="./files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="./js/sweet.js"></script>
<script>

    $(document).ready(function(){
        $.ajax({
            url   : 'ajax/customerData.php',
            type  : 'post',
            success : function(result)
            {
                $('#custData').html(result);
            }
        })
    })
    function deleteCustomer(ele)
    {
        swal({
                title: "Are You Sure ??",
                text: "Customer Delete permentaly", 
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((isConfirm)=>{
                if (isConfirm) {
                    $.ajax({
                        url  : 'ajax/deleteCustomer.php',
                        type : 'post',
                        data : { id : ele},
                        dataType  : 'json',
                        success : function(result)
                        {
                            debugger
                            if(result.result == 'success')
                            {
                                swal("Save!", "Customer Deleted Successfully", "success");
                                $.ajax({
                                    url   : 'ajax/customerData.php',
                                    type  : 'post',
                                    success : function(result)
                                    {
                                        $('#custData').html(result);
                                    }
                                })
                            }
                            else
                            {
                                swal("Failed!", "Something Wrong", "error");
                            }
                        }
                    })
                }
                else
                {
                    swal(":-)", "Customer Data Safe", "info");
                }
            })
    }

</script>
</body>

</html>
