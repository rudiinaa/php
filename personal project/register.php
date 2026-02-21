<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Digital School</title>
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

        /* Signup container */
        .signup {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading */
        .signup h1 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #333333;
        }

        /* Inputs */
        .form-control {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
            outline: none;
        }

        /* Button */
        .btn-primary {
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

        .btn-primary:hover {
            background-color: #1a5edb;
        }

        /* Small text & links */
        .signup small {
            display: block;
            margin-top: 15px;
            color: #555;
        }

        .signup small a {
            color: #2575fc;
            text-decoration: none;
            font-weight: 500;
        }

        .signup small a:hover {
            text-decoration: underline;
        }

        /* Footer text */
        .signup p {
            margin-top: 20px;
            color: #999;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .signup {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="signup">
        <form class="form-signin" action="registerlogic.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

            <input type="text" class="form-control" placeholder="Name" name="name" required autofocus>
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            <input type="password" class="form-control" placeholder="Password" name="password" required>

            <button class="btn btn-primary btn-block" type="submit" name="submit">Sign up</button>

            <small>Already have account? <a href="login.php">Log In</a></small>
            <p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>
        </form>
    </div>
</body>
</html>