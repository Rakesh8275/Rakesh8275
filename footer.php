

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<!-- end -->


<!-- CLASS SECTION -->
<!-- add class ajax call setup -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#formClass_reg', function() {

            var class_name = $("#class_name").val();
            var teacherselect = $('#teacherselect').val();


            $.ajax({
                url: 'action_class.php',
                type: 'POST',
                data: {
                    class_name: class_name,
                    teacherselect:teacherselect

                    //division_name= the variable class hold the value of variable division_name in the 243
                },
                success: function(response) {
                    $('#classname').find('tr').remove();
                    console.log(response);
                    $('#myModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#classname").append("<tr><th> " + value.class_name + " </th><th> <button class='btn btn-success'onclick='editThisClassRow(" + value.id + ")'>Edit</button> </th><th> <button onclick='deleteClassRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>

<!-- click edit of class-->
<script>
    function editThisClassRow(id) {
        // current row id
        $('#editClassnameModel').modal('show');
        $.ajax({
            url: 'getClassDetails.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                var objJSON = JSON.parse(response);
                console.log(objJSON.class_name);
                $('#editClassnameModal').val(objJSON.class_name);
                $('#editclassIdModal').val(objJSON.id);
            }
        });
        
    }
</script>
<!-- end -->

<!-- Update class row -->
<script>
    $(document).ready(function() {
    $(document).on('click', '#updateFormClass', function() {
    // function updateThisClassRow(id) {
        var class_name = $('#editClassnameModal').val();
        var id = $('#editclassIdModal').val();
        $.ajax({
            url: 'updateclass.php',
            type: 'POST',
            data: {
                id: id,
                class_name: class_name
            },
            success: function(response) {
                $('#classname').find('tr').remove();
                $('#editClassnameModel').modal('hide');
                var objJSON = JSON.parse(response);
                $.each(objJSON, function(key, value) {
                    $("#classname").append("<tr><th> " + value.class_name + " </th><th> <button class='btn btn-success' onclick='editThisClassRow(" + value.id + ")'  >Edit</button> </th><th> <button onclick='deleteClassRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                });

            }
        });
    // };
    });
    });
</script>
<!-- end -->
<!-- Modal -->
<div id="editClassnameModel" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="user"  method="POST">
                        <div class="col-sm-12">
                            <input type="text" name="class_name" value="" class="form-control form-control-user" id="editClassnameModal" placeholder="Please enter Class Name." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <input type="hidden" name="editclassId" id="editclassIdModal">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-user btn-block updateFormClass" id="updateFormClass">Update</button>
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

<!-- END -->
<!-- end -->
<!-- class delete functionality -->
<script>
    function deleteClassRow(id) {
        //starting ajax 

        $.ajax({
            //(url parameter is a string)it contains the URL you want to reach with the Ajax call,
            url: 'delete_class.php',
            //the method type post
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {

                alert('deleted');
                // this removes the data in between the division and the updated table in displayed
                $('#classname').find('tr').remove();
                //parsing the data recieved from the database(convert the data of database to javascript object)
                var objJSON = JSON.parse(response);
                //iteration function used to print the array of data present in the database table
                $.each(objJSON, function(key, value) {
                    $("#classname").append("<tr><th> " + value.class_name + " </th></th><th> <button class='btn btn-success'id='edit'>Edit</button> </th><th> <button onclick='deleteClassRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                });
            }

        });
    }
</script>
<!-- end delete -->

<!-- DIVISION SECTION -->
<!-- add division ajax call setup -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#formdivision_reg', function() {

            var division_name = $("#division_name").val();


            $.ajax({
                url: 'action_division.php',
                type: 'POST',
                data: {
                    division_name: division_name,

                    //division_name= the variable class hold the value of variable division_name in the 243
                },
                success: function(response) {
                    $('#divisionname').find('tr').remove();
                    console.log(response);
                    $('#myModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#divisionname").append("<tr><th> " + value.division_name + " </th><th> <button class='btn btn-success'onclick='editThisDivisionRow(" + value.id + ")'>Edit</button> </th><th> <button onclick='deleteDivisionRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>

<!-- click edit of division-->
<script>
    function editThisDivisionRow(id) {
        // current row id
        $('#editDivisionModal').modal('show');
        $.ajax({
            url: 'getDivisionDetails.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                var objJSON = JSON.parse(response);
                $('#editdivisionname').val(objJSON.division_name);
                $('#editdivisionId').val(objJSON.id);
            }
        });
    }
</script>
<!-- end -->

<!-- Update division row -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#updateFormDivision', function() {
            var division_name = $('#editdivisionname').val();
            var id = $('#editdivisionId').val();
            $.ajax({
                url: 'update_division.php',
                type: 'POST',
                data: {
                    id: id,
                    division_name: division_name
                },
                success: function(response) {
                    $('#divisionname').find('tr').remove();
                    $('#editDivisionModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#divisionname").append("<tr><th> " + value.division_name + " </th> <th> <button onclick='editThisDivisionRow(" + value.id + ")' class='btn btn-success'>Edit</button> </th><th> <button onclick='deleteRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>
<!-- end -->
<!-- Modal -->
<div id="editDivisionModal" class="modal fade" role="dialog">
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
                            <input type="text" name="division_name" class="form-control form-control-user" id="editdivisionname" placeholder="Please enter Division name." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <input type="hidden" name="editdivisionId" id="editdivisionId">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-user btn-block" id="updateFormDivision">Update</button>
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

<!-- END -->


<!-- end -->
<!-- division delete functionality -->
<script>
    function deleteDivisionRow(id) {
        //starting ajax 

        $.ajax({
            //(url parameter is a string)it contains the URL you want to reach with the Ajax call,
            url: 'delete_division.php',
            //the method type post
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {

                alert('deleted');
                // this removes the data in between the division and the updated table in displayed
                $('#divisionname').find('tr').remove();
                //parsing the data recieved from the database(convert the data of database to javascript object)
                var objJSON = JSON.parse(response);
                //iteration function used to print the array of data present in the database table
                $.each(objJSON, function(key, value) {
                    $("#divisionname").append("<tr><th> " + value.division_name + " </th> <th> <button class='btn btn-success'id='edit'>Edit</button> </th><th> <button onclick='deleteDivisionRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                });
            }

        });
    }
</script>

<!-- SUBJECT SECTION -->
<!-- add subject ajax call setup -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#formsubject_reg', function() {

            var subject_name = $("#subject_name").val();
            var subject_key = $("#subject_key").val();


            $.ajax({
                url: 'action_subject.php',
                type: 'POST',
                data: {
                    subject_name: subject_name,
                    subject_key: subject_key,

                    //class= the variable class hold the value of variable class_name in the 243
                },
                success: function(response) {
                    $('#subjectid').find('tr').remove();
                    console.log(response);
                    $('#myModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#subjectid").append("<tr><th> " + value.subject_name + " </th><th> " + value.subject_key + " </th><button class='btn btn-success'onclick='editThisSubjectRow(" + value.id + ")'>Edit</button> </th><th> <button onclick='DeleteSubjectRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>

<!-- click edit of Subject-->
<script>
    function editThisSubjectRow(id) {
        // current row id
        $('#editSubjectModal').modal('show');
        $.ajax({
            url: 'getSubjectDetails.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                var objJSON = JSON.parse(response);
                $('#editsubject_name').val(objJSON.subject_name);
                $('#editsubject_key').val(objJSON.subject_key);
                $('#editsubjectId').val(objJSON.id);
            }
        });
    }
</script>
<!-- end -->

<!-- Update Subject row -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#updateFormSubject', function() {
            var subject_name = $('#editsubject_name').val();
            var subject_key = $('#editsubject_key').val();
            var id = $('#editsubjectId').val();
            $.ajax({
                url: 'update_subject.php',
                type: 'POST',
                data: {
                    id: id,
                    subject_name: subject_name,
                    subject_key: subject_key
                },
                success: function(response) {
                    $('#subjectid').find('tr').remove();
                    $('#editSubjectModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#subjectid").append("<tr><th> " + value.subject_name + " </th> <th> " + value.subject_key + " </th> <th> <button onclick='editThisSubjectRow(" + value.id + ")' class='btn btn-success'>Edit</button> </th><th> <button onclick='DeleteSubjectRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>
<!-- end -->
<!-- Subject Modal -->
<div id="editSubjectModal" class="modal fade" role="dialog">
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
                            <input type="text" name="subject_name" class="form-control form-control-user" id="editsubject_name" placeholder="Please enter Subject name." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="subject_key" class="form-control form-control-user" id="editsubject_key" placeholder="Please enter Subject Key." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <input type="hidden" name="editsubjectId" id="editsubjectId">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-user btn-block" id="updateFormSubject">Update</button>
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

<!-- END -->

<!-- subject delete functionality -->
<script>
    function DeleteSubjectRow(id) {
        //starting ajax 

        $.ajax({
            //(url parameter is a string)it contains the URL you want to reach with the Ajax call,
            url: 'delete_subject.php',
            //the method type post
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {

                alert('deleted');
                // this removes the data in between the division and the updated table in displayed
                $('#subjectid').find('tr').remove();
                //parsing the data recieved from the database(convert the data of database to javascript object)
                var objJSON = JSON.parse(response);
                //iteration function used to print the array of data present in the database table
                $.each(objJSON, function(key, value) {
                    $("#subjectid").append("<tr><th> " + value.subject_name + " </th><th> " + value.subject_key + " </th></th><th> <button class='btn btn-success'onclick='editThisSubjectRow(" + value.id + ")'>Edit</th><th> <button onclick='DeleteSubjectRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                });
            }

        });
    }
</script>
<!-- end  -->
<!-- TEACHER SECTION -->
<!-- add teacher ajax call setup -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#formteachers_reg', function() {

            var name = $("#name").val();
            var place = $("#place").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var experience = $("#experience").val();
            var subject = $("#subject").val();
            var password = $('#password').val();


            $.ajax({
                url: 'action_teachers.php',
                type: 'POST',
                data: {
                    name: name,
                    place: place,
                    email: email,
                    phone: phone,
                    experience: experience,
                    subject: subject,
                    password: password

                    //division_name= the variable class hold the value of variable division_name in the 243
                },
                success: function(response) {
                    $('#teacherid').find('tr').remove();
                    console.log(response);
                    $('#myModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#teacherid").append("<tr><th> " + value.name + " </th> <th> " + value.place + " </th> <th> " + value.email + " </th> <th> " + value.phone + " </th> <th> " + value.experience + " </th> <th> " + value.subject + " </th><th> <button class='btn btn-success'onclick='editThisTeacherRow(" + value.id + ")'>Edit</button> </th><th> <button onclick='deleteTeacherRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>

<!-- click edit of teacher-->
<script>
    function editThisTeacherRow(id) {
        // current row id
        $('#editTeacherModal').modal('show');
        $.ajax({
            url: 'getTeacherDetails.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                var objJSON = JSON.parse(response);
                $('#edit_name').val(objJSON.name);
                $('#edit_place').val(objJSON.place);
                $('#edit_email').val(objJSON.email);
                $('#edit_phone').val(objJSON.phone);
                $('#edit_experience').val(objJSON.experience);
                $('#edit_subject').val(objJSON.subject);
                $('#editteacherId').val(objJSON.id);
                $("#edit_password").val(objJSON.password)
            }
        });
    }
</script>
<!-- end -->

<!-- Update teacher row -->
<script>
    $(document).ready(function() {
        $(document).on('click', '.updateTeacherClass', function() {

            var name = $("#edit_name").val();
            var place = $("#edit_place").val();
            var email = $("#edit_email").val();
            var phone = $("#edit_phone").val();
            var experience = $("#edit_experience").val();
            var subject = $("#edit_subject").val();
            var id = $('#editteacherId').val();
            $.ajax({
                url: 'updateteacher.php',
                type: 'POST',
                data: {
                    id: id,
                    name: name,
                    place: place,
                    email: email,
                    phone: phone,
                    experience: experience,
                    subject: subject
                },
                success: function(response) {
                    $('#teacherid').find('tr').remove();
                    $('#editTeacherModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#teacherid").append("<tr><th> " + value.name + " </th> <th> " + value.place + " </th> <th> " + value.email + " </th> <th> " + value.phone + " </th> <th> " + value.experience + " </th> <th> " + value.subject + " </th> <th> <button onclick='editThisTeacherRow(" + value.id + ")' class='btn btn-success'>Edit</button> </th><th> <button onclick='DeleteTeacherRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>
<!-- end -->
<!-- Teacher Modal -->
<div id="editTeacherModal" class="modal fade" role="dialog">
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
                            <input type="text" name="name" class="form-control form-control-user" id="edit_name" placeholder="Please enter  name." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="place" class="form-control form-control-user" id="edit_place" placeholder="Please enter place." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="email" class="form-control form-control-user" id="edit_email" placeholder="Please enter email." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="phone" class="form-control form-control-user" id="edit_phone" placeholder="Please enter phone numner." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="experience" class="form-control form-control-user" id="edit_experience" placeholder="Please enter experience ." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="subject" class="form-control form-control-user" id="edit_subject" placeholder="Please enter Subject ." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control form-control-user" id="edit_password" placeholder="Please enter password." value="" required>
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <input type="hidden" name="editteacherId" id="editteacherId">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-user btn-block updateTeacherClass" id="updateFormteacher">Update</button>
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

<!-- END -->
<!-- end -->
<!-- teacher delete functionality -->
<script>
    function deleteTeacherRow(id) {
        //starting ajax 

        $.ajax({
            //(url parameter is a string)it contains the URL you want to reach with the Ajax call,
            url: 'delete_teachers.php',
            //the method type post
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {

                alert('deleted');
                // this removes the data in between the division and the updated table in displayed
                $('#teacherid').find('tr').remove();
                //parsing the data recieved from the database(convert the data of database to javascript object)
                var objJSON = JSON.parse(response);
                //iteration function used to print the array of data present in the database table
                $.each(objJSON, function(key, value) {
                    $("#teacherid").append("<tr><th> " + value.name + " </th> <th> " + value.place + " </th> <th> " + value.email + " </th> <th> " + value.phone + " </th> <th> " + value.experience + " </th> <th> " + value.subject + " </th><th> <button onclick='editThisTeacherRow(" + value.id + ")'class='btn btn-success'id='edit'>Edit</button> </th><th> <button onclick='deleteTeacherRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                });
            }

        });
    }
</script>
<!-- end delete -->


<!-- REGISTRATION SECTION -->

<!-- add students ajax call setup -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#form_regr', function() {

            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var teacher_id = $('#teacher_id').val();
            var class_id = $('#class_id').val();
            var division_id = $('#division_id').val();

            console.log(division_id);
            $.ajax({
                url: 'action_insert.php',
                type: 'POST',
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    password: password,
                    teacher_id: teacher_id,
                    class_id: class_id,
                    division_id: division_id
                },
                success: function(response) {
                    $('#listRegistrants').find('tr').remove();
                    $('#myModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#listRegistrants").append("<tr><th> " + value.firstname + " </th><th> " + value.lastname + " </th><th> " + value.email + "  </th><th> <button class='btn btn-success'   onclick='editThisRow(" + value.id + ")'  >Edit</button> </th><th> <button onclick='deleteRegRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>
<!-- deleteRow -->
<!-- list registrants delete functionality -->
<script>
    function deleteRegRow(id) {
        //starting ajax 
        $.ajax({
            //(url parameter is a string)it contains the URL you want to reach with the Ajax call,
            url: 'delete_registrants.php',
            //the method type post
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {

                alert('deleted');
                // this removes the data in between the division and the updated table in displayed
                $('#listRegistrants').find('tr').remove();
                //parsing the data recieved from the database(convert the data of database to javascript object)
                var objJSON = JSON.parse(response);
                //iteration function used to print the array of data present in the database table
                $.each(objJSON, function(key, value) {
                    $("#listRegistrants").append("<tr><th> " + value.firstname + " </th><th> " + value.lastname + " </th><th> " + value.email + " </th><th> " + value.password + " </th><th> <button class='btn btn-success' onclick='editThisRow(" + value.id + ")''>Edit</button> </th><th> <button onclick='deleteRegRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                });
            }

        });
    }
</script>
<!-- end delete -->

<!-- end -->
<!-- click edit of registration -->
<script>
    function editThisRow(id) {
        // current row id
        $('#editRegistrantsModal').modal('show');
        $.ajax({
            url: 'getRegistrantsDetails.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                var objJSON = JSON.parse(response);
                $('#editFirstName').val(objJSON.firstname);
                $('#editLastName').val(objJSON.lastname);
                $('#editEmail').val(objJSON.email);
                $('#editPassword').val(objJSON.password);
                $('#editteacher_id').val(objJSON.teacher_id);
                $('#editclass_id').val(objJSON.class_id);
                $('#editdivision_id').val(objJSON.division_id);
                $('#editId').val(objJSON.id);
            }
        });
    }
</script>
<!-- end -->

<!-- Update registration row -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#updateFormReg', function() {
            var firstname = $('#editFirstName').val();
            var lastname = $('#editLastName').val();
            var email = $('#editEmail').val();
            var password = $("#editPassword").val();
            var teacher_id = $('#editteacher_id').val();
            var class_id = $('#editclass_id').val();
            var division_id = $('#editdivision_id').val();
            var id = $('#editId').val();
            $.ajax({
                url: 'updateRegistrant.php',
                type: 'POST',
                data: {
                    id: id,
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    password: password,
                    teacher_id: teacher_id,
                    class_id: class_id,
                    division_id: division_id
                },
                success: function(response) {
                    $('#listRegistrants').find('tr').remove();
                    $('#editRegistrantsModal').modal('hide');
                    var objJSON = JSON.parse(response);
                    $.each(objJSON, function(key, value) {
                        $("#listRegistrants").append("<tr><th> " + value.firstname + " </th><th> " + value.lastname + " </th><th> " + value.email + " </th><th> <button class='btn btn-success'   onclick='editThisRow(" + value.id + ")'  >Edit</button> </th><th> <button onclick='deleteRow(" + value.id + ")' class='btn btn-danger'>Delete</button> </th></tr>");

                    });

                }
            });
        });
    });
</script>
<!-- end -->
<!-- registration Modal -->
<div id="editRegistrantsModal" class="modal fade" role="dialog">
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
                            <input type="text" name="firstname" class="form-control form-control-user" id="editFirstName" placeholder="Please enter Firstname." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="lastname" class="form-control form-control-user" id="editLastName" placeholder="Please enter Lastname." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>

                        <div class="col-sm-12">
                            <input type="text" name="email" class="form-control form-control-user" id="editEmail" placeholder="Please enter email." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <input type="text" name="password" class="form-control form-control-user" id="editPassword" placeholder="Please enter password." required="">
                            <div class="help-block with-errors"></div>
                        </div><br>
                        <div class="col-sm-12">
                            <select name="teacher_id" class="form-control form-control-user" id="editteacher_id">
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
                                    }
                                }
                                ?>
                            </select>
                        </div><br>

                        <div class="col-sm-12">
                            <select name="class_id" class="form-control form-control-user" id="editclass_id">
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
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <select name="division_id" class="form-control form-control-user" id="editdivision_id">
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
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <input type="hidden" name="editId" id="editId">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-user btn-block" id="updateFormReg">Update</button>
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

<!-- END -->

</body>

</html>