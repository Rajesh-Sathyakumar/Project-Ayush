<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard </title>

    <!-- Bootstrap -->
    <link href="../Content/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../Content/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../Content/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../Content/css/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../Content/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../Content/css/jqvmap.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../Content/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme S../Contenttyle -->
    <link href="../Content/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Ministry Of Ayush</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->

                <span style="font-size: 30px"class="glyphicon glyphicon-user"></span>
                <h2>Welcome,ABC</h2>


                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="index1.php"><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span></a>

                            </li>
                            <li><a><i class="fa fa-edit"></i> Drugs Types <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../php-mysql-crud-operations/index.php?type=1"> Ayurveda </a></li>
                                    <li><a href="../php-mysql-crud-operations/index.php?type=2"> Siddha </a></li>
                                    <li><a href="../php-mysql-crud-operations/index.php?type=3"> homeopathy</a></li>
                                    <li><a href="../php-mysql-crud-operations/index.php?type=4"> Unani </a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html"><i class="fa fa-home"></i> FAQ's<span class="fa fa-chevron"></span></a>

                            </li>
                            <li><a href="contactform.html"><i class="fa fa-home"></i> Contact us <span class="fa fa-chevron"></span></a>

                            </li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle"></div>
                    <div class="navbar-nav">
                        <h1> <i class="fa fa-paw"></i> <span>ABC COMPANY</span></a></h1>
                    </div>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span style="font-size: 25px" class="glyphicon glyphicon-user"></span> ABC
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="../Modules/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

            <!-- /top tiles -->
            <br />
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Description</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <h4>History</h4>
                            <div>we started this company is 1994... </div>
                            <h4>Address</h4>
                            <div>karnataka,mysore</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Contact us</h2>
                            <li>
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            </li>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <h4>Address</h4>
                            <div>karnataka,mysore</div>
                            <h2>E-mail:</h2>
                            <div>abc@gmail.com</div>
                            <h2>Phone</h2>
                            <div>123456789</div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Any new Drug?</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="">
                            <span class="glyphicon glyphicon-plus">
                                <div class="count">179</div>

                                <h3>Ayurveda</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>

                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count">179</div>


                                    <h3>Siddha</h3>
                                    <p>Lorem ipsum psdea itgum rixt.</p>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count">179</div>

                                    <h3>Unani</h3>
                                    <p>Lorem ipsum psdea itgum rixt.</p>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count">179</div>

                                    <h3>Hoemopathy</h3>
                                    <p>Lorem ipsum psdea itgum rixt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 widget_tally_box">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>User Uptake</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div id="graph_bar" style="width:100%; height:200px;"></div>

                            <div class="col-xs-12 bg-white progress_summary">

                                <div class="row">
                                    <div class="progress_title">
                                        <span class="left">Escudor Wireless 1.0</span>
                                        <span class="right">This sis</span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-xs-2">
                                        <span>SSD</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 more_info">
                                        <span>89%</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="progress_title">
                                        <span class="left">Mobile Access</span>
                                        <span class="right">Smart Phone</span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-xs-2">
                                        <span>App</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="79"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 more_info">
                                        <span>79%</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="progress_title">
                                        <span class="left">WAN access users</span>
                                        <span class="right">Total 69%</span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-xs-2">
                                        <span>Usr</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="69"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 more_info">
                                        <span>69%</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Ministry of Ayush-drug monitoring
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../Content/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../Content/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="../Content/js/fastclick.js"></script>
<!-- NProgress -->
<script src="../Content/js/nprogress.js"></script>
<!-- Chart.js -->
<script src="../Content/js/chart.js"></script>
<!-- gauge.js -->
<script src="../Content/js/gauge.js"></script>
<!-- bootstrap-progressbar -->
<script src="../Content/js/bootstrap-progressbar.js"></script>
<!-- iCheck -->
<script src="../Content/js/icheck.js"></script>
<!-- Skycons -->
<script src="../Content/js/skycons.js"></script>
<!-- Flot -->
<script src="../Content/js/jquery.flot.js"></script>
<script src="../Content/js/jquery.flot.pie.js"></script>
<script src="../Content/js/jquery.flot.time.js"></script>
<script src="../Content/js/jquery.flot.stack.js"></script>
<script src="../Content/js/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../Content/js/jquery.flot.orderBars.js"></script>
<script src="../Content/js/jquery.flot.spline.js"></script>
<script src="../Content/js/curvedLines.js"></script>
<!-- DateJS -->
<script src="../Content/js/date.js"></script>
<!-- JQVMap -->
<script src="../Content/js/jquery.vmap.js"></script>
<script src="../Content/js/jquery.vmap.world.js"></script>
<script src="../Content/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../Content/js/moment.min.js"></script>
<script src="../Content/js/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../Content/js/custom.js"></script>

</body>
</html>
