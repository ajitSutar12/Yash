<!-- Author : Ajit Sutar, Digvijay Jadhav
Version     : 1
Source      :
Start Date  : 
Last Updated date   : 09-11-2019 -->

<?php

//db connection file
   include_once('../database/db_connection.php');
   $userName = $_SESSION['shortName'];
   $empid    = $_SESSION['employee_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADD MATERIAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../files/bower_components/select2/css/select2.min.css" />
    <link rel="stylesheet" href="../css/excel-bootstrap-table-filter-style.css" />
    <link rel="stylesheet" type="text/css" href="../files/assets/css/common.css">
    <style>
          @font-face {
        font-family: 'maven-pro-medium';
        src: url(../files/assets/fonts/Maven_Pro/MavenPro-Medium.ttf) format("opentype");
        }

        * {
            font-family: 'maven-pro-medium';
        }
    .header-navbar .navbar-wrapper .navbar-container .nav-left a, .header-navbar .navbar-wrapper .navbar-container .nav-right a {
    padding: 0 0.0rem !important;
}

    .md-tabs .nav-item.open .nav-link, .md-tabs .nav-item.open .nav-link:focus, .md-tabs .nav-item.open .nav-link:hover, .md-tabs .nav-link.active, .md-tabs .nav-link.active:focus, .md-tabs .nav-link.active:hover {
        color: #e16a4a;
    }
    .nav-tabs .slide {
        background: #e16a4a;
    }
    table.dataTable.display tbody tr.odd, table.dataTable.stripe tbody tr.odd {
        background-color: #f0f5f7;
    }
    .width-200{
        width:200px;
    }
    .width-150{
        width:150px;
    }
    .text-wrap{
        white-space:normal;
    }
    .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  /* z-index: 9999999; */
  top: 0;
  right: 0;
  background-color:#eff5f7;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

  box-shadow: rgb(170, 170, 170) -10px 0px 17px -6.5px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* .sidenav a:hover {
  color: #f1f1f1;
} */

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-right .5s;
  padding: 16px;
}
#main {
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:-5px;
	background-color:#ff630d;
	color:#FFF;
    /* border-radius: 2em / 10em; */
	text-align:center;
	box-shadow: 2px 2px 3px #999;
    border-top-left-radius: 100px;
    border-bottom-left-radius: 100px;
}
#main {
    margin-bottom: 24% !important;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.mystyle {
  width: 100%;
  padding: 25px;
  background-color: coral;
  color: white;
  font-size: 25px;
}

.select{
            border: 1px solid #cccccc !important;
            height: 35px !important;
        }

        .pcoded .pcoded-header[header-theme="theme4"]{
            background: #ff630d !important;
        }

        .pcoded .pcoded-navbar[active-item-theme="theme4"] .pcoded-item > li.active > a, .pcoded .pcoded-navbar[active-item-theme="theme4"] .pcoded-item > li:hover > a {
            background: #ff630d !important;
        }

        .btn-primary, .sweet-alert button.confirm, .wizard > .actions a {
            background: #ff630d !important;
            border-color: #ff630d !important;
        }

        .card-header{
            margin-bottom: 0px !important;
            padding-bottom: 0px !important;
        }

        .page-header{
            height: 103px !important;
        }

        .select2-container--open .select2-dropdown--below{
                margin-top:10px
            }
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                color: #fff;
            }

            
            .select2-container--default .select2-selection--single .select2-selection__rendered {
            background-color: #fff
            }
            .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #1f1c1c;
            }

            .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #e16a4a;
            }

             /* add css for sarchable dropdown */
             .select2-container--default .select2-selection--single .select2-selection__rendered{
                padding:0px; 
            }

            .select2-container .select2-selection--single .select2-selection__rendered {
                display: initial;
            }

            .select2-container .select2-selection--single {
                height: 34px;
                padding: 2px;
                margin-bottom: 2px;
            }
  
            /* .table stripe row-border order-column dataTable no-footer{
                width:0px !important;
            } */

         
            .btn-primary, .sweet-alert button.confirm, .wizard > .actions a {
            background: #f3f3f300 !important;
            border-color: #f3f3f300 !important;
        }
            .main-body .page-wrapper {
                    padding: 0.5rem !important;
                    -webkit-transition: all ease-in 0.3s;
                    transition: all ease-in 0.3s;
                }
                .card .card-header {
                    background-color: transparent;
                    border-bottom: none;
                    padding: 0px !important;
                    position: relative;
                    -webkit-box-shadow: 0px 1px 20px 0px rgba(69, 90, 100, 0.08);
                    box-shadow: 0px 1px 20px 0px rgba(69, 90, 100, 0.08);
                }
                .card .card-header h5 {
                    margin-bottom: 0px;
                    color: #37474f;
                    font-size: 15px;
                    font-weight: 500;
                    display: inline-block;
                    margin-right: 10px;
                    margin-top: 12px;
                    margin-left: 19px !important;
                    margin-bottom: 14px !important;
                    line-height: 1.4;
                    position: relative;
                }
                .card .card-block {
                        padding-bottom: 0px !important;
                        margin-bottom: 11px;
                    }
                .select2-container .select2-selection--single {
                    height: 25px !important;
                    padding: 0px !important;
                    margin: 0px !important;
                }
                .form-material textarea {
                        height: 45px !important;
                    }
                    .card {
                    box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.75);
                }
                .dataTable.table td, .dataTable.table th {
                    /* padding: 6px++ */

                }
                .table-info, .table-info>td, .table-info>th {
                    background-color: #ffffff;
                }
                .table td, .table th {
                    padding: 0.1rem 0.75rem !important;
                }
                .view {
                    margin: auto;
                    width: 100%;
                }
                table
                {
                    width :100% !important;
                }

                .wrapper {
                    position: relative;
                    overflow: auto;
                    border: 1px solid black;
                    white-space: nowrap;
                    max-height:510px;
                   
                }

                .sticky-col {
                    position: sticky;
                    position: -webkit-sticky;    
                    background-color: white;
                }
                
                .first-col {
                    width: 100px;
                    min-width: auto;
                    max-width: auto;
                    left: 0px;    
                }

                .second-col {
                    width: 150px;
                    min-width: 150px;
                    max-width: 150px;
                    left: 100px;    
                }
                .dropdown-filter-dropdown {
                    position: initial !important;
                    display: inline-block;
                }
                
                .dropdown-filter-content {
                    display: none;
                    position: fixed !important;
                    top: 20% !important;
                    left: 30% !important;
                    background-color: #f9f9f9;
                    min-width: 100px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                    padding-bottom: 5px;
                    padding-top: 5px;
                    margin-left: 10% !important;
                    /* margin: inherit; */
                    margin-right: 50% !important;
                    padding-right: 5px;
                    padding-left: 5px;
                }

                /* table head scroll time fixed */
                thead th { position: sticky; top: 0; }
                
                .loader {
                    border: 16px solid #f3f3f3;
                    border-radius: 50%;
                    border-top: 16px solid #3498db;
                    width: 120px;
                    height: 120px;
                    position: fixed;
                    z-index : 999;
                    top: 250px;
                    /* -webkit-animation: spin 2s linear infinite; Safari */
                    animation: spin 2s linear infinite;
                    }

                    /* Safari
                    @-webkit-keyframes spin {
                    0% { -webkit-transform: rotate(0deg); }
                    100% { -webkit-transform: rotate(360deg); }
                    } */

                    @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                    }
                    .btn_search:after {
                    content: "Filter";
                    margin-right: 18px !important;
                   
                 }
                    .btn_search_cancel:after{
                        content :"Cancel";
                    }
                    table tr {
                        padding-bottom: 0px !important;
                    }
                    label {
                        display: none !important;
                        margin-bottom: .5rem;
                    }
                    .customFilter
                    {
                    position: fixed !important;
                    top: 23% !important;
                    left: 30% !important;
                    background-color: #f9f9f9;
                    min-width: 100px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                    padding-bottom: 5px;
                    padding-top: 5px;
                    margin-left: 10% !important;
                    /* margin: inherit; */
                    margin-right: 50% !important;
                    padding-right: 5px;
                    padding-left: 5px;
                    }
                    .ellipsis
                    {
                        display:none;
                    }
                    .show {
                        -webkit-box-shadow: 0px 4px 24px 0px rgba(0,0,0,0.75);
                        -moz-box-shadow: 0px 4px 24px 0px rgba(0,0,0,0.75);
                        box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.75) !important;
                    }

                    td.details-control {
                        background: url('../img/add3.png') no-repeat center center;
                        cursor: pointer;

                    }
                    tr.shown td.details-control {
                        background: url('../img/up.png') no-repeat center center;
                    }
                    .box-border {
                        border-radius: 10px;
                        border: 1px solid black;
                    }
                    .loading
                    {
                        position: fixed;
                        z-index: 9999;
                        top: 35%;
                        left: 47%;
                    }
                    .lossConnection
                    {
                        position :fixed;
                        z-index:999;
                        top:20%;
                        left:30%;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    }

                    .table-bordered th {
                        border: 1px solid black !important;
                    }

                    .table-bordered td {
                        border: 1px solid #74797d !important;
                    }

                    .table thead th {
                        background: #fd8e51 !important;
                        color: black !important;
                    }

                    .table td {
                        color: black !important;
                        padding: 0px 8px 0px 8px !important;
                    }

                    .table{
                        margin: 0 !important;
                    }

                    .ti-filter{
                        margin-top: 5px;
                        color: #000f7d;
                    } 

                    .dataTable.table td, .dataTable.table th {
                        padding-top: 0px !important;
                        padding-bottom: 0px !important;
                    }

                    .highlight_row{
                        background-color:#fd975f66; 
                    }

                    .form-group {
                        margin-bottom: 0px !important;
                    }

                    .sticky-col {
                    position: sticky;
                    position: -webkit-sticky;    
                    background-color: white;
                }
                
                .first-col {
                    width: 100px;
                    min-width: auto;
                    max-width: auto;
                    left: 0px;  
                    z-index: 1000 !important;  
                }

                .form-control {
                    height: 25px !important;  
                    padding: 0 !important;  
                }

                .btnlf {
                    color: #000 !important;
                    border: 1px solid #979797;
                    padding: 5px 13px 5px 13px;
                    font-size: small;
                    margin: 1px;
                }

                #stockview_paginate{
                    padding: 5px !important;
                }
                #stockview_info{
                    padding: 10px !important;
                }

                .modal-dialog {
                    max-width: 75% !important;
                }
    </style>
</head>

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
    <div id = "divLoader" style = "display : none"  class="loader"></div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header" style="background:white">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" style="font-size: large;margin-left: 10px;">
                        <img src="../img/logo.png" class="img-responsive" style="width:160px;">
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                  <i class="ti-more"></i>
                </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                            <button class="btn" class="btn btn-success" id="header" style="background:none;color:white;margin-top:5px;"><i class="ti-menu"></i></button>
                            </li>
                            <!-- <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <h5 style="margin-top:15px;color:black;">Add Material</h5>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li style="margin-top:3px;">
                                    <span><a href="../dashboard/dashboard.php" style="color:black"> <i class="fa fa-home"></i>/</a></span>
                                    <span><a href="#" style="color:black">Store/Store/Add Material</a></span>
                            </li> 
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="../files/assets/images/man.png" class="img-radius" alt="User-Profile-Image">
                                    <span style="color:black"><?php echo $userName?></span>
                                     <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="../index.php">
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
                <div class="pcoded-wrapper">
                <nav class="" id="sideNavebar">

                </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <!-- <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Project</h5>
                                            <p class="m-b-0">Project List</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../dashboard/dashboard.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Project List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-block">
                                                        <div  id="pms">
                                                            <ul class="nav nav-tabs  tabs" id="manf_tab" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-toggle="tab"  href="#addMaterial" role="tab">Add Material</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#materialList" role="tab">View Material</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#addCategory" role="tab">Add/Edit Category</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#PatterTab" role="tab">Material Pattern</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#unmatch" role="tab">Unmatch Material</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#unassign" role="tab">Unassigned Material</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#initial" role="tab">Add Material Initial</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div  id="addMaterial" class="tab-pane fade show active">
                                                                    <form method="post" id="saveData">
                                                                        <br>
                                                                        <div class="row">

                                                                            <div class="col-md-4">
                                                                                <div class="form-group form-default form-static-label">
                                                                                    <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Material Type</label>
                                                                                    <span class="form-bar"></span>
                                                                                    <select name="main_material_id" id="main_material_id" class="js-example-basic-single col-md-12 cities" onchange="getComponent(this.value);" required>
                                                                                            <option value="" selected disabled>Select Material type</option>
                                                                                            <?php
                                                                                                $query = mysqli_query($con,"SELECT DISTINCT mm.* FROM `material_master_v` as m INNER JOIN main_material_type_master as mm on m.main_material_type_id = mm.main_material_type_id ORDER BY `mm`.`main_material_name` ASC");
                                                                                                while($row = mysqli_fetch_assoc($query))
                                                                                                {
                                                                                                    $mainID = $row['main_material_type_id'];
                                                                                                    ?>
                                                                                                    <option value="<?php echo $row['main_material_type_id']?>"><?php echo $row['main_material_name']?></option>
                                                                                            <?php        
                                                                                                }
                                                                                            ?>
                                                                                    </select>
                                                                            </div>


                                                                            </div>
                                                                            <div class="col-md-4">
                                                                            <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Material Component</label>
                                                                                    <span class="form-bar"></span>
                                                                                <select name="matarial_initial" id="matarial_initial" class="js-example-basic-single col-md-12 cities" onChange="getBillingCity1(this.value);getBillingCity(this.value);" required>
                                                                                        
                                                                                        
                                                                                </select>               
                                                                            </div>
                                                                            <div class="col-md-4" id="showHideDropdow"  style="display:none">
                                                                            
                                                                                <select name="material_subtype" id="description" class="js-example-basic-single col-md-12 cities" onchange="getMatrialdatainfo(this.value);getSubItemMaterialType(this.value);"  required>
                                                                                    <option value="" selected disabled>Select Material Component</option>
                                                                                        
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top:10px;margin-bottom:10px;">
                                                                            <div class="col-md-8">
                                                                                <div id="parameter">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div id="makeData" style="display:none">
                                                                                    <select name="makeID" id="makeId" class="js-example-basic-single col-md-12 cities">
                                                                                        <option value="">Select Make Name</option>
                                                                                        <?php
                                                                                            $getMakeDetails = mysqli_query($con,"select * from material_make_master");
                                                                                            while($row = mysqli_fetch_assoc($getMakeDetails))
                                                                                            {
                                                                                                ?>
                                                                                                    <option value="<?php echo $row['id']?>"><?php echo $row['make']?></option>
                                                                                                <?php
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <input type="text"  id="material_description" name="material_description" style="width: 282px;" placeholder="Material Description" readonly>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top:15px">
                                                                            <div class="col-md-2">
                                                                            Is Weight in KG required
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                            <input type='checkbox' class="form-control" id="isWeight" name="isWeight" style="margin-top: 5px;margin-left:-60px">
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="text" style="margin-left:-100px;height: 27px;" name="weight_value" id="weight_value" class="form-control">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                            <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Stock Unit</label>
                                                                                    <span class="form-bar"></span>
                                                                                <select name="stockUnit" id="stockUnit" class="js-example-basic-single col-md-12 cities"  required>
                                                                                        <option value="" selected disabled>Select Stock Unit</option>
                                                                                        <?php
                                                                                            $query = mysqli_query($con,"SELECT id,Unit FROM `unit_master`");
                                                                                            while($row = mysqli_fetch_assoc($query))
                                                                                            {
                                                                                                $mainID = $row['main_material_type_id'];
                                                                                                ?>
                                                                                                <option value="<?php echo $row['id']?>"><?php echo $row['Unit']?></option>
                                                                                        <?php        
                                                                                            }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                            <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Purchase Unit</label>
                                                                                    <span class="form-bar"></span>
                                                                                <select name="purchaseUnit" id="purchaseUnit" class="js-example-basic-single col-md-12 cities" required>
                                                                                        <option value="" selected disabled>Select Purchase Unit</option>
                                                                                        <?php
                                                                                            $query = mysqli_query($con,"SELECT id,Unit FROM `unit_master`");
                                                                                            while($row = mysqli_fetch_assoc($query))
                                                                                            {
                                                                                                $mainID = $row['main_material_type_id'];
                                                                                                ?>
                                                                                                <option value="<?php echo $row['id']?>"><?php echo $row['Unit']?></option>
                                                                                        <?php        
                                                                                            }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Material Category</label>
                                                                                <span class="form-bar"></span>
                                                                                <select name="Materialcat" id="Materialcat" class="js-example-basic-single col-md-12 cities" required>
                                                                                        <option value="" selected disabled>Select Material category</option>
                                                                                        <?php
                                                                                            $query = mysqli_query($con,"SELECT id,category FROM `material_category_master`");
                                                                                            while($row = mysqli_fetch_assoc($query))
                                                                                            {
                                                                                                // $mainID = $row['main_material_type_id'];
                                                                                                ?>
                                                                                                <option value="<?php echo $row['id']?>"><?php echo $row['category']?></option>
                                                                                        <?php        
                                                                                            }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row" style="margin-top:15px">
                                                                            <div class="col-md-6">
                                                                            <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Supplier</label>
                                                                                <span class="form-bar"></span>
                                                                                <select name="supplier" id="supplier" class="js-example-basic-single col-md-12 cities" required>
                                                                                        <option value="" selected disabled>Select Supplier</option>
                                                                                        <?php
                                                                                            $query = mysqli_query($con,"SELECT CUSTOMER_ID,CUSTOMER_NAME FROM `customer_master` where COMPANY_CAT_ID =3");
                                                                                            while($row = mysqli_fetch_assoc($query))
                                                                                            {
                                                                                                $mainID = $row['main_material_type_id'];
                                                                                                ?>
                                                                                                <option value="<?php echo $row['CUSTOMER_ID']?>"><?php echo $row['CUSTOMER_NAME']?></option>
                                                                                        <?php        
                                                                                            }
                                                                                        ?>
                                                                                </select>            
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                            <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Vendor</label>
                                                                                    <span class="form-bar"></span>
                                                                                <select name="vendor" id="vendor" class="js-example-basic-single col-md-12 cities" required>
                                                                                        <option value="" selected disabled>Select Vendor</option>
                                                                                        <?php
                                                                                            $query = mysqli_query($con,"SELECT CUSTOMER_ID,CUSTOMER_NAME FROM `customer_master` where COMPANY_CAT_ID =2");
                                                                                            while($row = mysqli_fetch_assoc($query))
                                                                                            {
                                                                                                $mainID = $row['main_material_type_id'];
                                                                                                ?>
                                                                                                <option value="<?php echo $row['CUSTOMER_ID']?>"><?php echo $row['CUSTOMER_NAME']?></option>
                                                                                        <?php        
                                                                                            }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top:10px">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                            Do you want to maintain a stock
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                    <input type="radio" name="stockMaintain" id ="stockMaintain" value="Yes" onclick="checkRadio(this.value)"> Yes
                                                                                    <input type="radio" name="stockMaintain" id ="stockMaintain" value="No" onclick="checkRadio(this.value)"> No<br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top:10px;display:none;" id="ShowRequiredMaterial">
                                                                            <div class="col-md-12">
                                                                                <div class="box-border" style="padding:15px;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3">
                                                                                            Minimum Stock Quantity :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" name="min_stock" id="min_stock">
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            Maximum Stock Quantity :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" name="max_stock" id="max_stock">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row"style="margin-top:10px">
                                                                                        <div class="col-md-3">
                                                                                            Reorder Stock Quantity :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" name="reorder_stock" id='reorder_stock'>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            Min Order Stock Quantity :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" name="min_ord_stock">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row"style="margin-top:10px">
                                                                                        <div class="col-md-3">
                                                                                            Rate :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" name="rate" id="rate">
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            Lead Time :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" name="lead_time" id="lead_time">
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    <div class="row"style="margin-top:10px">
                                                                                        <div class="col-md-3">
                                                                                            HSN No. :
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                        <select name="hsn" id="hsn" class="js-example-basic-single col-md-12 cities" required>
                                                                                            <option value="" selected disabled>Select hsn</option>
                                                                                            <?php
                                                                                                $query = mysqli_query($con,"SELECT id,hsn FROM `materialinitial_hsn_gst_master`");
                                                                                                while($row = mysqli_fetch_assoc($query))
                                                                                                {
                                                                                                    $mainID = $row['id'];
                                                                                                ?>
                                                                                                    <option value="<?php echo $row['id']?>"><?php echo $row['hsn']?></option>
                                                                                        <?php        
                                                                                            }
                                                                                        ?>
                                                                                        </select>
                                                                                        </div>      
                                                                                        <div class="col-md-3">
                                                                                            GST :
                                                                                        </div>  
                                                                                        <div class="col-md-3">
                                                                                        <select name="gst" id="gst" class="js-example-basic-single col-md-12 cities" required>
                                                                                            <option value="">Select GST </option>
                                                                                            <option value="9">9</option>
                                                                                            <option value="12">12</option>
                                                                                            <option value="18">18</option>
                                                                                            <option value="28">28</option>
                                                                                        </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top:15px" >
                                                                            <div class="col-md-12">
                                                                                <center><button type="button"class="btn btn-info" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;" onclick="submitData()">Submit</button></center>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div id="unmatch" class="tab-pane fade show">
                                                                    <div class="row">
                                                                        <div class="col-sm-12" >
                                                                            <div style="max-height: 450px;overflow: auto;">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <th>Material Name</th>
                                                                                        <th>Action</th>
                                                                                    </thead>
                                                                                    <tbody id="unmatchMaterial">
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="initial" class="tab-pane fade show">
                                                                    <br>
                                                                    <from method="post" >
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group form-default form-static-label">
                                                                                    <label style="display: block !important; margin: 0px 0px 0px 0px;">Select Material Type</label>
                                                                                    <span class="form-bar"></span>
                                                                                    <select name="main_material_id" id="main_material_id" class="js-example-basic-single col-md-12 cities" onchange="getComponent(this.value);" required>
                                                                                            <option value="" selected disabled>Select Material type</option>
                                                                                            <?php
                                                                                                $query = mysqli_query($con,"SELECT DISTINCT mm.* FROM `material_master_v` as m INNER JOIN main_material_type_master as mm on m.main_material_type_id = mm.main_material_type_id ORDER BY `mm`.`main_material_name` ASC");
                                                                                                while($row = mysqli_fetch_assoc($query))
                                                                                                {
                                                                                                    $mainID = $row['main_material_type_id'];
                                                                                                    ?>
                                                                                                    <option value="<?php echo $row['main_material_type_id']?>"><?php echo $row['main_material_name']?></option>
                                                                                            <?php        
                                                                                                }
                                                                                            ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-sm-7">
                                                                                <div class="form-group form-primary">
                                                                                    <label style="display: block !important; margin: 0px 0px 0px 0px;">Add Material Initial</label>
                                                                                    <span class="form-bar"></span>
                                                                                    <textarea class="form-control" name="" rows="2" cols="10" id=""></textarea>
                                                                                </div>    
                                                                            </div>
                                                                            <div class="col-sm-1">
                                                                                <button class="btn btn-info" name="EdiSave1" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;">Add</button>
                                                                            </div>
                                                                        </div>
                                                                    </from>
                                                                </div>
                                                                <div id="materialList" class="tab-pane fade show">
                                                                    <div class="view">
                                                                        <div class="wrapper">
                                                                            <table class="table table-bordered" id="stockview">
                                                                                <thead class="showHead">
                                                                                    <tr>
                                                                                    <th id ="A1"style="background: #bddff7;">Material Description<i id="fileNo" class="ti-filter" onclick="fileno()"></i></th>
                                                                                    <th id ="A6"style="background: #bddff7;">Material Initial<i id="initail" class="ti-filter" onclick="initail()"></i></th>
                                                                                    <th id ="A2" style="background: #bddff7;">Material Category<i id="category" class="ti-filter" onclick="category()"></i></th>

                                                                                    <th id ="A2" style="background: #bddff7;">Material Type<i id="category" class="ti-filter" onclick="category()"></i></th>
                                                                                    <th id ="A2" style="background: #bddff7;">RFD<i id="category" class="ti-filter" onclick="RFD()"></i></th>
                                                                                    <th id ="A3" style="background: #bddff7;">Make<i id="make" class="ti-filter" onclick="make()"></i></th>
                                                                                    <th id ="A4" style="background: #bddff7;">Store Unit<i id="unit" class="ti-filter" onclick="unit()"></i></th>
                                                                                    <th id ="A4" style="background: #bddff7;">Purchase Unit<i id="unit" class="ti-filter" onclick="unit11()"></i></th>
                                                                                    <th style="background: #bddff7;">Weight/Unit</th>
                                                                                    <th style="background: #bddff7;">Rate/Unit</th>
                                                                                    <th style="background: #bddff7;">GST</th>
                                                                                    <th style="background: #bddff7;">HSN</th>
                                                                                    <th style="background: #bddff7;">Stock</th>
                                                                                    <th id ="A5" style="background: #bddff7;">Min Stock<i class="ti-filter"></i></th>
                                                                                    <th id ="A5" style="background: #bddff7;">Max Stock<i class="ti-filter"></i></th>
                                                                                    <th id ="A5" style="background: #bddff7;">Reorder Stock<i class="ti-filter"></i></th>
                                                                                    <th id ="A5" style="background: #bddff7;">Lead Time<i class="ti-filter"></i></th>
                                                                                    </tr>
                                                                                </thead>
                                                        
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="PatterTab" class="tab-pane fade show">
                                                                <form method="post">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                        <div style="max-height: 450px;overflow: auto;">
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <th class="first-col sticky-col" style="z-index:1001 !important;">Material Group Name</th>
                                                                                    <!-- <th>Material SubType</th> -->
                                                                                    <th>Material Grade</th>
                                                                                    <th>Material Name </th>
                                                                                    <th>Parameter 1</th>
                                                                                    <th>Parameter 2</th>
                                                                                    <th>Operation 2</th>
                                                                                    <th>Parameter 3</th>
                                                                                    <th>Operation 3</th>
                                                                                    <th>Parameter 4</th>
                                                                                    <th>Operation 4</th>
                                                                                    <th>Parameter 5</th>
                                                                                    <th>Operation 5</th>
                                                                                    <th>Parameter 6</th>
                                                                                </thead>
                                                                                <tbody id="MaterialParameter">

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row" style="margin-top: 10px;">
                                                                            <div class="col-sm-6">
                                                                                <button class="btn btn-info" name="EditSave1" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;float:right;margin-right: -50px;">Submit</button>
                                                                            </div>
                                                                     </div>
                                                                    </form>

                                                                        <div class="row" style="margin-top: 10px;">
                                                                            <div class="col-sm-6">
                                                                                <!-- <button class="btn btn-info" name="EditSave1" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;float:right;margin-right: -50px;">Submit</button> -->
                                                                            </div>
                                                                            
                                                                            <div class="col-sm-6" style='text-align:right'>
                                                                                <button class="btn btn-info btnlf" id="first"><i class="fa fa-fast-backward" aria-hidden="true"></i> First</button> 
                                                                                <button class="btn btn-info btnlf" id="prious"><i class="fa fa-caret-left" aria-hidden="true"></i> Previous</button>
                                                                                <button class="btn btn-info btnlf" id="next">Next <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                                                                <button class="btn btn-info btnlf" id="last">Last <i class="fa fa-fast-forward" aria-hidden="true"></i></button>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                </div>

                                                                <div id="addCategory" class="tab-pane fade show">
                                                                    
                                                                        <div class="row" style="    margin-top: 8px;margin-bottom: 8px;">
                                                                            <div class="col-md-4">
                                                                                <select name="main_material_id" id="main_material_id" class="js-example-basic-single col-md-12 cities" onchange="getMaterialInitial(this.value);" required>
                                                                                    <option value="" selected disabled>Select Material type</option>
                                                                                        <?php
                                                                                            $query = mysqli_query($con,"SELECT DISTINCT mm.* FROM `material_master_v` as m INNER JOIN main_material_type_master as mm on m.main_material_type_id = mm.main_material_type_id ORDER BY `mm`.`main_material_name` ASC");
                                                                                            while($row = mysqli_fetch_assoc($query))
                                                                                            {
                                                                                                $mainID = $row['main_material_type_id'];
                                                                                                        ?>
                                                                                                <option value="<?php echo $row['main_material_type_id']?>"><?php echo $row['main_material_name']?></option>
                                                                                                <?php        
                                                                                            }
                                                                                        ?>
                                                                                </select>
                                                                            </div>     
                                                                            <div class="col-md-4">
                                                                                <select name="main_material_id12" id="main_material_id12" class="js-example-basic-single col-md-12 cities" onchange="getComponent12(this.value);" required>
                                                                                                  
                                                                                </select>
                                                                            </div>               
                                                                        </div>
                                                                        

                                                                        <form method="post">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div  style="max-height: 500px;overflow: auto;">
                                                                                        <table class="table table-bordered nowrap dataTable no-footer">
                                                                                            <thead>
                                                                                                <th style="z-index: 99;background: #bddff7; width: 20px;">No.</th>
                                                                                                <th style="z-index: 99;background: #bddff7; width: 5px;"></th>
                                                                                                <th style="z-index: 1000;background: #bddff7;left: 0px;">Material Name <i id="fileNo" class="ti-filter" onclick="fileno1()"></i></th>
                                                                                                <th style='z-index: 99;background: #bddff7; width: 20px;'>Material initail</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Store Unit</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Purchase Unit</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Make</th>
                                                                                                <th style="z-index: 99;background: #bddff7;width: 70px;">Rate/Unit</th>
                                                                                                <th style="z-index: 99;background: #bddff7;width: 7px;">Wt./Unit</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">HSN</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">GST</th>
                                                                                                <th style="z-index: 99;background: #bddff7;width: 210px;">Main Material Type</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Material Category</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">RFD</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Min Stock</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Max Stock</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">Reorder Stock</th>
                                                                                                <th style="z-index: 99;background: #bddff7;">lead Time</th>
                                                                                                <!-- <th style="background: #bddff7;"></th> -->
                                                                                            </thead>
                                                                                            <tbody id="matarialEditData">
                                                                                                            
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>  
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12" style="text-align:center;margin-top:7px;">
                                                                                    <button class="btn btn-info" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;" name="EditSave">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>

                                                                        <div class="row" style="margin-top: 10px;">
                                                                            <div class="col-sm-6">
                                                                                <!-- <button class="btn btn-info" name="EditSave1" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;float:right;margin-right: -50px;">Submit</button> -->
                                                                            </div>
                                                                            
                                                                            <div class="col-sm-6" style='text-align:right'>
                                                                                <button class="btn btn-info btnlf" id="firstEdit"><i class="fa fa-fast-backward" aria-hidden="true"></i> First</button> 
                                                                                <button class="btn btn-info btnlf" id="priousEdit"><i class="fa fa-caret-left" aria-hidden="true"></i> Previous</button>
                                                                                <button class="btn btn-info btnlf" id="nextEdit">Next <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                                                                <button class="btn btn-info btnlf" id="lastEdit">Last <i class="fa fa-fast-forward" aria-hidden="true"></i></button>
                                                                            </div>
                                                                        </div>

                                                                </div>

                                                                <div id="unassign" class="tab-pane fade show">
                                                               
                                                                    <div class="row" style="    margin-top: 8px;margin-bottom: 8px;">
                                                                        <div class="col-md-4">
                                                                            <select name="main_material_id" id="main_material_id" class="js-example-basic-single col-md-12 cities" onchange="getMaterialInitial(this.value);" required>
                                                                                <option value="" selected disabled>Select Material type</option>
                                                                                    <?php
                                                                                        $query = mysqli_query($con,"SELECT DISTINCT mm.* FROM `material_master_v` as m INNER JOIN main_material_type_master as mm on m.main_material_type_id = mm.main_material_type_id ORDER BY `mm`.`main_material_name` ASC");
                                                                                        while($row = mysqli_fetch_assoc($query))
                                                                                        {
                                                                                            $mainID = $row['main_material_type_id'];
                                                                                            ?>
                                                                                            <option value="<?php echo $row['main_material_type_id']?>"><?php echo $row['main_material_name']?></option>
                                                                                            <?php        
                                                                                        }
                                                                                    ?>
                                                                            </select>
                                                                        </div>     
                                                                        <div class="col-md-4">
                                                                            <select name="main_material_id12" id="main_material_id12" class="js-example-basic-single col-md-12 cities" onchange="getComponent12(this.value);" required>
                                                                                                  
                                                                            </select>
                                                                        </div>               
                                                                    </div>
                                                                        
                                                                    <form method="post">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div  style="max-height: 500px;overflow: auto;">
                                                                                    <table class="table table-bordered nowrap dataTable no-footer">
                                                                                        <thead>
                                                                                            <th style="z-index: 99;background: #bddff7; width: 20px;">No.</th>
                                                                                            <th style="z-index: 99;background: #bddff7; width: 5px;"></th>
                                                                                            <th style="z-index: 1000;background: #bddff7;left: 0px;">Material Name <i id="fileNo" class="ti-filter" onclick="fileno1()"></i></th>
                                                                                            <th style='z-index: 99;background: #bddff7; width: 20px;'>Material initail</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Store Unit</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Purchase Unit</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Make</th>
                                                                                            <th style="z-index: 99;background: #bddff7;width: 70px;">Rate/Unit</th>
                                                                                            <th style="z-index: 99;background: #bddff7;width: 7px;">Wt./Unit</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">HSN</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">GST</th>
                                                                                            <th style="z-index: 99;background: #bddff7;width: 210px;">Main Material Type</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Material Category</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">RFD</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Min Stock</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Max Stock</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">Reorder Stock</th>
                                                                                            <th style="z-index: 99;background: #bddff7;">lead Time</th>
                                                                                        </thead>
                                                                                        <tbody id="matarialEditData">
                                                                                                            
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>  
                                                                        </div>
                                                                            
                                                                        <div class="row">
                                                                            <div class="col-sm-12" style="text-align:center;margin-top:7px;">
                                                                                <button class="btn btn-info" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;" name="EditSave">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                    <div class="row" style="margin-top: 10px;">
                                                                        <div class="col-sm-6">
                                                                            <!-- <button class="btn btn-info" name="EditSave1" style="padding: 5px 13px 5px 13px;background: #ff6e1e;border: none;float:right;margin-right: -50px;">Submit</button> -->
                                                                        </div>
                                                                            
                                                                        <div class="col-sm-6" style='text-align:right'>
                                                                            <button class="btn btn-info btnlf" id="firstEdit"><i class="fa fa-fast-backward" aria-hidden="true"></i> First</button> 
                                                                            <button class="btn btn-info btnlf" id="priousEdit"><i class="fa fa-caret-left" aria-hidden="true"></i> Previous</button>
                                                                            <button class="btn btn-info btnlf" id="nextEdit">Next <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                                                            <button class="btn btn-info btnlf" id="lastEdit">Last <i class="fa fa-fast-forward" aria-hidden="true"></i></button>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="loading" style="display:none">
                                                        <img src="../img/loading.gif" class="img-resposive" style="height:85px">
                                                    </div>
                                                    <div class="lossConnection" style="display:none">
                                                        <img src="../img/noconnection.gif" class="img-responsive" style="width: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                            </div> 
                                      </div>

                                    </div>
    <div id="initailfilter" class="customFilter"style="width:300px;;background:#f7f7f7; display:none">
        <ul>
            <li>
                <div class="form-group">
                <select id="a" style="display:none">
                    <option value="sepl">sepl</option>
                    <option value="reset">reset</option>
                </select>
                <select class="js-example-basic-multiple col-sm-12"data-placeholder="Material initial"  id="initail1" name="initail1[]"  multiple="multiple" required="true">
                <option></option>
                    <?php 
                    $selectCustomerName = mysqli_query($con, "select distinct material_initial from material_master_v");
                    while($roleRow = mysqli_fetch_assoc($selectCustomerName))
                    {
                        ?>
                        <option value=" <?php echo $roleRow['material_initial'];?>"> <?php echo $roleRow['material_initial'];?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction7()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="RFDfilter" class="customFilter"style="width:300px;;background:#f7f7f7; display:none">
        <ul>
            <li>
                <div class="form-group">
                    <select id="a" style="display:none">
                        <option value="sepl">sepl</option>
                        <option value="reset">reset</option>
                    </select>
                    <select class="js-example-basic-multiple col-sm-12"data-placeholder="Material initial"  id="RFD" name="RFD[]"  multiple="multiple" required="true">
                        <option></option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>    
                    </select>
                </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction11()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="filenofilter" class="customFilter"style="width:300px;;background:#f7f7f7; display:none">
        <ul>
            
            <li>
                <div class="form-group">
                <select id="a" style="display:none">
                    <option value="sepl">sepl</option>
                    <option value="reset">reset</option>
                </select>
                <select class="js-example-basic-multiple col-sm-12"data-placeholder="Material"  id="fileNo1" name="fileNO[]"  multiple="multiple" required="true">
                <option></option>
                    <?php 
                    $selectCustomerName = mysqli_query($con, "select * from material_master_v");
                    while($roleRow = mysqli_fetch_assoc($selectCustomerName))
                    {
                        ?>
                        <option value=" <?php echo $roleRow['id'];?>"> <?php echo $roleRow['material_description'];?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction1()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>


    <div id="fileno1filter" class="customFilter"style="width:300px;;background:#f7f7f7; display:none;margin-top:70px;">
        <ul>
            <li>
                <div class="form-group">
               
                <select class="js-example-basic-multiple col-sm-12"data-placeholder="Material"  id="fileNo155" name="fileNO[]"  multiple="multiple" required="true">
                <option></option>
                    <?php 
                    $selectCustomerName = mysqli_query($con, "select * from material_master_v");
                    while($roleRow = mysqli_fetch_assoc($selectCustomerName))
                    {
                        ?>
                        <option value=" <?php echo $roleRow['id'];?>"> <?php echo $roleRow['material_description'];?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="ResetData()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="categoryfilter" class="customFilter"style="width:300px;background:#f7f7f7; display:none">
        <ul>
            <li>A to Z</li>
            <li>Z to A</li>
            <li>
            <div class="form-group">
                <select name="custId" id="category1" data-placeholder="Material Category Name" class="js-example-basic-multiple col-sm-12" multiple="multiple">
                    <!-- <option value="" selected disabled>	 NAME</option> -->
                        <?php 
                        $selectCustName = mysqli_query($con, "select DISTINCT mm.main_material_name,mv.main_material_type_id FROM material_master_v as mv INNER JOIN main_material_type_master as mm on mv.main_material_type_id = mm.main_material_type_id");
                        while($custRow = mysqli_fetch_assoc($selectCustName))
                        {
                            ?>
                            <option value="<?php  echo $custRow["main_material_type_id"];?>"><?php  echo $custRow["main_material_name"];?></option>
                        <?php
                        }
                        ?>
                </select>
            </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction3()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="makefilter" class="customFilter"style="width:300px;background:#f7f7f7; display:none">
        <ul>
            <li>A to Z</li>
            <li>Z to A</li>
            <li>
            <div class="form-group">
                <select name="make" id="make1" data-placeholder="Make Name" class="js-example-basic-multiple col-sm-12" multiple="multiple">
                    <!-- <option value="" selected disabled>	Make NAME</option> -->
                        <?php 
                        $selectCustName = mysqli_query($con, "select * from material_make_master");
                        while($custRow = mysqli_fetch_assoc($selectCustName))
                        {
                            ?>
                            <option value="<?php  echo $custRow["id"];?>"><?php  echo $custRow["make"];?></option>
                        <?php
                        }
                        ?>
                </select>
            </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction2()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="unitfilter" class="customFilter"style="width:300px;background:#f7f7f7; display:none">
        <ul>
            <li>A to Z</li>
            <li>Z to A</li>
            <li>
            <div class="form-group">
                <select name="unit1" id="unit1" data-placeholder="Unit" class="js-example-basic-multiple col-sm-12" multiple="multiple">
                    <!-- <option value="" selected disabled>	FILE TYPE NAME</option> -->
                        <?php 
                        $selectCustName = mysqli_query($con, "select DISTINCT mm.unit as id,mv.unit_id FROM material_master_v as mv INNER JOIN unit_master as mm on mv.unit_id = mm.id
                        ");
                        while($custRow = mysqli_fetch_assoc($selectCustName))
                        {
                            ?>
                            <option value="<?php  echo $custRow["unit_id"];?>"><?php  echo $custRow["id"];?></option>
                        <?php
                        }
                        ?>
                </select>
            </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction4()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="p_unitfilter" class="customFilter"style="width:300px;background:#f7f7f7; display:none">
        <ul>
            <li>A to Z</li>
            <li>Z to A</li>
            <li>
            <div class="form-group">
                <select name="unit11" id="unit11" data-placeholder="Unit" class="js-example-basic-multiple col-sm-12" multiple="multiple">
                    <!-- <option value="" selected disabled>	FILE TYPE NAME</option> -->
                        <?php 
                        $selectCustName = mysqli_query($con, "select DISTINCT mm.unit as id,mv.unit_id FROM material_master_v as mv INNER JOIN unit_master as mm on mv.unit_id = mm.id
                        ");
                        while($custRow = mysqli_fetch_assoc($selectCustName))
                        {
                            ?>
                            <option value="<?php  echo $custRow["unit_id"];?>"><?php  echo $custRow["id"];?></option>
                        <?php
                        }
                        ?>
                </select>
            </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction9()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
    <div id="employeefilter" class="customFilter"style="width:300px;background:#f7f7f7; display:none">
        <ul>
            <li>A to Z</li>
            <li>Z to A</li>
            <li>
            <div class="form-group">
                <select name="employee11" id="employee112" data-placeholder="employee name" class="js-example-basic-multiple col-sm-12" multiple="multiple">
                    <!-- <option value="" selected disabled>	FILE TYPE NAME</option> -->
                        <?php 
                        $selectCustName = mysqli_query($con, "SELECT DISTINCT q.employeeID,e.name FROM `quantity_master` as q LEFT JOIN employeemaster as e on q.employeeID = e.employeeId");
                        while($custRow = mysqli_fetch_assoc($selectCustName))
                        {
                            ?>
                            <option value="<?php  echo $custRow["employeeID"];?>"><?php  echo $custRow["name"];?></option>
                        <?php
                        }
                        ?>
                </select>
            </div>
            </li>
            <li></li>
            <li style="text-align: center;"><button class="btn" onclick="myFunction7()">Reset</button> &nbsp;&nbsp;<button class="btn cancel">Cancel</button></li>
        </ul>
    </div>
                                    <!-- Page-body end -->
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Check Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">

        <div class="row" style="padding-top: 5px;">
            <div class="col-sm-4">
            <label style="display: block !important; margin: 0px 0px 0px 0px;">Current Material Type</label>
                <input type="hidden" name="materialUNID" id="materialUNID">
                <input type="text" readonly id="materialnamedata" class="form-control">
            </div>
        </div>

        <div class="row" style="padding-top: 5px;">
            <div class="col-md-4">
                <div class="form-group form-default form-static-label">
                    <label style="display: block !important; margin: 0px 0px 0px 0px;">Select Material Type</label>
                    <span class="form-bar"></span>
                    <select  id="main_material_idUN" name="main_material_idUN" class="js-example-basic-single col-md-12" onchange="getComponentUN(this.value);" required>
                            <option value="" selected disabled>Select Material type</option>
                            <?php
                                $query = mysqli_query($con,"SELECT DISTINCT mm.* FROM `material_master_v` as m INNER JOIN main_material_type_master as mm on m.main_material_type_id = mm.main_material_type_id ORDER BY `mm`.`main_material_name` ASC");
                                while($row = mysqli_fetch_assoc($query))
                                {
                                    $mainID = $row['main_material_type_id'];
                                    ?>
                                    <option value="<?php echo $row['main_material_type_id']?>"><?php echo $row['main_material_name']?></option>
                            <?php        
                                }
                            ?>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <label style="display: block !important; margin: 0px 0px 0px 0px;">Select Material Component</label>
                <span class="form-bar"></span>
                <select  id="matarial_initialUN" name="material_initalUN"class="js-example-basic-single col-md-12" onChange="getBillingCity1UN(this.value);getBillingCityUN(this.value);" required>
                </select>               
            </div>

            <div class="col-md-4" id="showHideDropdowUN"  style="display:none">
                <label style="display: block !important; margin: 0px 0px 0px 0px;">Material Component</label>
                <select id="descriptionUN" class="js-example-basic-single col-md-12 cities" onchange="getMatrialdatainfo(this.value);getSubItemMaterialType(this.value);">
                    <option value="" selected disabled>Select Material Component</option>
                </select>
            </div>
        </div>

        <div class="row" style="padding-top: 5px;">
            <div class="col-md-12">
                <div id="parameterUN">
                    
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 5px;">
            <div class="col-md-8">
            <label style="display: block !important; margin: 0px 0px 0px 0px;">Material Description</label>
                <input type="text" class="form-control" id="material_descriptionUN" name="material_descriptionUN" placeholder="Material Description" readonly>
            </div>
            <div class="col-md-2">
            </div>
            <input type="hidden" id="status" name="status">
        </div>

        <div class="row" style="padding-top: 5px;">
            <div class="col-md-3">
            <label style="display: block !important; margin: 0px 0px 0px 0px;">Material Weight</label>
                <input type="text"  name="weight_value" id="weight_value" class="form-control">
            </div>

            <div class="col-md-3">
                <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Stock Unit</label>
                <span class="form-bar"></span>
                <select name="stockUnit" id="stockUnit" class="js-example-basic-single col-md-12 cities"  required>
                        <option value="" selected disabled>Select Stock Unit</option>
                        <?php
                            $query = mysqli_query($con,"SELECT id,Unit FROM `unit_master`");
                            while($row = mysqli_fetch_assoc($query))
                            {
                                $mainID = $row['main_material_type_id'];
                                ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['Unit']?></option>
                        <?php        
                            }
                        ?>
                </select>
            </div>

            <div class="col-md-3">
                <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Purchase Unit</label>
                <span class="form-bar"></span>
                <select name="purchaseUnit" id="purchaseUnit" class="js-example-basic-single col-md-12 cities" required>
                        <option value="" selected disabled>Select Purchase Unit</option>
                        <?php
                            $query = mysqli_query($con,"SELECT id,Unit FROM `unit_master`");
                            while($row = mysqli_fetch_assoc($query))
                            {
                                $mainID = $row['main_material_type_id'];
                                ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['Unit']?></option>
                        <?php        
                            }
                        ?>
                </select>
            </div>

            <div class="col-sm-3">
                <label style="display: block !important; margin: 0px 0px -5px 0px;">Select Material Category</label>
                <span class="form-bar"></span>
                <select name="Materialcat" id="Materialcat" class="js-example-basic-single col-md-12 cities" required>
                        <option value="" selected disabled>Select Material category</option>
                        <?php
                            $query = mysqli_query($con,"SELECT id,category FROM `material_category_master`");
                            while($row = mysqli_fetch_assoc($query))
                            {
                                // $mainID = $row['main_material_type_id'];
                                ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['category']?></option>
                        <?php        
                            }
                        ?>
                </select>
            </div>
        </div>

        <div class="row" style="padding-top: 5px;">
            <div class="col-sm-3">
            <label style="display: block !important; margin: 0px 0px -5px 0px;">Material Rate</label>
                <input type="text" class="form-control" placeholder="Rate" name="rate">
            </div>
        </div>

    

      
      </div>

      <div style="padding: 5px;text-align:center;">
        <button class="btn btn-info" style="padding: 5px 10px 5px 10px;" id="ActionOnMaterial" name="ActionOnMaterial">Action</button>
        <button type="button" class="btn btn-secondary" style="padding: 5px 10px 5px 10px;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="display: none;padding: 5px 10px 5px 10px;">Save Changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!-- <div id="main">
        <span style="font-size:15px;cursor:pointer" id="toggleNav" alt="filter"onclick="openNav(this)"><i  style="font-size:27px;"class="fa fa-filter" aria-hidden="true"></i></span>
    </div>  -->

<!-- Required Jquery -->
<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="../files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- data-table js -->
<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="../files/assets/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js"></script>
<!-- Custom js -->
<script src="../files/assets/pages/data-table/extensions/fixed-colums/js/fixed-column-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<!-- <script src="../files/assets/js/vertical/vertical-layout.min.js"></script> -->
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- <script type="text/javascript" src="../files/assets/js/script.js"></script> -->
<!-- Select JS -->
<script type="text/javascript" src="../files/assets/pages/advance-elements/select2-custom.js"></script>
<!-- Multiselect -->
<script type="text/javascript" src="../files/bower_components/multiselect/js/jquery.multi-select.js"></script>

<!-- Select 2 js -->
<script type="text/javascript" src="../files/bower_components/select2/js/select2.full.min.js"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="../files/bower_components/multiselect/js/jquery.multi-select.js"></script>
<!-- Developed Scripts -->
<script type="text/javascript" src="../files/assets/js/script.js"></script>
<script type="text/javascript" src="../database/config.js"></script>
<!-- CDN for Toaster message -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<!-- <script src=""></script> -->
<script>
function ActionOnMaterial()
{
    debugger
    var status           = $('#status').val();
    var material_initail = $('#matarial_initialUN').val();
    var materialID       = $('#materialUNID').val();
    var description      = $('#material_descriptionUN').val();
    if(status == 'ON')
    {
        $.ajax({
            url  : 'ActionONMaterial.php',
            type : "POST",
            data : {status : status,material_initail:material_initail,materialID:materialID,description:description},
            success : function(result)
            {
                debugger
                $.ajax({
                    url : 'unmatchMateial.php',
                    success : function(data)
                    {
                        $('#unmatchMaterial').html(data);
                    }
                })
            }
        })
    }
    if(status == 'Off')
    {   
        // $.ajax({
        //     url  : 'ActionONMaterial.php',
        //     type : "POST",
        //     data : {status : status,material_initail:material_initail,materialID:materialID,description:description},
        //     success : function(result)
        //     {
        //         debugger
        //         $.ajax({
        //             url : 'unmatchMateial.php',
        //             success : function(data)
        //             {
        //                 $('#unmatchMaterial').html(data);
        //             }
        //         })
        //     }
        // })
        $.ajax({
    url : "ActionONMaterial.php",
    type : "POST",
    // data : {
    //     status : status,material_initail:material_initail,materialID:materialID,description:description
    // },
    success : function(data){
        alert('working');
        window.location.reload();
    }
});
    }
}

$(document).ready(function(){
    $.ajax({
        url : 'unmatchMateial.php',
        success : function(data)
        {
            $('#unmatchMaterial').html(data);
        }
    })
})

$("table.order-list").on("click", ".dele", function (event) {

            $(this).closest("tr").remove();
            
        });
$(document).on("click",".addRow", function () {
            // debugger
            
            var ids = this.name;
            var materialName = $('#MaterialName_'+ids).val();
            var materilaid   = $('#materialid_'+ids).val();
            // var unitName     = $('#unitName_'+ids).val();
            // var purQty       = $('#purQty_'+ids).val();
            // var supplierqty  = $('#supplerid_'+ids).val();

            // purQty = purQty - supplierqty;

            <?php $idss = ids;?>
            var counter = $('#myTable tr').length - 2;

            $(document).on("click",".dele", function () {
                counter = -1
            });

            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><a href="#" id="ibtnDel" class="dele" value="delete"><i class="ti-close fa-stack"></i></a></td>';
            // cols += '<td><input type="button" id="ibtnDel"  value="Delete"></td>'
            cols += '<td></td>';
            // cols += '<td><input type="text" name="materialName[]"  id="materialName_1'+ids+'"style="border:none; width:300px" value="'+materialName+'"></td>';
            // cols += '<td><input type="hidden" value="'+materilaid+'" id="materialid_'+ids+'" name="materialEdit[]"><input type="text" id="materialName_'+ids+'" value="'+materialName+'" style="border:none; " readonly></td>'
            cols += '<td><input type="hidden" value="'+materilaid+'" id="materialid_'+ids+'" name="materialEdit[]"><input type="text" id="materialName_'+ids+'" value="'+materialName+'" style="border:none;width:300px" readonly></td>'
            
            cols += '<td></td>';
            cols += '<td></td>';
        cols += '<td><select class="form-control js-example-basic-single utmst grpTextBox" name="makeName[]"><option>Select Make Name</option><?php $getMakeMaster=mysqli_query($con,"SELECT * FROM material_make_master WHERE main_material_type_id = 11");while($row=mysqli_fetch_assoc($getMakeMaster)){?><option value="<?php echo $row['id'];?>"><?php echo $row['make']?></option><?php } ?></select></td>';
            cols += '<td><input type="text" class="form-control grpTextBox" name="rate[]" value="<?php echo $rate;?>" style="padding: 0;height: 25px;text-align: center;"></td>';
            cols += '<td><input type="text" class="form-control grpTextBox" name="weight[]" value="" style="padding:0;height: 25px;text-align: center;"></td>';
            cols += '<td></td>';
            cols += '<td></td>';
            // cols += '<td><select name="shippingCountry[]" id="country" class="js-example-basic-single col-md-12"><option value="" selected disabled>Select Supplier Name</option><?php $selectSupplierName = mysqli_query($con,"select c.CUSTOMER_NAME,c.CUSTOMER_ID FROM material_supplier_vendor_mapping as m INNER JOIN customer_master as c on c.CUSTOMER_ID = m.supplier_id");?>while($countryRow = mysqli_fetch_assoc($selectCountryName)){echo "<option value=".$countryRow['CUSTOMER_ID']."> ".$countryRow['CUSTOMER_NAME'] ."</option>";}?></select></td>'

            // cols += '<td><input type="button" id="ibtnDel" class="dele" value="Delete"></td>';
            cols += '<td ></td>';


            newRow.append(cols);
            newRow.insertAfter($(this).parents().closest('tr'));
            //$("table.order-list").append(newRow);
            counter++;
        });



var check =0;
function openNav(x) {
    // alert(this.check);
    if(this.check == 0)
    {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
//   element.classList.toggle("mystyle");
// x.classList.toggle("fa-thumbs-down");
  document.getElementById("main").style.marginRight = "258px";
  this.check = 1;
    }
    else
    {
        closeNav();
    }
}

function closeNav() {
    // alert(this.check);
    if(this.check== 1)
    {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  document.getElementById("main").style.marginRight = "0px";
  this.check = 0;
    }
    else{
        openNav()
    }
}

function getMaterialInitial(ele)
{
    $.ajax({
                type:"POST",
                url:"getMaterialType.php",
                data :'material='+ele,
                beforeSend: function(){
                        // Show image container
                        $(".loading").show();
                    },
                success: function(data)
                {
                    // debugger
                    $('#main_material_id12').html(data);
                },complete:function(data){
                    // Hide image container
                    $(".loading").hide();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('.lossConnection').show();
                    setTimeout(function(){ $('.lossConnection').hide() }, 10000);
                }
            });
}

function getMaterialDetails(name,materialUNID)
{
    $('#materialnamedata').val(name);
    $('#materialUNID').val(materialUNID)
}

</script>
   
<script>
    $('.sidenav-toggle').on('click', function() {
      var $sidenav, $this;
      $this = $(this);
      $sidenav = $('.ct-sidenav');
      if ($this.hasClass('active')) {
        $this.removeClass('active');
        return $sidenav.removeClass('active');
      } else {
        $this.addClass('active');
        return $sidenav.addClass('active');
      }
    });
    $('#sidenav-toggle').on('click', function() {
      var $sidenav, $this;
      $this = $(this);
      $sidenav = $('.ct-sidenav');
      if ($this.hasClass('open')) {
        $this.removeClass('open');
        return $sidenav.removeClass('open');
      } else {
        $this.addClass('open');
        return $sidenav.addClass('open');
      }
    });
    $('.ct-sidenav').find('button.close').on('click', function() {
      $(this).parent().removeClass('open');
      return $('#sidenav-toggle').removeClass('open');
    });

    $('#toggleNav').click(function() {
    // alert('this is function');
    $("i", this).toggleClass("fa fa-filter fa fa-times");
});
</script>
<!-- Dynamic Side Nav -->
<script>
    // $( document ).ready(function() {
        $.ajax({
            url:config_obj.base_url+"/sideNav/sideNavBar.php",
            type:"POST",
            success: function (result) {
                $('#sideNavebar').html(result);
            }
        })
    // });
</script>
<script>
    $(document).ready(function(){
//   var dataTable = $('#stockview').DataTable({
//     'processing': true,
//          'serverSide': true,
//          'serverMethod': 'post',
//          "order": [], //Initial no order.
//          "pageLength": 14, // Set Page Length
//          "lengthMenu": [ 5,10, 25, 50, 75, 100 ],
//          paging:         true,
//          sort:           false,
//          deferRender:    true,
//          // searching:         true,
//          'searching': false, // Remove default Search Control
//     'ajax': {
//        'url':'ViewMaterial.php',
      
//        'data': function(data){
//         var filename  = $('#fileNo1').val();
//         //   var category1 = $('#category1').val();
//         //   var make      = $('#make1').val();
//         //   var unit      = $('#unit1').val();
//         //   var employee  = $('#employee112').val();


//           var data1     = filename.map(x=>`'${x}'`).toString();
//         //   var data2     = category1.map(x=>`'${x}'`).toString();
//         //   var data3     = make.map(x=>`'${x}'`).toString();
//         //   var data4     = unit.map(x=>`'${x}'`).toString();
//         //   var data5     = employee.map(x=>`'${x}'`).toString();

//           data.filename = data1;
//         //   data.category = data2;
//         //   data.make     = data3;
//         //   data.unit     = data4;
//         //   data.employee = data5;
         
//        }
//     },
    
//     'columns': [
//                     { data: 'description' },
//                     { data: 'main_material_name'}, 
//                     { data: 'make'},
//                     { data: 'stock'},
//                     { data: 'unit'},
//                     { data: 'weight'},
//                     { data: 'rate'},
//                     { data: 'value'},
//                     { data: 'employeename'}
                    
//                 ]
//   });

//   $('#fileNo1').change(function(){
//       dataTable.draw();
//   })
//   $('#category1').change(function(){
//       dataTable.draw();
//   })
//   $('#make1').change(function(){
//       dataTable.draw();
//   })
//   $('#unit1').change(function(){
//       dataTable.draw();
//   })
//   $('#employee112').change(function(){
//       dataTable.draw();
//   })

  
  
 
  

});
  
    // To Adjust the datatable on view change
    $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
        // alert("Triggered")
        $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
    } );

     //on table row click user should redirect to the employee edit page
     $(function () {
        $('dataTable.table tr').click(function () {
           window.location.href = $(this).data('url');
            //console.log($(this).data('url'))
        });
    })

</script>
<script>

$("#header").click(function () {

    $('.collapse').collapse();
    $('.collapse').toggle();
});
    
</script>






<script>
// $('select').select2({
//     // minimumResultsForSearch: -1,
//     placeholder: function(){
//         $(this).data('placeholder');
//     }
// });
</script>
<script>
    //second dropdown list load
    function getComponentUN(val)
    {
        $.ajax({
            type:"POST",
            url:"getMaterialParameterType.php",
            data :'material='+val,
            beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
            success: function(data)
            {
                $('#matarial_initialUN').html(data);
            },complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
    function getComponent(val)
    {
        if(val == 11)
        {
            $('#makeData').show();
        }
        $.ajax({
            type:"POST",
            url:"getMaterialParameterType.php",
            data :'material='+val,
            beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
            success: function(data)
            {
                $('#matarial_initial').html(data);
            },complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
    
    function getSubItemMaterialType(val)
    {
        debugger
        var mainId = $('#materialtype').val();
        var str = val;
        $.ajax({
            type:"POST",
            url:"getMaterialParameterType11.php",
            data:{matrialname:str,id:mainId},
            
            success: function(data)
            {
                debugger
                console.log(data);
                if(data == '')
                {
                    console.log('not found');   
                }
                else
                {
                    $('#parameter').html(data);
                }
            }
        });
    }
    function getBillingCity1UN(val)
    {

    }
    function getBillingCityUN(val)
    {
        var mainId = $('#main_material_idUN').val();
        var val1 = $('#matarial_initialUN').val();
        var data = val1;
        var mainId1= val1.substr(0, val1.indexOf('@'));
         var str = data.split("@").pop();
        $.ajax({
        type: "POST",
        url: "getMaterialParameterType1UN.php",
        data:{matrial:str,id:mainId},
        beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
        success: function(data)
        {
            // debugger
            // alert(data.trim());
            
            data1 = data.trim();
            if(data1 == '')
            {
                
                $("#material_descriptionUN").prop("readonly", false); 
                $('#showHideDropdowUN').hide();
                $('#parameterUN').hide();
            }
            else{
            if(data1 == `Please Select SubType`)
            {
                $('#showHideDropdowUN').show();
                $.ajax({
                type: "post",
                url: "getSubtypeListUN.php",
                data:{matrial:str,id:mainId},
                success: function (data) {
                    $("#descriptionUN").html(data);

                }
            });
            }

            else{
                $('#showHideDropdowUN').hide();
                $("#parameterUN").html(data);
            }
            }
        },
        complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
    function getBillingCity(val)
    {
        console.log(val)
        // var data = val;
        
        var mainId = $('#main_material_id').val();
        var val1 = $('#matarial_initial').val();
        var data = val1;
        var mainId1= val1.substr(0, val1.indexOf('@'));
         var str = data.split("@").pop();
        $.ajax({
        type: "POST",
        url: "getMaterialParameterType1.php",
        data:{matrial:str,id:mainId},
        beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
        success: function(data2)
        {
            debugger
            // alert(data.trim());
            
            data1 = data2.trim();
            if(data1 == '')
            {
                
                $("#material_description").prop("readonly", false); 
                $('#showHideDropdow').hide();
                $('#parameter').hide();
            }
            else{
            if(data1 == `Please Select SubType`)
            {
                $('#showHideDropdow').show();
                $.ajax({
                type: "post",
                url: "getSubtypeList.php",
                data:{matrial:str,id:mainId},
                success: function (data) {
                    $("#description").html(data);

                }
            });
            }

            else{
                $('#showHideDropdow').hide();
                $("#parameter").html(data2);
            }
            }
        },
        complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });

        
    }
    // $("#description11").on('change', function(){
    //     debugger
    //         getBillingCity().done(function(data){
    //             data1 = data.trim();
    //             if(data1 == "Please Select SubType")
    //             {
                    
    //             }
    //         }
    //     }
    function getBillingCity1(val)
    {
        console.log(val)
        var data = val;
        var mainId= val.substr(0, val.indexOf('@'));
         var str = data.split("@").pop();
        $.ajax({
        type: "POST",
        url: "getMatrialData11.php",
        data:{matrial:str,id:mainId},
        beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
        success: function(data)
        {
            $("#description").html(data);
        },
        complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
    //this function is used to split data and show in textbox in material specification
    function getMatrialdatainfo(val)
    {
        console.log(val);
        
       var str1 = val.split("@").pop();
       var str11 = val.split('#').pop();
       var str = val.split('-').pop();
       var data = [];
       var temp = str.split("x");
       $('#p2').val(temp[0]);
       $('#p3').val(temp[1]);
       $('#p4').val(temp[2]);
       
       
    }
    // this function is used to append textbox and create material description name
    function materialDes()
    {
        debugger
        var material =$('#material1').val();
        var p1       =$('#p1').val();
        var p2       =$('#p2').val();
        var p3       =$('#p3').val();
        var p4       =$('#p4').val();
        var p5       =$('#p5').val();
        // alert(p5);
        var ob2      =$('#ob2').val();
        var ob3      =$('#ob3').val();
        var ob4      =$('#ob4').val();
        // alert(ob4);
        if(ob4 == undefined && p5 == undefined)
        {
            var material_description = material+''+p1+''+p2+''+ob2+p3+ob3+p4;
        }
        else if(ob3 == undefined && p4 == undefined)
        {
            var material_description = material+''+p1+''+p2+''+ob2+p3;
        }
        else if(ob2 == undefined && p3 == undefined)
        {
            var material_description = material+''+p1+''+p2+'';
        }
        else if(p1 == undefined && p2 == undefined)
        {
            var material_description = material;
        }
        else
        {
            var material_description = material+''+p1+''+p2+''+ob2+p3+ob3+p4+ob4+' '+p5;
        }
        
        $('#material_description').val(material_description);
    }
    function checkMaterial(ele)
    {
        // debugger;
        debugger
        var material =$('#material1').val();
        var p1       =$('#p1').val();
        var p2       =$('#p2').val();
        var p3       =$('#p3').val();
        var p4       =$('#p4').val();
        var p5       =$('#p5').val();
        // alert(p5);
        var ob2      =$('#ob2').val();
        var ob3      =$('#ob3').val();
        var ob4      =$('#ob4').val();
        if(ob2 == 'SPACE')
        {
            ob2 = ' ';
        }
        else if(ob2 == 'X')
        {
            ob2 = ' X ';
        }
        if(ob3 == 'SPACE')
        {
            ob3 = ' ';
        }
        if(ob4 == 'SPACE')
        {
            ob4 = ' ';
        }

        // alert(ob4);
        if(material == 'MS FLAT ' || material =='MS RAIL ' || material =='ISA ' || material =='ISMC ' || material =='ISLC ' || material == 'SQ BAR ' || material =='SS RAIL ' || material =='MS RAIL ')
        {
            var material_description = material+'-'+' '+p2+'X'+p3+' '+'X'+' '+p4;
        }
        else if(material == 'MS TUBE ' || material == 'UPRIGHT' || material == 'BEAM PIPE ' || material == 'SS TUBE ' || material == 'SLOTTED ANGLE ' || material == 'ALUMINIUM T ' || material == 'TUBE')
        {
            var material_description = material+'-'+' '+p2+'X'+p3+'X'+p4+' X '+p5;
        }
        else if(material == 'HRCA ' || material =='CRCA ' || material =='MS PLATE ' || material =='MS RD PIPE' || material == 'MS PLATE ' || material == 'SS SHEET 304')
        {
            var material_description = material+'-'+' '+p2+'X'+p3+' X '+p4;
        }
        else if(material == 'MS PIPE ')
        {
            var material_description = material+'-'+' '+p2+' X '+p3+' X '+p4+' ';
        }
        else if(material == 'WIREMESH ')
        {
            var material_description = material+'-'+p2+' - '+p3;
        }
        else if(material == 'KEY(SQ PIN)')
        {
            var material_description = material+'-'+p2+' X '+p3+' X '+p4+'  MM';
        }
        else if(material=='SPRAY'||material=='COLOR'||material=='POWDER '||material=='UPRIGHT'||material=='MS PIPE '||material=='MS RD PIPE BEND'||material=='TMT BAR '||material=='WIREMESH '||material=='CCP BOX'||material=='CONTACTOR '||material=='END CAP '||material=='FERRUELS '||material=='FLOOR SENSOR'||material=='FRC '||material=='GEAR-BOX'||material=='HENSEL'||material=='KUT '||material=='LABEL '||material=='LUGS'||material=='MCB '||material=='MOTOR '||material=='MPCB '||material=='PVC FLEXIBLE WIRE'||material=='SENSOR'||material=='SH. CABLE '||material=='SHORT LINK '||material=='SMPS '||material=='VFD ')
        {
            var material_description = material+'-'+p2;
        }
        else
        {
            var material_description = material;
        }
        $('#material_description').val(material_description);


        var val = $('#material_description').val();
        $.ajax({
        type: "POST",
        url: "CheckMatrialData.php",
        data:"matrial="+val,
        beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
        success: function(data)
        {
            alert(data);
        },
        complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }

    function checkMaterial1(ele)
    {
        var material =$('#material1').val();
        var p1       =$('#p1').val();
        var p2       =$('#p2').val();
        var p3       =$('#p3').val();
        var p4       =$('#p4').val();
        var p5       =$('#p5').val();
        // alert(p5);
        var ob2      =$('#ob2').val();
        var ob3      =$('#ob3').val();
        var ob4      =$('#ob4').val();
        if(ob2 == 'SPACE')
        {
            ob2 = ' ';
        }
        else if(ob2 == 'X')
        {
            ob2 = ' X ';
        }
        if(ob3 == 'SPACE')
        {
            ob3 = ' ';
        }
        if(ob4 == 'SPACE')
        {
            ob4 = ' ';
        }
        // alert(ob4);
        // if(p1 == undefined && p2 == undefined && ob2 == undefined && p3 == undefined && ob3 == undefined && p4 == undefined &&ob4 == undefined && p5 == undefined)
        // {
        //     var material_description = material;
        // }
        // else if(p1 != undefined && p2 != undefined && ob2 == undefined && p3 == undefined && ob3 == undefined && p4 == undefined &&ob4 == undefined && p5 == undefined)
        // {
        //     var material_description = material+''+p1+' '+p2;
        // }
        // else if(p1 != undefined && p2 != undefined && ob2 != undefined && p3 != undefined && ob3 == undefined && p4 == undefined &&ob4 == undefined && p5 == undefined)
        // {
        //     var material_description = material+''+p1+' '+p2+ob2+p3;
        // }
        // else if(p1 != undefined && p2 != undefined && ob2 != undefined && p3 != undefined && ob3 != undefined && p4 != undefined &&ob4 == undefined && p5 == undefined)
        // {
        //     var material_description = material+''+p1+' '+p2+''+ob2+p3+ob3+p4;
        // }
        // else
        // {
        //     var material_description = material+''+p1+' '+p2+ob2+p3+ob3+p4+ob4+' '+p5;
        // }

        if(material == 'MS FLAT ' || material =='MS RAIL ' || material =='ISA ' || material =='ISMC ' || material =='ISLC ' || material == 'SQ BAR ' || material =='SS RAIL ' || material =='MS RAIL ')
        {
            var material_description = material+'-'+' '+p2+'X'+p3+' '+'X'+' '+p4;
        }
        else if(material == 'MS TUBE ' || material == 'UPRIGHT' || material == 'BEAM PIPE ' || material == 'SS TUBE ' || material == 'SLOTTED ANGLE ' || material == 'ALUMINIUM T ' || material == 'TUBE')
        {
            var material_description = material+'-'+' '+p2+'X'+p3+'X'+p4+' X '+p5;
        }
        else if(material == 'HRCA ' || material =='CRCA ' || material =='MS PLATE ' || material =='MS RD PIPE' || material == 'MS PLATE ' || material == 'SS SHEET 304')
        {
            var material_description = material+'-'+' '+p2+'X'+p3+' X '+p4;
        }
        else if(material == 'MS PIPE ')
        {
            var material_description = material+'-'+' '+p2+' X '+p3+' X '+p4+' ';
        }
        else if(material == 'WIREMESH ')
        {
            var material_description = material+'-'+p2+' - '+p3;
        }
        else if(material == 'KEY(SQ PIN)')
        {
            var material_description = material+'-'+p2+' X '+p3+' X '+p4+'  MM';
        }
        else if(material=='SPRAY'||material=='COLOR'||material=='POWDER '||material=='UPRIGHT'||material=='MS PIPE '||material=='MS RD PIPE BEND'||material=='TMT BAR '||material=='WIREMESH '||material=='CCP BOX'||material=='CONTACTOR '||material=='END CAP '||material=='FERRUELS '||material=='FLOOR SENSOR'||material=='FRC '||material=='GEAR-BOX'||material=='HENSEL'||material=='KUT '||material=='LABEL '||material=='LUGS'||material=='MCB '||material=='MOTOR '||material=='MPCB '||material=='PVC FLEXIBLE WIRE'||material=='SENSOR'||material=='SH. CABLE '||material=='SHORT LINK '||material=='SMPS '||material=='VFD ')
        {
            var material_description = material+'-'+p2;
        }
        else
        {
            var material_description = material;
        }
        $('#material_descriptionUN').val(material_description);
        var val = $('#material_descriptionUN').val();
        $.ajax({
        type: "POST",
        url: "CheckMatrialData.php",
        data:"matrial="+val,
        beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
        success: function(data)
        {
            // alert(data);status
            console.log(data);
            if(data.trim() == 'Material already exists')
            {
                alert('Material Already Exists');
                $('#status').val('ON');
            }
            if(data.trim() == 'Add Material')
            {
                alert('Add Material');
                $('#status').val('Off');
            }
        },
        complete:function(data)
        {
            $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
    function checkRadio(ele)
    {
        if(ele == 'Yes')
        {
            $('#ShowRequiredMaterial').show();
        }
        else
        {
            $('#ShowRequiredMaterial').hide();
        }
    }
</script>
<script>
function submitData()
{
    // debugger
    var main_id              = $('#main_material_id').val();
    var matarial_initial     = $('#matarial_initial').val();
    var description          = $('#description').val();
    var material_description = $('#material_description').val();
    var isweight             = $('#isWeight').val();
    var weight_value         = $('#weight_value').val();
    var stockUnit            = $('#stockUnit').val();
    var purchaseUnit         = $('#purchaseUnit').val();
    var supplier             = $('#supplier').val();
    var vendor               = $('#vendor').val();
    var stockMaintain        = $('#stockMaintain').val();
    var min_stock            = $('#min_stock').val();
    var max_stock            = $('#max_stock').val();
    var reorder_stock        = $('#reorder_stock').val();
    var rate                 = $('#rate').val();
    var lead_time            = $('#lead_time').val();
    var hsn                  = $('#hsn').val();
    var gst                  = $('#gst').val();
    var material1            = $('#material1').val();
    var p21                  = $('#p21').val();
    var p2                   = $('#p2').val();
    var p31                  = $('#p31').val();
    var p3                   = $('#p3').val();
    var p41                  = $('#p41').val();
    var p4                   = $('#p4').val();
    var p51                  = $('#p51').val();
    var p5                   = $('#p5').val();
    var Materialcat          = $('#Materialcat').val();
    var makeID               = $('#makeId').val();

    $.ajax({
        type	 : "POST",
        url	     : "SaveMaterialData.php",
        data	 : { main_id : main_id,material_initial :matarial_initial,description:description,material_description:material_description,isweight : isweight,weight_value : weight_value, stockfUnit : stockUnit, purchaseUnit : purchaseUnit,supplier : supplier,vendor : vendor,stockMaintain:stockMaintain , min_stock :min_stock,max_stock : max_stock,reorder_stock:reorder_stock,rate:rate,lead_time:lead_time,hsn:hsn,material1:material1,p21:p21,p2:p2,p31:p31,p3:p3,p41:p41,p4:p4,p51:p51,p5:p5,Materialcat:Materialcat,gst : gst,makeID : makeID },
        
        datatype : 'html',  
        success: function(data) {	
            toastr.success("Added Successfully", "add material");
            // location.reload(); 
            $('#saveData')[0].reset();
            $('#main_material_id').select2('val','All');
            $('#matarial_initial').select2('val','All');
            $('#description').select2('val','All');
            $('#supplier').select2('val','All');
            $('#vendor').select2('val','All');
            $('#stockUnit').select2('val','All');
            $('#purchaseUnit').select2('val','All');
            $('#makeData').hide();
            // toastr.options.positionClass = "toast-top-center";toastr.success("Added Successfully");	
        }
    });
}
</script>
<script>
    $(document).ready(function(){
        // debugger
  var dataTable = $('#stockview').DataTable({
    'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        "order": [], //Initial no order.
        "pageLength": 19, // Set Page Length
        "lengthMenu": [ 5,10, 25, 50, 75, 100 ],
        scrollX:        true,
         // scrollCollapse: true,
        paging:         true,
        sort:           true,
        deferRender:    true,
        // searching:         true,
        // 'searching': false, // Remove default Search Control
      
     
    'ajax': {
       'url':'ViewMaterial.php',
        'type' : 'POST',
       'data': function(data){
          var filename  = $('#fileNo1').val();
          var initials  = $('#initail1').val();
          
          var category1 = $('#category1').val();
          var make      = $('#make1').val();
          var unit      = $('#unit1').val();
          var unit11    = $('#unit11').val();
          var employee  = $('#employee112').val();
          var rfd       = $('#RFD').val();


          var data1     = filename.map(x=>`'${x}'`).toString();
          var data2     = category1.map(x=>`'${x}'`).toString();
          var data3     = make.map(x=>`'${x}'`).toString();
          var data4     = unit.map(x=>`'${x}'`).toString();
          var data5     = employee.map(x=>`'${x}'`).toString();
          var data6     = initials.map(x=>`'${x}'`).toString();
          var data7     = unit11.map(x=>`'${x}'`).toString();
          var data8     = rfd.map(x=>`'${x}'`).toString();
          console.log(data6);
          console.log(data1);

          data.filename = data1;
          data.category = data2;
          data.make     = data3;
          data.unit     = data4;
          data.employee = data5;
          data.initial  = data6;
          data.p_unit   = data7;
          data.rfd      = data8;
         
       }
    },
    fixedColumns:   {
            leftColumns: 1,
        },
    
    
    'columns': [
                    { data: 'description' },
                    { data: 'initial'},
                    { data: 'MaterialCatg'},
                    { data: 'main_material_name'},
                    { data: 'rdf'}, 
                    { data: 'make'},
                    { data: 'unit'},
                    { data: 'p_unit'},
                    { data: 'weight'},
                    { data: 'rate'},
                    { data: 'gst'},
                    { data: 'hsn'},
                    { data: 'stock'},
                    { data: 'MinStock'},
                    { data: 'MaxStock'},
                    { data: 'reorderStock'},
                    { data: 'leadTime'}
                    // { data: 'employeename'}
                    
                ]
  });
  $('#fileNo1').change(function(){
      dataTable.draw();
  })
  $('#initail1').change(function(){
      dataTable.draw();
  })
  $('#category1').change(function(){
      dataTable.draw();
  })
  $('#make1').change(function(){
      dataTable.draw();
  })
  $('#unit1').change(function(){
      dataTable.draw();
  })
  $('#unit11').change(function(){
      dataTable.draw();
  })
  $('#employee112').change(function(){
      dataTable.draw();
  })
  $('#RFD').change(function(){
      dataTable.draw();
  })
});
</script>
<script>
        function myFunction1()
        {
            // document.getElementById('client').innerHTML = "";
            $("#fileNo1").select2('val', 'All');
            $('#A1').css('background-color','#bddff7');
        }
        function myFunction2()
        {
            // document.getElementById('client').innerHTML = "";
            $("#make1").select2('val', 'All');
            $('#A3').css('background-color','#bddff7');
        }
        function myFunction3()
        {
            // document.getElementById('client').innerHTML = "";
            $("#category1").select2('val', 'All');
            $('#A2').css('background-color','#bddff7');
        }
        function myFunction4()
        {
            // document.getElementById('client').innerHTML = "";
            $("#unit1").select2('val', 'All');
            $('#A4').css('background-color','#bddff7');
        }
        function myFunction7()
        {
            $('#employee112').select2('val','All');
            $('#A5').css('background-color','#bddff7');
        }
        function myFunction8()
        {
            $('#initail1').select2('val','All');
            $('#A6').css('background-color','#bddff7');
        }
        function myFunction9()
        {
            $("#unit11").select2('val', 'All');
            $('#A7').css('background-color','#bddff7');
        }
        function myFunction10()
        {
            $("#unit11").select2('val', 'All');
            $('#A7').css('background-color','#bddff7');
        }
        function myFunction11()
        {
            $("#RFD").select2('val', 'All');
            $('#A7').css('background-color','#bddff7');
        }

</script>
<script>

function fileno()
{
  $('#filenofilter').toggle();
}
function fileno1()
{
  $('#fileno1filter').toggle();
}
function RFD()
{
  $('#RFDfilter').toggle();   
}
function initail()
{
    $('#initailfilter').toggle();
}
function unit()
{
  $('#unitfilter').toggle();
  
}
function unit11()
{
  $('#p_unitfilter').toggle();
  
}
function insertedby()
{
    $('#employeefilter').toggle();
}
function make()
{
  $('#makefilter').toggle();
}
function category()
{
  $('#categoryfilter').toggle();
}


//reset button function



</script>
<script>
$('#reset').click(function(){
   
    document.getElementById('a').selectedIndex = 1;

        $("#fileNo1").select2('val', 'All');
        $("#customerName11").select2('val', 'All');
        $('#productName11').select2('val','All');
        $('#fileTypeName11').select2('val','All');
  
        $('#A1').css('background-color','#bddff7');
        $('#A2').css('background-color','#bddff7');
        $('#A3').css('background-color','#bddff7');
        $('#A4').css('background-color','#bddff7');
      
})

</script>
<script>
    $('.cancel').click(function(){
    $('#filenofilter').css('display','none');
    $('#fileno1filter').css('display','none');
    $('#categoryfilter').css('display','none');
    $('#makefilter').css('display','none');
    $('#unitfilter').css('display','none');
    $('#p_unitfilter').css('display','none');
    $('#employeefilter').css('display','none');
    $('#initailfilter').css('display','none');
    $('#RFDfilter').css('display','none');
  
})
</script>
<script>
     $('#fileNo1').change(function(){
        $('#A1').css('background-color','#f35c09');
    })
    $('#initail1').change(function(){
        $('#A6').css('background-color','#f35c09');
    })
    $('#category1').change(function(){
        $('#A2').css('background-color','#f35c09')
    })
    $('#make1').change(function(){
        $('#A3').css('background-color','#f35c09')
    })
    $('#unit1').change(function(){
        $('#A4').css('background-color','#f35c09')
    })
    $('#employee112').change(function(){
        $('#A5').css('background-color','#f35c09')
    })
    
</script>
<script>
// $('select').select2({
//     // minimumResultsForSearch: -1,
//     placeholder: function(){
//         $(this).data('placeholder');
//     }
// });
</script>
<script>
    var privous = 16;
    var next    = 15;
    $(document).ready(function(){
        $.ajax({
            url  : 'MaterialParameterDetails.php',
            type : 'POST',
            data : {previous : privous , next : next},
            success : function(result)
            {
                $('#MaterialParameter').html(result);
            }
        })
    })

    $('#next').click(function(){
            
            next = 15 + next;
            if(next == 15)
            {
                $("#prious").attr("disabled", true);
                $('#first').attr("disabled", true);

            }
            else
            {
                $("#prious").attr("disabled", false);
                $('#first').attr("disabled", false);

            }
             var data = $('#searchByName1').val();
           
             $.ajax({
            url  : 'MaterialParameterDetails.php',
            type : 'POST',
            data : {previous : privous , next : next},
            success : function(result)
            {
                $('#MaterialParameter').html(result);
            }
        })
        })

        $('#prious').click(function(){
            if(next == 15)
            {
                $("#prious").attr("disabled", true);
            }
            else
            {
                $("#prious").attr("disabled", false);

            }
            next = next - 15;
             var data = $('#searchByName1').val();
           
             $.ajax({
            url  : 'MaterialParameterDetails.php',
            type : 'POST',
            data : {previous : privous , next : next},
            success : function(result)
            {
                $('#MaterialParameter').html(result);
            }
            })
        })
        $('#first').click(function(){
            if(next == 15)
            {
                $("#prious").attr("disabled", true);
                $('#first').attr("disabled", true);
            }
            else
            {
                $("#prious").attr("disabled", false);
                $('#first').attr("disabled", false);
            }
            next = 15;
            var data = $('#searchByName1').val();
           
            $.ajax({
            url  : 'MaterialParameterDetails.php',
            type : 'POST',
            data : {previous : privous , next : next},
            success : function(result)
            {
                $('#MaterialParameter').html(result);
            }
        })
        })

        $('#last').click(function(){
            
            next  = 752;
            if(next == 15)
            {
                $("#prious").attr("disabled", true);
                $('#first').attr("disabled", true);

            }
                else
                {
                    $("#prious").attr("disabled", false);
                    $('#first').attr("disabled", false);

                }
                var data = $('#searchByName1').val();
            
                $.ajax({
                url  : 'MaterialParameterDetails.php',
                type : 'POST',
                    data : {previous : privous , next : next},
                    success : function(result)
                    {
                        $('#MaterialParameter').html(result);
                    }
                })
                })
        </script>

<script>
    var privous = 20;
    var next    = 0;
    function getComponent12(val)
    {

        privous = 25;
        next    = 0;
        $.ajax({
            type:"POST",
            url:"getMaterialDataForEdit.php",
            data :{material :val,privous : privous,next:next},
            beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
            success: function(data)
            {
                $('#matarialEditData').html(data);
            },complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
   
    $('#fileNo155').change(function(ele){
        debugger
        var privous = 20;
        var next    = 0;
        var material = $('#main_material_id12').val();
        var value    = ele.target.value;
        $.ajax({
            type:"POST",
            url:"getMaterialDataForEdit.php",
            data :{material :material,privous : privous,next:next,value : value},
            beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
            success: function(data)
            {
                $('#matarialEditData').html(data);
            },complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
        
    })

    function ResetData()
    {
        var privous = 20;
        var next    = 0;
        var material = $('#main_material_id12').val();
        $('#fileNo155').val('');
        $.ajax({
            type:"POST",
            url:"getMaterialDataForEdit.php",
            data :{material :material,privous : privous,next:next},
            beforeSend: function(){
                    // Show image container
                    $(".loading").show();
                },
            success: function(data)
            {
                $('#matarialEditData').html(data);
            },complete:function(data){
                // Hide image container
                $(".loading").hide();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('.lossConnection').show();
                setTimeout(function(){ $('.lossConnection').hide() }, 10000);
            }
        });
    }
    $('#nextEdit').click(function(){
            
            next = 25 + next;
            
            if(next == 25)
            {
                $("#priousEdit").attr("disabled", true);
                $('#firstEdit').attr("disabled", true);

            }
            else
            {
                $("#priousEdit").attr("disabled", false);
                $('#firstEdit').attr("disabled", false);

            }
             var data = $('#main_material_id12').val();
           
             $.ajax({
            url  : 'getMaterialDataForEdit.php',
            type : 'POST',
            data : {material:data,privous : privous , next : next},
            success : function(result)
            {
                $('#matarialEditData').html(result);
            }
        })
        })

        $('#priousEdit').click(function(){
            if(next == 25)
            {
                $("#priousEdit").attr("disabled", true);
            }
            else
            {
                $("#priousEdit").attr("disabled", false);

            }
            next = next - 25;
            // privous = privous - 25;
             var data = $('#main_material_id12').val();
           
             $.ajax({
            url  : 'getMaterialDataForEdit.php',
            type : 'POST',
            data : {material:data,privous : privous , next : next},
            success : function(result)
            {
                $('#matarialEditData').html(result);
            }
            })
        })
        $('#firstEdit').click(function(){
            if(next == 25)
            {
                $("#priousEdit").attr("disabled", true);
                $('#firstEdit').attr("disabled", true);
            }
            else
            {
                $("#priousEdit").attr("disabled", false);
                $('#firstEdit').attr("disabled", false);
            }
            next = 25;
            privous = 0;
            var data = $('#main_material_id12').val();
           
            $.ajax({
            url  : 'getMaterialDataForEdit.php',
            type : 'POST',
            data : {material:data,privous : privous , next : next},
            success : function(result)
            {
                $('#matarialEditData').html(result);
            }
        })
        })

        $('#lastEdit').click(function(){
            
            next  = 752;
            if(next == 25)
            {
                $("#priousEdit").attr("disabled", true);
                $('#firstEdit').attr("disabled", true);

            }
                else
                {
                    $("#priousEdit").attr("disabled", false);
                    $('#firstEdit').attr("disabled", false);

                }
                var data = $('#main_material_id12').val();
            
                $.ajax({
                url  : 'getMaterialDataForEdit.php',
                type : 'POST',
                    data : {material:data,privous : privous , next : next},
                    success : function(result)
                    {
                        $('#matarialEditData').html(result);
                    }
                })
            })
        </script>
</body>

</html>


<?php
    if(isset($_POST['EditSave1']))
    {
        // echo "asdfdfsfdsfsdf";
        $mainID          = $_POST['mainID'];
        $materialGup     = $_POST['materialGup'];
        $materialG       = $_POST['materialG'];
        $MaterialName    = $_POST['MaterialName'];
        $Parameter1      = $_POST['Parameter1'];
        $Parameter2      = $_POST['Parameter2'];
        $op2             = $_POST['op2'];
        $Parameter3      = $_POST['Parameter3'];
        $op3             = $_POST['op3'];
        $Parameter4      = $_POST['Parameter4'];
        $op4             = $_POST['op4'];
        $Parameter5      = $_POST['Parameter5'];
        $op5             = $_POST['op5'];
        $Parameter6      = $_POST['Parameter6'];
        print_r($Parameter1);
        print_r($materialGup);


        foreach($materialGup as $keys => $values)
        {
            $updateDAta = mysqli_query($con,"update materialgroup_parameter_details set `Material Grade`='$materialG[$keys]',`Material Name`='$MaterialName[$keys]',Parameter1='$Parameter1[$keys]',Parameter2='$Parameter2[$keys]',operation2='$op2[$keys]',Parameter3='$Parameter3[$keys]',operation3='$op3[$keys]',Parameter4='$Parameter4[$keys]',operation4='$op4[$keys]',Parameter5='$Parameter5[$keys]',operation5='$op5[$keys]',Parameter6='$Parameter6[$keys]' where main_material_type_id='$mainID[$keys]' and material_group_name='$materialGup[$keys]'");
        }
        if($updateDAta)
        {
            echo '<script>toastr.options.positionClass = "toast-bottom-right";toastr.success("Material Details update Successfully")</script>';
            echo "<script>setTimeout(\"location.href = '../stock/addMaterial.php';\",300);</script>";
        }
    }  

    if(isset($_POST['EditSave']))
    {
        $materialEdit     = $_POST['materialEdit'];
        $unit             = $_POST['unit'];
        $pur_unit         = $_POST['pur_unit'];
        $weight           = $_POST['weight'];
        $mainMaterialName = $_POST['mainMaterialName'];
        $materialInitial  = $_POST['material_initial'];
        $gst              = $_POST['gst'];
        $hsn              = $_POST['hsn'];
        $rate             = $_POST['rate'];
        $makeName         = $_POST['makeName'];
        $Min              = $_POST['Min'];
        $Max              = $_POST['Max'];
        $reOrder          = $_POST['reOrder'];
        $leadTime         = $_POST['leadTime'];
        $MaterialCatName  = $_POST['MaterialCatName'];
        $rfd              = $_POST['rfd'];
        // print_r($pur_unit);
        // print_r($materialEdit);
        print_r($makeName);
        // print_r($weight);
        // print_r($mainMaterialName);
        
        foreach($materialEdit as $key =>$value)
        {
		 
            if($weight[$key]=='')
            {
			
                echo '<br>';
                echo $rate[$key];
                echo '<br>';
                $updateData = mysqli_query($con,"update material_master_v set unit_id='$unit[$key]',material_initial='$materialInitial[$key]',unit_id_purchase='$pur_unit[$key]',weight_kg='$weight[$key]',main_material_type_id='$mainMaterialName[$key]',material_category_id='$MaterialCatName[$key]',RFD='$rfd[$key]' where id='$materialEdit[$key]'");
                
                $checkMakeinRate = mysqli_query($con,"SELECT * FROM rate_chart WHERE make_id = $makeName[$key] and martrial_id = $materialEdit[$key] and status = 1");

                $row1 = mysqli_fetch_assoc($checkMakeinRate);
                $rates = $row1['rate'];

                if($rates=='')
                {
                    $insertnewRate = mysqli_query($con,"insert into rate_chart(martrial_id,rate,make_id,status,employee_id)value('$materialEdit[$key]','$rate[$key]','$makeName[$key]','1','$empid')");
                }
                else
                {
                    $updateRate  = mysqli_query($con,"update rate_chart set status='0' where martrial_id='$materialEdit[$key]' and status='1'   and rate='$rates'");

                    $insertnewRate = mysqli_query($con,"insert into rate_chart(martrial_id,rate,make_id,status,employee_id)value('$materialEdit[$key]','$rate[$key]','$makeName[$key]','1','$empid')");
                }

                if($hsn[$key] != '' && $gst[$key]!='')
                {
                    $updateHsn = mysqli_query($con,"update materialinitial_hsn_gst_master set hsn='$hsn[$key]',gst_rate='$gst[$key]' where material_initial='$materialInitial[$key]'");

                    echo "update materialinitial_hsn_gst_master set hsn='$hsn[$key]',gst_rate='$gst[$key]' where material_initial='$materialInitial[$key]'";

                }  
                if($Min[$key] !='' && $Max[$key] !='')
                {
                    $checkData = mysqli_query($con,"SELECT * FROM material_stock_details WHERE material_id ='$materialEdit[$key]'");
                    $row2      = mysqli_fetch_assoc($checkData);
                    $chekid    = $row2['material_id'];
                    if($chekid == '')
                    {
                        $insertData = mysqli_query($con,"insert into material_stock_details(material_id,minimum_stock_quantity,maximum_stock_quantity,reorder_stock_quantity,lead_time,added_by)values('$materialEdit[$key]','$Min[$key]','$Max[$key]','$reOrder[$key]','$leadTime[$key]','$empid')");
                    }
                    else
                    {
                        $updateStockDetails = mysqli_query($con,"update material_stock_details set minimum_stock_quantity='$Min[$key]',maximum_stock_quantity='$Max[$key]',reorder_stock_quantity='$reOrder[$key]',lead_time='$leadTime[$key]',added_by='$empid' where material_id='$materialEdit[$key]'");
                    }
                }
                
            }
            else
            {
			
                $updateData = mysqli_query($con,"update material_master_v set unit_id='$unit[$key]',material_initial='$materialInitial[$key]',unit_id_purchase='$pur_unit[$key]',weight_kg='$weight[$key]',main_material_type_id='$mainMaterialName[$key]',material_category_id='$MaterialCatName[$key]',RFD='$rfd[$key]' where id='$materialEdit[$key]'");

                echo "update material_master_v set unit_id='$unit[$key]',unit_id_purchase='$pur_unit[$key]',weight_kg='$weight[$key]',main_material_type_id='$mainMaterialName[$key]',material_category_id='$MaterialCatName[$key]' where id='$materialEdit[$key]'";
                echo '<br>';
                if($hsn[$key] != '' && $gst[$key]!='')
                {
                    $updateHsn = mysqli_query($con,"update materialinitial_hsn_gst_master set hsn='$hsn[$key]',gst_rate='$gst[$key]' where material_initial='$materialInitial[$key]'");

                    echo "update materialinitial_hsn_gst_master set hsn='$hsn[$key]',gst_rate='$gst[$key]' where material_initial='$materialInitial[$key]'";

                }   

                if($Min[$key] !='' && $Max[$key] !='')
                {
                    $checkData = mysqli_query($con,"SELECT * FROM material_stock_details WHERE material_id ='$materialEdit[$key]'");
                    $row2      = mysqli_fetch_assoc($checkData);
                    $chekid    = $row2['material_id'];
                    if($chekid == '')
                    {
                        $insertData = mysqli_query($con,"insert into material_stock_details(material_id,minimum_stock_quantity,maximum_stock_quantity,reorder_stock_quantity,lead_time,added_by)values('$materialEdit[$key]','$Min[$key]','$Max[$key]','$reOrder[$key]','$leadTime[$key]','$empid')");
                    }
                    else
                    {
                        $updateStockDetails = mysqli_query($con,"update material_stock_details set minimum_stock_quantity='$Min[$key]',maximum_stock_quantity='$Max[$key]',reorder_stock_quantity='$reOrder[$key]',lead_time='$leadTime[$key]',added_by='$empid' where material_id='$materialEdit[$key]'");
                    }
                }
                $updaterate = mysqli_query($con,"update rate_chart set status = 0 where martrial_id = $materialEdit[$key]");
                $insertNewRate = mysqli_query($con,"insert into rate_chart(martrial_id,rate,employee_id,status)value('$materialEdit[$key]','$rate[$key]','$empid','1')");

            }

        }
        if($updateData)
        {
             echo '<script>toastr.options.positionClass = "toast-bottom-right";toastr.success("Material Details update Successfully")</script>';
            //  echo "<script>setTimeout(\"location.href = '../stock/addMaterial.php';\",300);</script>";
        }
    }

    if(isset($_POST['ActionOnMaterial']))
    {
        echo 'Working Data';
        $status                 = $_POST['status'];
        $material_initalUN      = $_POST['material_initalUN'];
        $material_descriptionUN = $_POST['material_descriptionUN'];
        $materialUNID           = $_POST['materialUNID'];
        $rate                   = $_POST['rate'];
        $weight_value           = $_POST['weight_value'];
        $stockUnit              = $_POST['stockUnit'];
        $purchaseUnit           = $_POST['purchaseUnit'];
        $Materialcat            = $_POST['Materialcat'];
        $material_initail = explode('@',$material_initalUN);
        $materialMainID         = $_POST['main_material_idUN'];

        if($status == 'ON')
        {
            $getDeleteAction = mysqli_query($con,"delete from material_master_v where id='$materialUNID'");
        }
        else
        {
            $updateAction = mysqli_query($con,"update material_master_v set material_description='$material_descriptionUN',material_initial='$material_initail[1]',unit_id='$stockUnit',unit_id_purchase='$purchaseUnit',main_material_type_id='$materialMainID',weight_kg='$weight_value',material_category_id='$Materialcat' where id='$materialUNID'");
            echo "update material_master_v set material_description='$material_descriptionUN',material_initial='$material_initail[1]',unit_id='$stockUnit',unit_id_purchase='$purchaseUnit',main_material_type_id='$Materialcat',weight_kg='$weight_value' where id='$materialUNID'";

            $checkMaterialRate = mysqli_query($con,"SELECT * FROM rate_chart WHERE martrial_id = '$materialUNID' and status = '1'");
            $row3 = mysqli_fetch_assoc($checkMakeinRate);

            $rateData = $row3['rate'];
            if($rateData =='')
            {
                $insertNewRate = mysqli_query($con,"insert into rate_chart(martrial_id,rate,employee_id,status)values('$materialUNID','$rate','$empid','1')");
            }
            else
            {
                $updateRate = mysqli_query($con,"update rate_chart set status='0' where martrial_id='$materialUNID'");
                $insertNewRate = mysqli_query($con,"insert into rate_chart(martrial_id,rate,employee_id,status)values('$materialUNID','$rate','$empid','1')");
            }
        }

        if($updateAction || $getDeleteAction)
        {
            echo '<script>toastr.options.positionClass = "toast-bottom-right";toastr.success("Material Details update Successfully")</script>';
            // echo "<script>setTimeout(\"location.href = '../stock/addMaterial.php';\",300);</script>";
        }
    }
?>


