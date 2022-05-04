<?php
session_start();
if (!$_SESSION['user_id']) {
    header('location:login.php');
}
include('header.php');
?>

<!-- End of Topbar -->
<div class="container-fluid">
    <div class="row">

        <!-- Begin Page Content -->
        <?php if ($_SESSION['role'] == 1) {

            include('conn.php');
            $sql = "SELECT * FROM user";
            $query = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($query);
        ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Students</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($rowcount); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            include('conn.php');
            $sql = "SELECT * FROM teacher";
            $query = mysqli_query($conn, $sql);
            $rowcount1 = mysqli_num_rows($query);
            ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Teachers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($rowcount1); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            include('conn.php');
            $sql = "SELECT * FROM class";
            $query = mysqli_query($conn, $sql);
            $rowcount2 = mysqli_num_rows($query);
            ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Class</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($rowcount2); ?></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
<?php
        } elseif ($_SESSION['role'] == 3) {
            $teacher_id = $_SESSION['user_id'];
            $sql = "SELECT * FROM user WHERE teacher_id =" . $teacher_id;

            include('conn.php');
            $query = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($query);
?>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Students</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($rowcount); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
        }

        include('footer.php');
?>