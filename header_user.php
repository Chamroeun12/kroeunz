<?php
include 'connection.php';  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartBright International School</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/activemenu.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Get cookie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
    aside a p {
        color: #fff;
    }

    aside a i {
        color: #fff;
    }

    .stu-list {
        color: #152550;
    }

    .btnhover1:hover {
        background: #5b6684;
        color: #fff;
    }

    .bimg {
        border-top: 1px solid #5b6684;
        border-bottom: 1px solid #5b6684;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center"
            style="font-family:Khmer OS Siemreap">
            <img class="animation__shake" src="images/SiSlogo.png" height="100">
            <div class="font-weight-light">ស្មាតប្រាយ អ៊ិនធើណាសិនណលស្គូល</div>
            <div class="font-weight-light">SmartBright International School</div>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"
                            style="font-size:23px;"></i></a>
                </li>
                
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar" style="background-color: #152550; color: #fff;">
            <!-- Brand Logo -->
            <a href="index_user.php" class="brand-link">
                <img src="images/SiSlogo.png" class="brand-image" width="">
                <!-- <span class="brand-text font-weight-light">Management System</span> -->
                <span class="brand-text text-white" style="font-family:Khmer OS Siemreap; font-size:13px;">
                    ស្មាតប្រាយ អ៊ិនធើណាសិនណលស្គូល
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mb-3 d-flex bimg pt-2 pb-2">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-white">
                            <!-- <?= $_SESSION["user"]; ?> -->
                            <?php echo $_SESSION["user"] ?>
                        </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->

                <nav class="mt-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index_user.php" class="nav-link btnhover1">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="score.php" class="nav-link btnhover1">
                                <i class="nav-icon far fa-chart-bar"></i>
                                <p>
                                    Scores
                                </p>
                            </a>
                        </li>  
                        <li class="nav-item">
                             <a href="score.php" class="nav-link btnhover1">
                                <i class="nav-icon fas fa-tasks"></i>
                                <p>
                                    Attendace
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link btnhover1">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>