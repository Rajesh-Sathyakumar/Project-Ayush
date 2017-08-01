<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location:../Modules/login.php');
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
    <link href="Content/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Content/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Content/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Content/css/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="Content/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Content/css/jqvmap.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="Content/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Content/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"> <i class="fa fa-paw"></i> <span>Ministry Of Ayush</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->

                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="http://localhost/final/dashboard/"><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span></a>

                            </li>
                            <li><a><i class="fa fa-edit"></i> Drugs Types <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="php-mysql-crud-operations-hack/Ayurveda.php"> Ayurveda </a></li>
                                    <li><a href="php-mysql-crud-operations-hack/Siddha.php"> Siddha </a></li>
                                    <li><a href="php-mysql-crud-operations-hack/Homeopathy.php"> homeopathy</a></li>
                                    <li><a href="php-mysql-crud-operations-hack/Unani.php"> Unani </a></li>
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
                        <h1>  <span id="companyname"></span></a></h1>
                    </div>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['name'];?>
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
                                <li><a href="../modules/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">


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
                            <div id="history"></div>
                            <h4>Address</h4>
                            <div id="address"></div>
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
                            <div id="contactaddress"></div>
                            <h2>E-mail:</h2>
                            <div id="email"></div>
                            <h2>Phone</h2>
                            <div id="phonenumber"></div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Drug Statistics</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <div class="row">
                            <div class="animated flipInY col-xs-4">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                </div>
                                <div class="count" id="ayurvedacount"></div>

                                <h3>Ayurveda</h3>
                                
                            </div>
                        </div>

                            <div class="animated flipInY col-xs-4">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count" id="siddhacount"></div>

                                    <h3>Siddha</h3>

                                </div>
                            </div>
                            <div class="animated flipInY col-xs-4">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count" id="Approved"> 14</div>

                                    <h3>Approved</h3>

                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <div class="animated flipInY col-xs-4">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count" id="unanicount"></div>

                                    <h3>Unani</h3>

                                </div>
                            </div>
                            <div class="animated flipInY col-xs-4">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count" id="homeopathycount"></div>

                                    <h3>Homeopathy</h3>

                                </div>
                            </div>
                                <div class="animated flipInY col-xs-4">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                        </div>
                                        <div class="count" id="Rejected">5</div>

                                        <h3>Rejected</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
    </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_320 overflow_hidden">

                    <div class="x_content">
                        <table class="" style="width:100%">
                            <tbody><tr>
                                <th style="width:37%;">
                                    <p>Top 5 Diseases Cured with drugs manufactured</p>
                                </th>
                                <th>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                        <p class="">Diseases</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <p class="">Percentage</p>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                    <canvas class="canvasDoughnut" height="175" width="175" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
                                </td>
                                <td>
                                    <table class="tile_info">
                                        <tbody><tr>
                                            <td>
                                                <p><i class="fa fa-square blue"></i>Tuberculosis </p>
                                            </td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square green"></i>Malaria </p>
                                            </td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square purple"></i>Diabetes </p>
                                            </td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square aero"></i>Cancer </p>
                                            </td>
                                            <td>15%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square red"></i>Fever </p>
                                            </td>
                                            <td>30%</td>
                                        </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- jQuery -->
<script src="Content/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Content/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="Content/js/fastclick.js"></script>
<!-- NProgress -->
<script src="Content/js/nprogress.js"></script>
<!-- Chart.js -->
<script src="Content/js/chart.js"></script>
<!-- gauge.js -->
<script src="Content/js/gauge.js"></script>
<!-- bootstrap-progressbar -->
<script src="Content/js/bootstrap-progressbar.js"></script>
<!-- iCheck -->
<script src="Content/js/icheck.js"></script>
<!-- Skycons -->
<script src="Content/js/skycons.js"></script>
<!-- Flot -->
<script src="Content/js/jquery.flot.js"></script>
<script src="Content/js/jquery.flot.pie.js"></script>
<script src="Content/js/jquery.flot.time.js"></script>
<script src="Content/js/jquery.flot.stack.js"></script>
<script src="Content/js/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="Content/js/jquery.flot.orderBars.js"></script>
<script src="Content/js/jquery.flot.spline.js"></script>
<script src="Content/js/curvedLines.js"></script>
<!-- DateJS -->
<script src="Content/js/date.js"></script>
<!-- JQVMap -->
<script src="Content/js/jquery.vmap.js"></script>
<script src="Content/js/jquery.vmap.world.js"></script>
<script src="Content/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="Content/js/moment.min.js"></script>
<script src="Content/js/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="Content/js/custom.js"></script>
 <script src="../Modules/Scripts/jquery.flot.pie.js"></script>
        <script src="../Modules/Scripts/Chart.min.js"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        var settings = {
            "url": "http://localhost/final/dashboardstats.php",
            "method": "GET"
        }

        $.ajax(settings).done(function (response) {
            console.log(response);
            $('#history').html(JSON.parse(response).CompanyHistory);
            $('#address').html(JSON.parse(response).Address);
            $('#email').html(JSON.parse(response).EmailAddress);
            $('#contactaddress').html(JSON.parse(response).Address);
            $('#ayurvedacount').html(JSON.parse(response).AyurvedaCount);
            $('#unanicount').html(JSON.parse(response).UnaniCount);
            $('#siddhacount').html(JSON.parse(response).SiddhaCount);
            $('#homeopathycount').html(JSON.parse(response).HomeoPathyCount);
            $('#companyname').html(JSON.parse(response).CompanyName);
        });
    });


</script>

</body>
</html>
