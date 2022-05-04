<?php
session_start();
if (!$_SESSION['user_id']){
    header('location:login.php');
}
include('header.php'); ?>


<!-- Begin Page Content -->
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Insert Subject</h6><br> -->
            <div class="user col-md-2">
                <button class="btn btn-success btn-user btn-block" data-toggle="modal" data-target="#myModal">Add Subject</button>
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
                                    <input type="text" name= "subject_name" class="form-control form-control-user" id="subject_name" placeholder="Please enter Subject Name." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <input type="text" name= "subject_key" class="form-control form-control-user" id="subject_key" placeholder="Please enter Subject Key." value ="" required>
                                    <div class="help-block with-errors"></div>
                                </div><br>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="formsubject_reg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- end -->






        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr class="bg-primary bg-user bg-block text-white text-center">

                        <th> Subject Name </th>
                        <th> Subject Key </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>

                    <tbody id="subjectid">
                        <?php

                        include('conn.php');
                        $sql = "SELECT * FROM `subject_`";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($query);
                        if ($row > 0) {
                            while ($res = mysqli_fetch_array($query)) {
                        ?>
                                <tr>

                                    <td> <?php echo $res['subject_name'];  ?> </td>
                                    <td> <?php echo $res['subject_key'];  ?> </td>
                                    <td> <button onclick="editThisSubjectRow(<?php echo $res['id'] ?>)" class="btn btn-success">Edit</button> </td>
                                    <td> <button onclick="DeleteSubjectRow(<?php echo $res['id'] ?>)" class="btn-danger btn">Delete</button> </td>
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

