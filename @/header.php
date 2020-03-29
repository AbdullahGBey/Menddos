<?php 
require('firewall/waf.php');
$xWAF = new xWAF();
$xWAF->start();

if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)) {exit("NOT ALLOWED");}
ob_start();
require_once '@/config.php';
require_once '@/init.php';
/*if (!(empty($maintaince))) {
die($maintaince);
}*/
if (!($user -> LoggedIn()) || !($user -> notBanned($odb)))
{
	header('location: login.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo htmlspecialchars($sitename); ?> - <?php echo $paginaname; ?></title>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/svg/616/616660.svg">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <link href="a/assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="a/assets\css\metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="a/assets\css\icons.css" rel="stylesheet" type="text/css">
    <link href="a/assets\css\style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.php" class="logo">
                            <span class="logo-light">
                                    <img src="https://image.flaticon.com/icons/svg/616/616660.svg" alt="Smiley face" height="42" width="42"></i> Ninja-Stress
                            </span>
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">


                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                            <!-- language-->


                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <img src="https://image.flaticon.com/icons/svg/2026/2026836.svg" alt="Smiley face" height="25" width="25">
                                </a>
                            </li>

                           

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="https://image.flaticon.com/icons/svg/1798/1798674.svg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.php"><img src="https://www.flaticon.com/premium-icon/icons/svg/656/656856.svg" alt="Smiley face" height="19" width="19"></i> Dashboard</a>
							
                            </li>

 <li class="has-submenu">
                                <a href="freehub.php"><img src="https://image.flaticon.com/icons/svg/1693/1693460.svg" alt="Smiley face" height="25" width="25"></i> FreeHub</a>
								
                            </li>
 <li class="has-submenu">
                                <a href="viphub.php"><img src="https://image.flaticon.com/icons/svg/2286/2286353.svg" alt="Smiley face" height="25" width="25"></i> VipHub</a>
								
                            </li>
 <li class="has-submenu">
                                <a href="captcha.php"><img src="https://image.flaticon.com/icons/svg/1006/1006626.svg" alt="Smiley face" height="25" width="25"></i> CaptchaHub</a>
								
                            </li>
 <li class="has-submenu">
                                <a href="api.php"><img src="https://image.flaticon.com/icons/svg/1849/1849017.svg" alt="Smiley face" height="25" width="25"></i> Api-Acsses</a>
								
                            </li>

                            <li class="has-submenu">
                                <a href="shop.php"><img src="https://image.flaticon.com/icons/svg/2575/2575814.svg" alt="Smiley face" height="25" width="25"></i> Purchase</a>
								
                            </li>
 <li class="has-submenu">
                                <a href="purchase"><img src="https://image.flaticon.com/icons/svg/1828/1828575.svg" alt="Smiley face" height="25" width="25"></i> Addon</a>
								
                            </li>

 <li class="has-submenu">
                                <a href="https://discord.gg/Akv6jbq"><img src="https://www.flaticon.com/premium-icon/icons/svg/2626/2626288.svg" alt="Smiley face" height="25" width="25"></i> DIscord</a>
								
                            </li>
<?php
						if ($user -> isAdmin($odb) ) {
						?>
 <li class="has-submenu">
                                <a href="th3fuck3r/admin/"><img src="https://image.flaticon.com/icons/svg/2416/2416666.svg" alt="Smiley face" height="25" width="25"></i> Admin Panel</a>
								
                            </li>
<?php
						}
						?>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->
