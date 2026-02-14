<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #e4dedeff;
        }
        .form-signup {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }
        .form-floating {
            margin: 10px 0;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signup">
        <form action="signupLogic.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" placeholder="Full Name" name="emri" required>
                <label for="floatingName">Full Name</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingUsername" placeholder="Username" name="username" required>
                <label for="floatingUsername">Username</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required>
                <label for="floatingEmail">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign Up</button>

            <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </main>
</body>
</html>
