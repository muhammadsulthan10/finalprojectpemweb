<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invest Academy - Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="register-box">
            <div class="logo">
                <img src="logo.png" alt="Invest Academy Logo">
                <h1>INVEST ACADEMY</h1>
            </div>
            <h2>Register</h2>
            <form method="post" action="login.php" >
                <input type="text" placeholder="Email/Phone Number" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Password Confirmation" required>
                <div class="terms">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">By creating an account, I agree to InvestGacor <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</label>
                </div>
                <button type="submit">Join Now</button>
            </form>
            <div class="google-login">
                <p>or</p>
                <button class="google-button">Continue with Google</button>
            </div>
            <p class="login-link">Already Have an Account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</body>
</html>
