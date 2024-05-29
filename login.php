<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invest Academy - Log in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="logo">
                <img src="logo.png" alt="Invest Academy Logo">
                <h1>INVEST ACADEMY</h1>
            </div>
            <h2>Log in</h2>
            <form method="post" action="homepage.php">
                <input type="text" placeholder="Email/Phone Number" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Log in</button>
                <div class="options">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
            </form>
            <div class="google-login">
                <p>or</p>
                <button class="google-button">Continue with Google</button>
            </div>
            <a class="create-account" href="register.php">Create an Invest Academy Account</a>
        </div>
    </div>
</body>
</html>
