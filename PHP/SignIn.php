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
    <link rel="stylesheet" href="..\CSS\SignIn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <main>
        <section id="intro">
        <h1>Keep thinking.Keep Making.</h1>
        <h2>Welcome back to Notion Lite</h2>
    </section>

    <section id="signup-form">
        <form action="check.php" method="POST">
            
            <div class = "inputInfoSignUp">
                <input type="email" id="email" name="email" required placeholder="Email">
            </div>

            <div class = "inputInfoSignUp">
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>

            <section id="login-redirect">
            <p>Don't have an account? <a href="SignUp.php">Sign Up</a></p>
            </section>

            <section id="password-redirect">
            <p><a href="SignUp.php">Forgot your assword?</a></p>
            </section>

            <div>
                <button type="submit">Sign In</button>
            </div>
        </form>
    </section>



    </main>

</body>
</html>
