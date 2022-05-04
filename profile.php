<?php
session_start();
if (!$_SESSION['user_id']) {
    header('location:login.php');
}
include('header.php');

include('conn.php');
if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
    $sql = "SELECT * FROM user";
    $query = mysqli_query($conn, $sql);
    $res = mysqli_fetch_array($query);
?>
    <div class="col-lg-6">

        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">First Name</h6>
            </div>
            <div class="card-body">
                <?php echo $res['firstname']; ?>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Last Name</h6>
            </div>
            <div class="card-body">
                <?php echo $res['lastname']; ?>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Email</h6>
            </div>
            <div class="card-body">
                <?php echo $res['email']; ?>
            </div>
        </div>
    <?php
} elseif ($_SESSION['role'] == 3) {
    $sql1 = "SELECT * FROM teacher";
    $query1 = mysqli_query($conn, $sql1);
    $res1 = mysqli_fetch_array($query1);
    ?>
        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Name</h6>
                </div>
                <div class="card-body">
                    <?php echo $res1['name']; ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Place</h6>
                </div>
                <div class="card-body">
                    <?php echo $res1['place']; ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                </div>
                <div class="card-body">
                    <?php echo $res1['email']; ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Phone</h6>
                </div>
                <div class="card-body">
                    <?php echo $res1['phone']; ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Experience</h6>
                </div>
                <div class="card-body">
                    <?php echo $res1['experience']; ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Subject</h6>
                </div>
                <div class="card-body">
                    <?php echo $res1['subject']; ?>
                </div>
            </div>
        <?php
    }
    include("footer.php")
        ?>