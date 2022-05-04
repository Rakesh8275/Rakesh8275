<?php

include('conn.php');


$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
// print_r($_POST);exit;
$sql = "UPDATE user set firstname='$firstname', lastname='$lastname', email='$email', password='$password' where id=$id";
// print_r($sql);exit;
$query = mysqli_query($conn, $sql);

if ($query) {
  $response = array('status' => 200, 'message' => 'Success');
  echo json_encode($response);
} 
 else {
  $response = array('status' => 500, 'message' => 'Failure');
  echo json_encode($response);
?>
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
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="form_reg">Submit</button>
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