<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SPDEMO - ระบบบริหารจัดการ</title>
    <!-- Favicon-->
    <link rel="icon" href="https://demo.jantra.co/AssetsManage/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="https://demo.jantra.co/AssetsManage/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://demo.jantra.co/AssetsManage/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://demo.jantra.co/AssetsManage/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="https://demo.jantra.co/AssetsManage/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://demo.jantra.co/AssetsManage/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="https://demo.jantra.co/AssetsManage/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>โปรดรอซักครุ่...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars --> 
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">SPDEMO - ระบบบริหารจัดการ</a>
            </div>
        </div>
    </nav>





    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
            
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">เมนูบริหารจัดการ</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>สถิติการใช้งาน</span>
                        </a>
                    </li> 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>ข่าวสาร</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">ประชาสัมพันธ์</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">โครงการ</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">ประกาศ</a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>ผู้ติดต่อ</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/basic-form-elements.html">ข้อความ ถาม-ตอบ</a>
                            </li> 
                            <li>
                                <a href="pages/forms/basic-form-elements.html">ข้อความ ติดต่อกลับ</a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>โครงการต่างๆ</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">รายการโครงการประจำปี</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">โครงการ</a>
                            </li> 
                        </ul>
                    </li>
                     
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="javascript:void(0);">SPDEMO-ระบบบริหารจัดการ Jantra.co</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.01beta
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar --> 
    </section>
