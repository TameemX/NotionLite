<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tameem Awad">
    <meta name="description" content="The simplified lite version of Notion Inc, offering a variety of features and functionalities like To Do Lists, Calendars, and Note-taking.">
    <meta name="keywords" content="Notion, To-do, Calendar, Notes">
    <title>Notion Lite</title>
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/Index.css">
    <link rel="stylesheet" href="/NotionLite/CSS/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>

<body>
  
        <?php include('../PHP/Header.php'); ?>

    <main>
        <div >
            <section id="Main">
            <h1>The simplified, better version of Notion.</h1>
            <h2>Fast and minimal. Work without distractions.</h2>
            <button>Elevate your note-taking experience<i class="fa-solid fa-arrow-right"></i> </button>  
            </section>
        </div>
        

        <section id="Features">
            <h2>Features</h2>
            <h3>A notion-themed application filled with multiple featues and functionaltieis to enhance your task and time management.</h3>

            <div id="FeaturesContainer">
            <article id="FeaturesList">
                <img src="../Assets/Images/NotesIcon.png" alt="Simple Notebook Vector">
                <h4>Notes</h4>    
                <p>Simple and yet aesthetic notes.</p>
            </article>

            <article id="FeaturesList">
                <img src="../Assets/Images/ToDoIcon.png" alt="Simple List Vector">
                <h4>To-do</h4>
                <p>Track your daily tasks with ease.</p>
            </article>

            <article id="FeaturesList">
                <img src="../Assets/Images/CalendarIcon.png" alt="Simple Calender Vector">
                <h4>Calendar</h4>
                <p>Manage your time, projects, together!</p>
            </article>
            </div>

        </section>
    </main>

    <footer>
        <?php include('../PHP/Footer.php'); ?>
    </footer>

</body>
</html>
