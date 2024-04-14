<?php
session_start();

if(isset($_SESSION['confirmation']) && isset($_POST['confirmation']) && $_SESSION['confirmation'] === $_POST['confirmation']) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'host' && $password === 'pass') {
        echo 'Login successful!';
    } else {
        echo 'Login failed. Please try again.';
    }
} else {
    
    echo 'CSRF protection failed. Invalid request.';
}
?>
