<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Welcome
                    <strong>

                    </strong>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> 
            <!-- admin oly and teavcher -->
            
            <?php if($_SESSION['role'] == 2){ ?>
            <li class="nav-item">
                <a class="nav-link" href="reverse.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Reverse String </span></a>
            </li>
            <?php
                }?>
                 <?php if($_SESSION['role'] == 3){ ?>
            <li class="nav-item">
                <a class="nav-link" href="listregistrants.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>View Students </span></a>
            </li>
            <?php
                }?>
           <?php
           if($_SESSION['role'] == 1){ ?>
           <li class="nav-item">
                <a class="nav-link" href="listregistrants.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Students</span></a>
            </li>
            <!-- admin oly -->
            <li class="nav-item">
                <a class="nav-link" href="login-logout.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Activity log</span></a>
            </li>
            <!-- students -->
            
            <!-- admin oly -->
            <li class="nav-item">
                <a class="nav-link" href="class.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Class </span></a>
            </li>
            <!-- admin oly -->
            <li class="nav-item">
                <a class="nav-link" href="division.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Division </span></a>
            </li>
            <!-- admin oly -->
            <li class="nav-item">
                <a class="nav-link" href="teachers.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Teachers </span></a>
            </li>
            <!-- admin oly -->
            <li class="nav-item">
                <a class="nav-link" href="subject.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Subject</span></a>
            </li>
            <?php
           }
           ?>
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <?php echo "Welcome   " .     $_SESSION['firstname']; ?>
                    

                    <span class="user" style = "color:white; background-color:red; margin-left:auto; margin-right:auto; text-align:center;">   Your last login : <?=$_SESSION['lastLogOut']?></span>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <?php echo $_SESSION['firstname']; ?>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <a class="dropdown-item" href="login-logout.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->