<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tameem Awad">
    <meta name="description" content="Simplified lite version of Notion Inc.">
    <meta name="keywords" content="Notion, To-do, Calendar, Notes">
    <title>Notion Lite</title>
    <link rel="stylesheet" href="..\CSS\reset.css">
    <link rel="stylesheet" href="../CSS/ToDo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

        <?php include('Header.php'); ?> 
        
    <main>

        <section ID = "ToDoUserWelcome">
        <h1>Tameem's To Do List</h1>
        <form action="addTask.php" method="POST">
            <button type="submit">New Task</button>
            <input type="text" name="task_description" placeholder="Enter new task" required>
        </form>    
        </section>
        
        <section ID = "ToDoDashboard">
            <?php

            if (session_status() == PHP_SESSION_NONE) {
                 session_start();   }
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $user_id = $_SESSION['user_id'];
                $conn = new mysqli('localhost', 'root', '', 'notion_lite_db');
                if (mysqli_connect_errno()) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $result = mysqli_query($conn, "SELECT * FROM task_information WHERE user_id = '$user_id'");

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<article class="task-tile">';
                    echo '<form action="editTask.php" method="POST" ;">';
                    echo '<label class="checkbox">';
                    echo '<input type="checkbox" name="task_status" value="1" ' . ($row['task_status'] ? 'checked' : '') . ' onchange="this.form.submit()">';
                    echo '</label>';
                    echo '</form>';
                    echo '<p>' . htmlspecialchars($row['task_description']) . '</p>';
                    echo '<form action="taskDelete.php" method="POST" style="margin-left:auto;">';
                    echo '<input type="hidden" name="task_id" value="' . $row['task_id'] . '">';
                    echo '<button type="submit" class="delete-btn"><i class="fa-solid fa-trash"></i></button>';
                    echo '</form>';
                    echo '</article>';
                }

            } 
            ?>
        </section>
        
    </main>

    <footer>
        <?php include('Footer.php'); ?>
    </footer>
    
</body>
</html>