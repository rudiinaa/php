<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e4dedeff;
        }
        .form-login {
            width: 100%;
            max-width: 360px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }
        .form-floating {
            margin-bottom: 15px;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-login">
        <h2 class="text-center mb-4">Login</h2>
        <form action="loginLogic.php" method="POST">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Email" required>
                <label for="floatingEmail">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe" name="remember">
                <label class="form-check-label" for="rememberMe">
                    Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <p class="mt-3 text-center">
            Don't have an account? <a href="register.php">Sign up</a>
        </p>
    </div>
</body>
</html>

