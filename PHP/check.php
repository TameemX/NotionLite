<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    $_SESSION['loggedin'] = false;
} else {
    // Assuming you have a function to verify the email and password
    // $_SESSION['loggedin'] = verify_user($_SESSION['email'], $_SESSION['password']);
    $_SESSION['loggedin'] = true; // Set to true for demonstration purposes
}

$connect = mysqli_connect('localhost', 'root', '', 'notion_lite_db');
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_credentials WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $email;
        header("Location: Home.php");
    } else {
        $_SESSION['loggedin'] = false;
        echo "Email or password is incorrect.";
    }
} 

mysqli_close($connect);
?>