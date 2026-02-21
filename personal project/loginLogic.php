<?php 
require 'config.php';
echo("hello");

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

    if(empty($email) || empty($password))
    {
        echo("hello1");
        echo "fill all the fields!";
        header("refresh:2; url=sdfads.php");
    }else{

        echo("hello2");
        $sql = "SELECT * FROM users where email=:email";
        $insertSQL = $conn->prepare( $sql);
        $insertSQL->bindParam(':email',$email);

        $insertSQL->execute();

        if($insertSQL ->rowCount()>0){
            $data =  $insertSQL->fetch();
            if(password_verify($password,$data["password"])){
                $_SESSION['email']=$data['email'];
                $_SESSION['id']=$data['id'];
                header("location: dashboard.php");
            }else{
                echo"password is incorrect";
                header("refresh:2; url=login.php");
            }
        }
        else {
            echo "user not found !!1";
        }
    }

}

?>