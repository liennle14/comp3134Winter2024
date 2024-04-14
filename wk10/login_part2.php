<?php
$commonPasswords = array(
    "123456",
    "password",
    "123456789",
    "12345678",
    "12345",
    "1234567",
    "password1",
    "1234567890",
    "123123",
    "000000"
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (in_array($password, $commonPasswords)) {
        $username = "User123";
        echo "<h1>Welcome $username to Your Portal</h1>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Weak Password</h1>
    <form method="post">
        <label>Password</label>
        <input type="password" name="password">
        <br/>
        <input type="hidden" name="username" value="User123">
        <input type="submit">
    </form>
</body>
</html>

