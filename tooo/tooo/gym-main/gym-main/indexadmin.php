<?php
session_start();
require ('CheckLogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="Public/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="indexadmin.php">Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <!--    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">-->
    <!--        <div class="input-group">-->
    <!--            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />-->
    <!--            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
    <!--        </div>-->
    <!--    </form>-->
    <!-- Navbar-->
    <div class="ms-auto">
        <span class="welcome" style="color:#fff">Xin chào: <b><?=isset($_SESSION["username"])?$_SESSION["username"]:""?></b></span>
    </div>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="ViewsAdmin/vContact.php">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><?=isset($_SESSION["username"])?"<a class='dropdown-item' href='Logout.php'>Logout</a>":"<a class='dropdown-item' href='index.php'>Log Out</a>"?></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="indexadmin.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="?module=user">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <!--                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">-->
                    <!--                        <nav class="sb-sidenav-menu-nested nav">-->
                    <!--                            <a class="nav-link" href="layout-static.html">Static Navigation</a>-->
                    <!--                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>-->
                    <!--                        </nav>-->
                    <!--                    </div>-->
                    <a class="nav-link" href="?module=category">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Categories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <!--                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">-->
                    <!--                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">-->
                    <!--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">-->
                    <!--                                Authentication-->
                    <!--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>-->
                    <!--                            </a>-->
                    <!--                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">-->
                    <!--                                <nav class="sb-sidenav-menu-nested nav">-->
                    <!--                                    <a class="nav-link" href="login.html">Login</a>-->
                    <!--                                    <a class="nav-link" href="register.html">Register</a>-->
                    <!--                                    <a class="nav-link" href="password.html">Forgot Password</a>-->
                    <!--                                </nav>-->
                    <!--                            </div>-->
                    <!--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">-->
                    <!--                                Error-->
                    <!--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>-->
                    <!--                            </a>-->
                    <!--                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">-->
                    <!--                                <nav class="sb-sidenav-menu-nested nav">-->
                    <!--                                    <a class="nav-link" href="401.html">401 Page</a>-->
                    <!--                                    <a class="nav-link" href="404.html">404 Page</a>-->
                    <!--                                    <a class="nav-link" href="500.html">500 Page</a>-->
                    <!--                                </nav>-->
                    <!--                            </div>-->
                    <!--                        </nav>-->
                    <!--                    </div>-->
                    <a class="nav-link" href="?module=product">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Products
                    </a>
                    <a class="nav-link" href="?module=order">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Order
                    </a>
                    <div class="sb-sidenav-menu-heading">Account</div>
                    <a class="nav-link" href="?module=contact">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Contact info
                    </a>
                    <a class="nav-link" href="Logout.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as: <?=isset($_SESSION["username"])?$_SESSION["username"]:""?></div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <?php
        $module = "";
        if(isset($_REQUEST["module"]))
            $module = $_REQUEST["module"];
        if($module=="user")
        {
            require("Controller/ctlUser.php");
        }
        else if($module=="category")
        {
            require("Controller/ctlCategory.php");
        }
        else if($module=="product")
        {
            require("Controller/ctlProduct.php");
        }
        else if($module=="order")
        {
            require("Controller/ctlOrder.php");
        }
        else if($module=="contact")
        {
            require("ViewsAdmin/vContact.php");
        }
        else
        {
            require("ViewsAdmin/vHome.php");
        }
        ?>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="Public/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="Public/assets/demo/chart-area-demo.js"></script>
<script src="Public/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="Public/js/datatables-simple-demo.js"></script>
</body>
</html>
