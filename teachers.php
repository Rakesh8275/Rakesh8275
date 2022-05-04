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
            <!-- <h6 class="m-0 font-weight-bold text-primary">Insert Teachers</h6><br> -->
            <div class="user col-md-2">
                <button class="btn btn-success btn-user btn-block" data-toggle="modal" data-target="#myModal">Add Teacher</button>
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
                                    <input type="text" name= "name" class="form-control form-control-user" id="name" placeholder="Please enter Name." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name= "place" class="form-control form-control-user" id="place" placeholder="Please enter your place." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name= "email" class="form-control form-control-user" id="email" placeholder="Please enter your email." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name= "phone" class="form-control form-control-user" id="phone" placeholder="Please enter your phone." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name= "experience" class="form-control form-control-user" id="experience" placeholder="Please enter experience." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name= "subject" class="form-control form-control-user" id="subject" placeholder="Please enter subject." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="password" name= "password" class="form-control form-control-user" id="password" placeholder="Please enter password." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="formteachers_reg">Submit</button>
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

                        <th> Name </th>
                        <th> Place </th>
                        <th> Email</th>
                        <th> Phone </th>
                        <th> Experience </th>
                        <th> Subject </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>

                    <tbody id="teacherid">
                        <?php

                        include('conn.php');
                        $sql = "SELECT * FROM `teacher`";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($query);
                        if ($row > 0) {
                            while ($res = mysqli_fetch_array($query)) {
                        ?>
                                <tr>

                                    <td> <?php echo $res['name'];  ?> </td>
                                    <td> <?php echo $res['place'];  ?> </td>
                                    <td> <?php echo $res['email'];  ?> </td>
                                    <td> <?php echo $res['phone'];  ?> </td>
                                    <td> <?php echo $res['experience'];  ?> </td>
                                    <td> <?php echo $res['subject'];  ?> </td>
                                    <td> <button onclick="editThisTeacherRow(<?php echo $res['id'] ?>)"class="btn btn-success"> Edit </button> </td>
                                    <td> <button onclick="deleteTeacherRow(<?php echo $res['id'] ?>)" class="btn-danger btn">Delete</button> </td>
                                </tr>
                                <!-- <tr>
                                    <td><button onclick="updateRow()" class="btn-primary btn">Update</button> </td>
                                </tr> -->
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