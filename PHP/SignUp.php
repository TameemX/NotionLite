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
    <link rel="stylesheet" href="..\CSS\SignUp.css">
    <link rel="stylesheet" href="/NotionLite/CSS/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <main>
        <section id="intro">
        <h1>Think it. Make it.</h1>
        <h2>Create your  Notion Lite account</h2>
    </section>

    <section id="signup-form">
        <form action="connect.php" method="POST">

            <div class="inputInfo">
                <input type="text" id="name" name="name" required placeholder="Name">
            </div>

            <div class="inputInfo">
                <input type="email" id="email" name="email" required placeholder="Email">
            </div>

            <div class="inputInfo">
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>

            <div class="checkboxes">
                <label>
                    <input type="checkbox" name="privacy-policy" required>
                    I agree to the <a href="#">Privacy Policy</a>
                </label>
            </div>

            <div class="checkboxes">
                <label>
                    <input type="checkbox" name="terms-of-service" required>
                    I agree to the <a href="#">Terms of Service</a>
                </label>
            </div>

            <div>
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </section>

    <section id="login-redirect">
        <p>Already have an account? <a href="SignIn.php">Log In</a></p>
    </section>

    </main>

</body>
</html>
