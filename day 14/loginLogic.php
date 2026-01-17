<?php 
require 'config.php';

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    if(empty($username) || empty($password))
    {
        echo "fill all the fields!";
        header("refresh:2; url=login.php");
    }else{

        $sql = "SELECT * FROM users where username=:username";
        $insertSQL = $conn->prepare( $sql);
        $insertSQL->bindParam(':username',$username);

        $insertSQL->execute();

        if($insertSQL ->rowCount()>0){
            $data =  $insertSQL->fetch();
            if(password_verify($password,$data["password"])){
                $_SESSION['username']=$data['username'];
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