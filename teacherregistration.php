<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REgistration Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Teacher Account!</h1>
                            </div>
                            <form class="user" method="POST">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="place" id="place" placeholder="Place">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="phone" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="experience" id="experience" placeholder="Experience">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="repeatpassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="#" id="form_reg" class="btn btn-primary btn-user btn-block">Register Account</a>
                                <hr>

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="teacherlogin.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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


    <script>
        $(document).ready(function() {
            $(document).on('click', '#form_reg', function() {

                var name = $("#name").val();
                var place = $("#place").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var experience = $("#experience").val();
                var subject =$("#subject").val();
                var password = $("#password").val();


                $.ajax({
                    url: 'action_teachreg.php',
                    type: 'POST',
                    data: {
                        name:name,
                        place:place,
                        email: email,
                        phone:phone, 
                        experience:experience,
                        subject:subject,
                        password: password
                    },
                    success: function(response) {
                        var objJSON = JSON.parse(response);
                        if (objJSON.status == 200) {
                            alert('Successfully Inserted');
                            window.location.href = '/AJAX/login.php';
                        } else {
                            alert('Something went wrong');
                            window.location.href = '/AJAX/register.php';
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>