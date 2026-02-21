<?php
// login.php
// Start the session if you plan to use session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Digital School</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Reset & general */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Login container */
        .login-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading */
        .login-container h2 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #333333;
        }

        /* Inputs */
        .login-container input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .login-container input:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
            outline: none;
        }

        /* Button */
        .login-container button {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            background-color: #2575fc;
            border: none;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-container button:hover {
            background-color: #1a5edb;
        }

        /* Links */
        .login-container p {
            margin-top: 20px;
            color: #555;
            font-size: 0.9rem;
        }

        .login-container p a {
            color: #2575fc;
            text-decoration: none;
            font-weight: 500;
        }

        .login-container p a:hover {
            text-decoration: underline;
        }

        /* Error message */
        .error-message {
            color: #d93025;
            margin-bottom: 15px;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <!-- Display error if login failed -->
        <?php
        if(isset($_SESSION['login_error'])) {
            echo '<div class="error-message">'.$_SESSION['login_error'].'</div>';
            unset($_SESSION['login_error']); // Clear error after displaying
        }
        ?>

        <form method="post" action="loginLogic.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Login</button>
        </form>

        <p>No account? <a href="register.php">Register</a></p>
        <p class="mt-3 text-muted">Digital School &copy; 2023</p>
    </div>
</body>
</html>