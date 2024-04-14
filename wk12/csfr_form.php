<?php
session_start();

$_SESSION['confirmation'] = uniqid();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protection Form</title>
</head>
<body>

<form id="csrf_form" method="post" action="csfr_action.php">
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
