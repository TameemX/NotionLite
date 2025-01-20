<?php
session_start();
require 'connect.php';

mysqli_select_db($connect, 'notion_lite_db');

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_id = $_SESSION['user_id'];
    $task_description = mysqli_real_escape_string($connect, $_POST['task_description']);

    // Insert new task
    $sql = "INSERT INTO task_information (task_description, task_status, user_id) VALUES ('$task_description', 0, '$user_id')";

    if (mysqli_query($connect, $sql)) {
        header("Location: ToDo.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
} 
    else {
    header("Location: SignIn.php"); 
    exit();

}
?>