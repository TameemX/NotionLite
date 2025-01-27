<?php

require 'connect.php';

mysqli_select_db($connect, 'notion_lite_db');

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if task ID is set
if (isset($_POST['task_id'])) {
    $task_id = mysqli_real_escape_string($connect, $_POST['task_id']);
    $sql = "DELETE FROM task_information WHERE task_id = '$task_id'";

    if (mysqli_query($connect, $sql)) {
        header("Location: ToDo.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
} else {
    echo "Task ID is not set.";
}

mysqli_close($connect);
?>
