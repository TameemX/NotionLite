<?php

require 'connect.php';

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

print_r($_POST);

$note_id = $_POST['note_id'];

$sql = "DELETE FROM notes_information WHERE note_id = $note_id";

$result = mysqli_query($connect, $sql);

if ($result) {
    header("Location: Notes.php");
} else {
    echo "Error: " . mysqli_error($connect);
}

mysqli_close($connect);
?>