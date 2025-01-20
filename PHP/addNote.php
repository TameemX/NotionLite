<?php
session_start();
require 'connect.php';

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_id = $_SESSION['user_id'];
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);

    // Insert new note
    $sql = "INSERT INTO notes_information (title, description, note_date, user_id) VALUES ('$title', '$description', NOW(), '$user_id')";

    if (mysqli_query($connect, $sql)) {
        header("Location: Notes.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
} else {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

mysqli_close($connect);
?>