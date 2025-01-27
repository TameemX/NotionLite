<?php
session_start();
?>
<link rel="stylesheet" href="/NotionLite/CSS/header.css">

<header id="MyHeader">
    <a href="../PHP/Index.php">
        <img src="../Assets/Images/NotionLogo.png" alt="Notion Logo">
    </a>
    <nav>
        <ul>
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo ' <li><a href="..\PHP\Notes.php">Notes</a></li>';
        } else {
            echo '<li><a href="..\PHP\SignUp.php">Notes</a></li>';
        }
        ?> 
            
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<li><a href="..\PHP\ToDo.php">To-do</a></li>';
        } else {
            echo '<li><a href="..\PHP\SignUp.php">To-do</a></li>';
        }
        ?> 
            <li><a href="..\PHP\calendar.php">Calendar</a></li>
        </ul>
    </nav>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<button><a href="..\PHP\Logout.php">Log Out</a></button>';
    } else {
        echo '<button><a href="..\PHP\SignUp.php">Sign Up</a></button>';
    }
    ?> 
</header>