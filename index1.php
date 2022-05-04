<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insert and Retrieve data from MySQL database with ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .wrapper {
        width: 45%;
        height: auto;
        margin: 10px auto;
        border: 1px solid #cbcbcb;
        background: white;
    }


    /*
  * COMMENT FORM
  **/

    .comment_form {
        width: 80%;
        margin: 100px auto;
        border: 1px solid green;
        background: #fafcfc;
        padding: 20px;
    }

    .comment_form label {
        display: block;
        margin: 5px 0px 5px 0px;
    }

    .comment_form input,
    textarea {
        padding: 5px;
        width: 95%;
    }

    #submit_btn,
    #update_btn {
        padding: 8px 15px;
        color: white;
        background: #339;
        border: none;
        border-radius: 4px;
        margin-top: 10px;
    }

    #update_btn {
        background: #1c7600;
    }


    /*
  * COMMENT DISPLAY AREA
  **/

    #display_area {
        width: 90%;
        padding-top: 15px;
        margin: 10px auto;
    }

    .comment_box {
        cursor: default;
        margin: 5px;
        border: 1px solid #cbcbcb;
        padding: 5px 10px;
        position: relative;
    }

    .delete {
        position: absolute;
        top: 0px;
        right: 3px;
        color: red;
        display: none;
        cursor: pointer;
    }

    .edit {
        position: absolute;
        top: 0px;
        right: 45px;
        color: green;
        display: none;
        cursor: pointer;
    }

    .comment_box:hover .edit,
    .comment_box:hover .delete {
        display: block;
    }

    .comment_text {
        text-align: justify;
    }

    .display_name {
        color: blue;
        padding: 0px;
        margin: 0px 0px 5px 0px;
    }
</style>

<body>
    <div class="wrapper">
        <!-- <?php echo $email; ?> -->
        <form class="comment_form">
            <div>
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" id="name">
            </div>
            <div>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="address_">Address:</label>
                <input type="text" name="address_" id="address_">
            </div>
            <div>
                <label for="mobile">Mobile:</label>
                <input type="number" name="mobile" id="mobile">
            </div>
            <button type="button" id="submit_btn">POST</button>
            <button type="button" id="update_btn" style="display: none;">UPDATE</button>
        </form>
    </div>
</body>
<script>
    $(document).ready(function() {
        // save comment to database
        $(document).on('click', '#submit_btn', function() {
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var address = $('#address_').val();
            var mobile = $('#mobile').val();
            $.ajax({
                url: 'server.php',
                type: 'POST',
                data: {
                    'save': 1,
                    'firstname': firstname,
                    'lastname': lastname,
                    'email': email,
                    'address_': address_,
                    'mobile': mobile,
                },
                success: function(response) {
                    $('#firstname').val('');
                    $('#lastname').val('');
                    $('#email').val('');
                    $('address_').val('');
                    $('#mobile').val('');
                    $('#display_area').append(response);
                }
            });
        });
        // delete from database
        $(document).on('click', '.delete', function() {
            var id = $(this).data('id');
            $clicked_btn = $(this);
            $.ajax({
                url: 'server.php',
                type: 'GET',
                data: {
                    'delete': 1,
                    'id': id,
                },
                success: function(response) {
                    // remove the deleted comment
                    $clicked_btn.parent().remove();
                    $('#firstname').val('');
                    $('#lastname').val('');
                    $('#email').val('');
                    $('#address_').val('');
                    $('#mobile').val('');
                }
            });
        });
        var edit_id;
        var $edit_comment;
        $(document).on('click', '.edit', function() {
            edit_id = $(this).data('id');
            $edit_comment = $(this).parent();
            // grab the comment to be editted
            var name = $(this).siblings('.display_name').text();
            var comment = $(this).siblings('.comment_text').text();
            // place comment in form
            $('#firstname').val(firstname);
            $('#lastname').val(lastname);
            $('#email').val(email);
            $('#address_').val(address_);
            $('#mobile').val(mobile);
            $('#submit_btn').hide();
            $('#update_btn').show();
        });
        $(document).on('click', '#update_btn', function() {
            var id = edit_id;
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var $address_ = $('#address_').val();
            var mobile = $('#mobiel').val();
            $.ajax({
                url: 'server.php',
                type: 'POST',
                data: {
                    'update': 1,
                    'id': id,
                    'firstname': firstname,
                    'lastname': lastname,
                    'email': email,
                    'address_': address_,
                    'mobile': mobile,
                },
                success: function(response) {
                    $('#firstname').val('');
                    $('#lastname').val('');
                    $('#email').val('');
                    $('#address_').val('');
                    $('#mobile').val('');
                    $('#submit_btn').show();
                    $('#update_btn').hide();
                    $edit_comment.replaceWith(response);
                }
            });
        });
    });
</script>

</html>
<!-- Add JQuery -->
<script src="jquery.min.js"></script>
<script src="scripts.js"></script>