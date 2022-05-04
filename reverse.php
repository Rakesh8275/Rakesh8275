<?php
session_start();
if (!$_SESSION['user_id']){
    header('location:login.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    String.prototype.reverse = function() {
        return this.split("").reverse().join("");
    }
</script>
<?php
include("header.php")
?>

<body>
    <div class="container ">
        <form class="user">
            <label for="s">Input</label>
            <input type="text" id="s" size="25">
            <p id="t"></p>
            <input type="button" id="r" value="Reverse" onclick="document.getElementById('t').innerHTML = document.getElementById('s').value.reverse();">

        </form>
    </div>

</body>
<?php
include("footer.php")
?>

</html>