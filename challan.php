<?php
    include_once('./config/config.php');
    $getInvocieNumber = mysqli_query($con,"select distinct challan_id from challan_master order by challan_id desc");
    $row3             = mysqli_fetch_assoc($getInvocieNumber);

    $challan_id        = $row3['challan_id'];
    $challan_id        = $challan_id + 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Generate Invoice</title>
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
        .uptble {
            border: none !important;
        }
        .form-control {
            font-size: 14px;
            border: none;
            color: black;
            padding: 0;
            height: 25px !important;
        }
        .detach{
            border: 1px solid #c4bfbf !important;
            padding: 0 5px 0 5px;
        }
        .fwidth{
            width:100%;
        }
        .ftd{
            width: 30%;
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
                                <span><a href="#"> <i class="fa fa-home"></i> Generate Invoice</a></span>
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
                            
                            <li class="pcoded-hasmenu active1">
                                <a href="challan.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gift "></i><b>U</b></span>
                                    <span class="pcoded-mtext">Generate Challan</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="viewChallan.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gift "></i><b>U</b></span>
                                    <span class="pcoded-mtext">View Challan</span>
                                </a>
                            </li>
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
                                                        <h5>Invoice Generate</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <form method="post" id="ganerateInvoice">
                                                <!-- <div class="row invoice-contact"> -->
                                                    <div class="col-md-12"  >
                                                        <div class="invoice-box row" style="margin-right: -28px; margin-left: -6px">
                                                            <div class="col-sm-12">
                                                                <center>
                                                                    <h4 >Yash Enterprises</h4>
                                                                    <h6 >J-25, M.I.D.C. Gokul Shirgaon Kolhapur, 416234.</h6>
                                                                    <h6 >CNC Sheet Metal Press Shop</h6>
                                                                    <h6 >GSTIN NO:27AIVPB7046C12</h6>
                                                                    <!-- <h6 >WebSite: www.Company.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail: info@Company.co.in</h6> -->
                                                                </center>
                                                                <div style="border-bottom: 1px solid;margin-left: 120px;margin-right: 120px"></div>
                                                                <br>
                                                            </div>
                                                        </div>
        
                                                    </div>
                                                <!-- </div> -->
                                                    <div class="col-md-12" >
                                                    <div class ="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-primary">
                                                                        To,
                                                                        <select class="form-control detach" name="name">
                                                                            <option value="">Select Receiver name</option>
                                                                            <?php 
                                                                                $getCustomerDetails = mysqli_query($con,"select * from customer_master");
                                                                                while($row = mysqli_fetch_assoc($getCustomerDetails))
                                                                                {
                                                                                    ?>
                                                                                        <option value="<?php echo $row['id']?>"><?php echo $row['name'];?></option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group form-primary">
                                                                        Challan ID :
                                                                        <input type="text" name="challanID" value="<?php echo $challan_id?>" readonly class="form-control detach" required>
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group form-primary">
                                                                        Date :
                                                                        <input type="date" name="date" class="form-control detach" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group form-primary">
                                                                    Respected Sir,
                                                                    <textarea class="form-control detach" name="matter" row="5" style="height: 50px !important;"></textarea>
                                                                    <span class="form-bar"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

          
                                                    
                                                        <div class="col-md-12 text-right">
                                                            <button class="btn btn-primary" type="button" id="addRow" style="border-radius: 50px;">+</button>
                                                        </div>
                                              
                                                        <div class="col-md-12">
                                                            <div class="table-responsive " style="overflow:hidden; width= 102"  >
                                                                <div class="table-responsive" style="margin-top: 15px;">
                                                                    <table class="table  invoice-detail-table table-bordered ; invoice-detail-table;    margin-bottom: 5px;" id="myTable">
                                                                        <thead>
                                                                            <tr class="thead-default">
                                                                                <th style="border-color:black;width: 10px;"><h6 style="text-align:center; margin-bottom: 2px;"><b>Sr No</b></h6></th>
                                                                                <th style="border-color:black"><h6 style="text-align:center; margin-bottom: 2px;"><b> Description Of Goods/Services</b></h6></th>
                                                                                <th style="border-color:black"><h6 style="text-align:center; margin-bottom: 2px;"><b>Quantity</b></h6></th>
                                                                                <th style="border-color:black"><h6 style="text-align:center; margin-bottom: 2px;"><b>Rate/Each</b></h6></th>
                                                                                <th style="border-color:black"><h6 style="text-align:center; margin-bottom: 2px;"><b>Amount</b></h6></th> 
                                                                            </tr>   
                                                                        </thead>
                                                                        <tbody>
                                                                            
                                                                          
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="table  invoice-detail-table table-bordered ; invoice-detail-table;    margin-bottom: 5px;" >
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="table_td" style="color:black; border-color:black;width: 58%" colspan="4"> 
                                                                                    Terms Conditions : <br>
                                                                                    <table class="fwidth">
                                                                                        <tr>
                                                                                            <td class="ftd">1) Delivery : - </td>
                                                                                            <td><input type="text" class="fwidth" name="condition1"></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td class="table_td" style="color:black; border-color:black;text-align: left;" colspan="2">Taxable Amount</td>
                                                                                <td class="table_td" style="color:black; border-color:black"><input type="text" name="totalAmount" class="form-control" id="totalAmt"></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="table_td" style="color:black; border-color:black;" colspan="4"> 
                                                                               
                                                                                    <table class="fwidth">
                                                                                        <tr>
                                                                                            <td class="ftd">2) Guranty : - </td>
                                                                                            <td><input type="text" class="fwidth" name="condition2"></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td class="table_td" style="color:black; border-color:black;text-align: left;" colspan="2">SGST 9% Rs.</td>
                                                                                <td class="table_td" style="color:black; border-color:black"><input type="text" name="sgst" class="form-control" id="sgst"></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="table_td" style="color:black; border-color:black;" colspan="4">
                                                                                    <table class="fwidth">
                                                                                        <tr>
                                                                                            <td class="ftd">3) Transport : - </td>
                                                                                            <td><input type="text" class="fwidth" name="condition3"></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td class="table_td" style="color:black; border-color:black;text-align: left;" colspan="2">CGST 9% Rs.</td>
                                                                                <td class="table_td" style="color:black; border-color:black"><input type="text" name="cgst" class="form-control" id="cgst"></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="table_td" style="color:black; border-color:black;" colspan="4">
                                                                                    <table class="fwidth">
                                                                                        <tr>
                                                                                            <td class="ftd">4) Payment : - </td>
                                                                                            <td><input type="text" class="fwidth" name="condition4"></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td class="table_td" style="color:black; border-color:black;text-align: left;" colspan="2">IGST 18% Rs.</td>
                                                                                <td class="table_td" style="color:black; border-color:black"><input type="text" name="igst" class="form-control" id="igst"></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="table_td" style="color:black; border-color:black;" colspan="4">
                                                                                    <table class="fwidth">
                                                                                        <tr>
                                                                                            <td class="ftd">5) Tax : - </td>
                                                                                            <td><input type="text" class="fwidth" name="condition5"></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td class="table_td" style="color:black; border-color:black;text-align: left;" colspan="2">Grand Total: </td>
                                                                                <td class="table_td" style="color:black; border-color:black"><input type="text" name="GrandTotal" class="form-control" id="GrandTotal"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                      
                                                        <div class="col-md-12">
                                                            <b style="font-weight: 900;">Certified that the perticulars given above are true and correct.</b>
                                                        </div>
                                                        
                                                            <div class= "col-md-12">
                                                            <div class="invoice-box row">
                                                                    <div class="col-sm-4">
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <h5 style="text-align:center;"></h5>
                                                                        <h6>E.N.O.E. </h6>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-sm-4" >
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <h5 style="text-align:center;"></h5>
                                                                        <h5 style="text-align:center; margin-top: 3px;"></h5>
                                                                        <br>
                                                                    </div>
        
                                                                    <div class="col-sm-4" >
                                                                        <h4 style="text-align:center;"> </h4>
                                                                        <br>
                                                                        <br>
                                                                        <!-- <br> -->
                                                                        <h5 style="text-align:center;">Yash Enterprises</h5>
                                                                        <h5 style="text-align:center;margin-top: 11px;">AUTHORISED SIGNATORY<h5>
                                                                        <br>
                                                                    </div>
        
                                                                    </div>
                                                                </div>
                                                                <div class= "col-md-12">
                                                                    <h6 style="text-align:center; font-size: 10px;">Subject to Kolhapur Jurisdiction</h6>                                                    
                                                                </div>
                    
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <button type="submit" class="btn btn-primary">Generate Challan</button>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row"></div>
                                                            </div>
                                                        </div>
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
        var count = 1;
        //submit Data
        $('#addCustomer').submit(function (e) {
            debugger
            var data;
            data = new FormData();
            e.preventDefault();
            $.ajax({
                url: 'ajax/saveCustomerData.php',
                dataType: "json",
                data : $('#addCustomer').serialize(),
                type: 'POST',
                success : function(result)
                {
                    if(result.result == 'success')
                    {
                        swal("Save!", "Customer Add Successfully", "success");
                        setInterval(function(){ window.location.href = "viewCustomer.php";
                        }, 3000);
                    }
                }
            })
        });

        //Get Reciver Details
        function getReceiverDetails(ele)
        {
            $.ajax({
                url  : 'ajax/getRecevierDetails.php',
                type : 'post',
                dataType : 'json',
                data : { id : ele.value},
                success : function(result)
                {
                    $('#address1').text(result.address);
                    $('#gst1').text(result.GST);
                }
            })
        }

        //Add Row to Table
        $('#addRow').click(function(){
            debugger
        $('#myTable tr:last').after('<tr><td class="table_td" style="color:black; border-color:black;text-align: center;">'+count+'</td><td class="table_td" style="color:black; border-color:black;text-align: left;"><select class="form-control detach" name="material[]" id="material_'+count+'" onChange="getMaterialDetials(this,'+count+')"><option value="">Select Material Name</option><?php $getMaterialDetails=mysqli_query($con,"select * from material_master");while($row1 = mysqli_fetch_assoc($getMaterialDetails)){?><option value="<?php echo $row1['id']?>"><?php echo $row1['name']?></option><?php }?></select><span><textarea class="from-control" name="materialNote[]" style="width: 100%;"></textarea></span></td><td class="table_td" style="color:black; border-color:black"><input type="text" name="qty[]" id="qty_'+count+'" class="form-control detach" onkeyup="checkAmt1('+count+')"></td><td class="table_td" style="color:black; border-color:black;text-align:right"><input type="text" name="rate[]" id="rate_'+count+'" class="form-control detach" onkeyup="checkAmt2('+count+')"></td><td class="table_td" style="color:black; border-color:black;text-align:right"><input type="text" name="amt[]" id="Amt_'+count+'" class="form-control amount detach"></td></tr>');
            count++;

        })

        function getMaterialDetials(ele,count1)
        {
            $.ajax({
                url  : 'ajax/getMaterialDetails.php',
                type : 'post',
                dataType : 'json',
                data : {id : ele.value},
                success : function(result)
                {
                    debugger
                    $('#hsn_'+count1).text(result.hsn);
                    $('#unit_'+count1).text(result.unit);
                }

            })
        }

        function checkAmt1(ele)
        {
            var rate = $('#rate_'+ele).val();
            var qty  = $('#qty_'+ele).val();
            var amt = '';
            if(rate != '')
            {
                amt = qty * rate;
            }
            $('#Amt_'+ele).val(amt);
            total();
            
        }
        function checkAmt2(ele)
        {
            var rate = $('#rate_'+ele).val();
            var qty  = $('#qty_'+ele).val();
            var amt = '';
            if(qty != '')
            {
                amt = qty * rate;
            }
            $('#Amt_'+ele).val(amt);
            total();
        }


        function total()
        {
            var totalAmount = 0;
            var sgstAmt     = 0;
            var cgstAmt     = 0;
            var igstAmt     = 0;
            var GrandTotal  = 0;
            $(".amount").each(function() {
                totalAmount = Number(totalAmount) + Number($(this).val());
                $('#totalAmt').val(totalAmount);
                sgstAmt = (Number(totalAmount)*9)/100;
                cgstAmt = sgstAmt;
                igstAmt = Number(sgstAmt)+Number(cgstAmt);
                $('#sgst').val(sgstAmt);
                $('#cgst').val(cgstAmt);
                $('#igst').val(igstAmt);
                GrandTotal = Number(igstAmt) + Number(totalAmount);
                $('#GrandTotal').val(GrandTotal);

            });
        }


        //submit Data
        $('#ganerateInvoice').submit(function (e) {
            debugger
            var data;
            data = new FormData();
            e.preventDefault();
            $.ajax({
                url: 'ajax/geneateChallan.php',
                dataType: "json",
                data : $('#ganerateInvoice').serialize(),
                type: 'POST',
                success : function(result)
                {
                    debugger
                    if(result.result == 'success')
                    {
                        swal("Save!", "Challan Generate Successfully", "success");
                        setInterval(function(){ window.location.href = "viewChallan.php";
                        }, 3000);
                    }
                }
            })
        });

        // $('select').select2({
        //     placeholder: 'Select Unit',
        //     allowClear: true
        // });
</script>
</body>

</html>
