<?php
session_start();
if (!$_SESSION['user_id']){
    header('location:login.php');
}
include('header.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Insert Students</h6><br> -->
            <div class="user col-md-2">
                <button class="btn btn-success btn-user btn-block" data-toggle="modal" data-target="#myModal">Add Students</button>
            </div>
        </div>

        <!-- insert section modal -->
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="user" method="POST">
                                <div class="col-sm-12">
                                    <input type="text" name="firstname" class="form-control form-control-user" id="firstname" placeholder="Please enter Firstname." required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name="lastname" class="form-control form-control-user" id="lastname" placeholder="Please enter Lastname." required>
                                    <div class="help-block with-errors"></div>
                                </div><br>

                                <div class="col-sm-12">
                                    <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Please enter email." required>
                                    <div class="help-block with-errors"></div>
                                </div><br>

                                <div class="col-sm-12">
                                    <input type="text" name="password" class="form-control form-control-user" id="password" placeholder="Please enter Password." required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                
                                <div class="col-sm-12">
                                <select name="teacher_id" class="form-control form-control-user" id="teacher_id">
                                    <option>Choose Teacher</option>
                                    <?php
                                    include('conn.php');
                                    $sql = "SELECT * FROM teacher";
                                    $query = mysqli_query($conn, $sql);
                                    $row = mysqli_num_rows($query);
                                    if ($row > 0) {
                                        while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $res['id'] ?>"><?php echo $res['name'] ?></option>
                                    <?php
                                        }}
                                    ?>
                                </select>
                                </div><br>

                                <div class="col-sm-12">
                                <select name="class_id" class="form-control form-control-user" id="class_id">
                                    <option>Choose Class</option>
                                    <?php
                                    include('conn.php');
                                    $sql = "SELECT * FROM class";
                                    $query = mysqli_query($conn, $sql);
                                    $row = mysqli_num_rows($query);
                                    if ($row > 0) {
                                        while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $res['id'] ?>"><?php echo $res['class_name'] ?></option>
                                    <?php
                                        }}
                                    ?>
                                </select>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                <select name="division_id" class="form-control form-control-user" id="division_id">
                                    <option>Choose Division</option>
                                    <?php
                                    include('conn.php');
                                    $sql = "SELECT * FROM division";
                                    $query = mysqli_query($conn, $sql);
                                    $row = mysqli_num_rows($query);
                                    if ($row > 0) {
                                        while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $res['id'] ?>"><?php echo $res['division_name'] ?></option>
                                    <?php
                                        }}
                                    ?>
                                </select>
                                </div>
                                <br>
                                
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="form_regr">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- end -->






        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr class="bg-primary bg-user bg-block text-white text-center">

                        <th> Firstname </th>
                        <th> Lastname </th>
                        <th> Email </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>

                    <tbody id="listRegistrants">
                        <?php

                        include('conn.php');
                        if ($_SESSION['role'] == 1)
                        {
                            $sql = "SELECT * FROM `user` where role != 1";
                        }elseif($_SESSION['role'] == 3){
                            $teacher_id = $_SESSION['user_id'];
                            $sql = "SELECT * FROM user WHERE teacher_id =".$teacher_id;
                        }
                       
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($query);
                        if ($row > 0) {
                            while ($res = mysqli_fetch_array($query)) {
                        ?>
                                <tr>

                                    <td> <?php echo $res['firstname'];  ?> </td>
                                    <td> <?php echo $res['lastname'];  ?> </td>
                                    <td> <?php echo $res['email'];  ?> </td>
                                    <td> <button onclick="editThisRow(<?php echo $res['id'] ?>)" class="btn btn-success"> Edit </button> </td>
                                    <td> <button onclick="deleteRegRow(<?php echo $res['id'] ?>)" class="btn-danger btn">Delete</button> </td>
                                </tr>
                            <?php

                            }
                        } else { ?>
                            <tr>
                                <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                            </tr>
                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</div>

<!-- End of Page Wrapper -->

<?php
include('footer.php');

?>