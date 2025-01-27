<?php 
// require 'connect.php';
session_start();
$connect = mysqli_connect('localhost','root','');

mysqli_select_db($connect, 'notion_lite_db');

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   
    $user_id = $_SESSION['user_id'];
    $task_id = $_POST['task_id'];
    $task_status = isset($_POST['task_status']) ? 1 : 0;
    
    $sql = "UPDATE task_information SET task_status = $task_status WHERE task_id = $task_id";

    mysqli_query($connect, $sql);
    header("Location: ToDo.php");
}

?>