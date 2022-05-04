<script>
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
</script>