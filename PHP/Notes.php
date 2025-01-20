<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tameem Awad">
    <meta name="description" content="Simplified lite version of Notion Inc.">
    <meta name="keywords" content="Notion, To-do, Calendar, Notes">
    <title>Notion Lite</title>
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/Notes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <header>
        <?php include('Header.php'); ?> 
    </header>

    <Main>
        <div class = "Main">
        <h1>Tameem's Notes</h1>
            <form action="addNote.php" method="post">
                <input type="search" id="search" name="q" placeholder="🔎 Search by name, service or phrases" aria-label="Search">
                <button type="submit" class="CreateNote">Add Note</button>
        </div>
            </form>

        <section ID = "NotesDashboard">

        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            $user_id = $_SESSION['user_id'];
            $conn = new mysqli('localhost', 'root', '', 'notion_lite_db');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM notes_information WHERE user_id = '$user_id' ORDER BY note_id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $note_id = $row["note_id"];
                    $title = "Note #" . $note_id;
                    $description = $row["description"];
                    $note_date = $row["note_date"];
                    $created_days_ago = (new DateTime())->diff(new DateTime($note_date))->days;
                    echo "
                    <div class='note-tile'>
                        <div class='note-header'>
                            <h3 class='note-title'>$title</h3>
                            <form action='deleteNote.php' method='post' style='display:inline;'>
                                <input type='hidden' name='note_id' value='$note_id'>
                                <button type='submit' class='delete-btn'><i class='fa-solid fa-trash'></i></button>
                            </form>
                            <button class='edit-btn'><i class='fa-solid fa-pen'></i></button>
                        </div>
                        <div class='note-body'>
                            <p class='note-description'>$description</p>
                        </div>
                        <div class='note-footer'>
                            <p class='note-age'>Created $created_days_ago days ago</p>
                        </div>
                    </div>";
                }
            } 

            $conn->close();
        } else {
            header("Location: SignIn.php"); // Redirect to login if not logged in
            exit();
        }
        ?>

        </section>
    </Main>

    <footer>
        <?php include('../PHP/Footer.php'); ?>
    </footer>
</body>
</html>