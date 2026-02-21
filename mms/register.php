<?php
include_once("config.php");

$message = "";

if (isset($_POST['submit'])) {

    $emri     = trim($_POST['emri']);
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $tempPass = $_POST['password'];
    $tempConfig = $_POST['confirm_password'];

    // ✅ Validimi i fushave (kontrollo para hash)
    if (empty($emri) || empty($username) || empty($email) || empty($tempPass) || empty($tempConfig)) {
        $message = "Ju nuk i keni plotësuar të gjitha fushat!";
    }
    // ✅ kontrollo nëse password përputhen
    elseif ($tempPass !== $tempConfig) {
        $message = "Password-at nuk përputhen!";
    }
    else {

        // hash vetëm password-in
        $password = password_hash($tempPass, PASSWORD_DEFAULT);

        // kontrollo nëse email ekziston
        $check = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $check->bindParam(':email', $email);
        $check->execute();

        if ($check->rowCount() > 0) {
            $message = "Ky email ekziston!";
        } else {

            $sql = "INSERT INTO users (emri, username, email, password)
                    VALUES (:emri, :username, :email, :password)";

            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':emri', $emri);
            $insertSql->bindParam(':username', $username);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':password', $password);

            if ($insertSql->execute()) {
                header("Location: login.php");
                exit();
            } else {
                $message = "Gabim gjatë regjistrimit!";
            }
        }
    }
}
?>


 