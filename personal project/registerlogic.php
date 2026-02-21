<?php  
    include_once("config.php");
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
       
        
        $email = $_POST['email'];
        $tempPass = $_POST['password'];
        $password = password_hash($tempPass,PASSWORD_DEFAULT);


    if(empty($name) || empty($email) || empty($password)){
            echo "You need to fill all the fields.";
        }
        else
        {
            $sql = "SELECT email from  users WHERE  email=:email";



            $temSQL =$conn->prepare($sql);
            $temSQL->bindParam(':email',$email);
            $temSQL->execute();
            
            if($temSQL->rowCount()>0)
            {
                echo"username exists!";



                header("refresh:2; url=register.php");



            }else{
                $sql= "INSERT into users(name,email,password) VALUES(:name,:email,:password)";



                $insertSQL =$conn->prepare($sql);
                $insertSQL->bindParam(':name',$name);
                
                $insertSQL->bindParam(':email',$email);
                $insertSQL->bindParam(':password',$password);
                
                $insertSQL->execute();



                echo("u have register successfully ...");
                 header("refresh:2; url=login.php");



            }
        }
    }
?>