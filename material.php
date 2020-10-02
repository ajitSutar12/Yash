<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Material</title>
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
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="./files/assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="./js/select2/dist/css/select2.min.css">

    <style>
        .select2-container--default .select2-selection--single {
            background-color : #fff !important ;
            border: 0px !important ;
            border-radius: 0px !important;
        }
    </style>

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
                                <span><a href="#"> <i class="fa fa-home"></i> Add Material</a></span>
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
                            <li class="pcoded-hasmenu active1" >
                                <a href="material.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                    <span class="pcoded-mtext">Add Material</span>
                                    <!-- <span class="pcoded-mcaret"></span> -->
                                </a>
                               
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="viewMaterial.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gift "></i><b>U</b></span>
                                    <span class="pcoded-mtext">View Material</span>
                                    <!-- <span class="pcoded-mcaret"></span>     -->
                                </a>
                            </li>
                            <!-- <li class="pcoded-hasmenu dmenu">
                                <a href="" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                    <span class="pcoded-mtext">Edit Material</span>
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Material Details</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" method="post" id="addMaterial">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group form-primary">
                                                                        Material Name
                                                                        <input type="text" name="name" class="form-control" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <!-- <div class="form-group"> -->
                                                                        Select Unit
                                                                        <select name="unit" id="unit">
                                                                            <option value="">Select Unit</option>
                                                                            <option value="NOS">NOS</option>
                                                                            <option value="KG">KG</option>
                                                                            <option value="METERS">METERS</option>
                                                                            <option value="FEET">FEET</option>
                                                                            <option value="SET">SET</option>
                                                                        </select>
                                                                        <!-- <span class="form-bar"></span>
                                                                        <label class="float-label">Unit</label> -->
                                                                    <!-- </div> -->
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group form-primary">
                                                                        HSN Code
                                                                        <input type="text" name="hsn" class="form-control" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group form-primary">
                                                                        SGST
                                                                        <input type="number" name="sgst" class="form-control" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group form-primary">
                                                                        CGST
                                                                        <input type="number" name="cgst" class="form-control" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group form-primary">
                                                                        IGST
                                                                        <input type="number" name="igst" class="form-control">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group form-primary">
                                                                        Weight
                                                                        <input type="number" name="weight" class="form-control" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                                                                </div>
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
<script src="./js/sweet.js"></script>
<script src="./js/select2/dist/js/select2.min.js"></script>

<script>    
        //submit Data
        $('#addMaterial').submit(function (e) {
            debugger
            var data;
            data = new FormData();
            e.preventDefault();
            $.ajax({
                url: 'ajax/saveMaterialData.php',
                dataType: "json",
                data : $('#addMaterial').serialize(),
                type: 'POST',
                success : function(result)
                {
                    if(result.result == 'success')
                    {
                        swal("Save!", "Material Add Successfully", "success");
                        setInterval(function(){ window.location.href = "viewMaterial.php";
                        }, 3000);
                    }
                }
            })
        });
        $('select').select2({
            placeholder: 'Select Unit',
            allowClear: true
        });
</script>
</body>

</html>
