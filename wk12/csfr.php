<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protection Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div id="splash_message"></div>

<form id="login_form" method="post">
    <input type="hidden" id="confirmation" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>

<script>
$(document).ready(function(){
    $('#login_form').submit(function(e){
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.post('csfr_action.php', {username: username, password: password, confirmation: $('#confirmation').val()}, function(data){
            $('#splash_message').text(data);
        });
    });
});
</script>

</body>
</html>
