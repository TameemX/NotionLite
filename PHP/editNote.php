<?php
require 'connect.php';

$note_id = $_GET['note_id'];

$sql = "SELECT * FROM notes_information WHERE note_id = $note_id";
$result = mysqli_query($connect, $sql);
$note_details = mysqli_fetch_assoc($result);

$title = $note_details['title'];
$description = $note_details['description'];

if (isset($_POST['updateNote'])) {
    $title2 = $_POST['title'];
    $description2 = $_POST['description'];

    $sql2 = "UPDATE notes_information SET title='$title2', description='$description2' WHERE note_id = $note_id";
    $result2 = mysqli_query($connect, $sql2);

    if ($result2) {
        header("Location: Notes.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}

mysqli_close($connect);
?>