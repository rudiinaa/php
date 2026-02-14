<?php
  $user="root";
  $pass="";
  $server="localhost";
  $dbname="task_manager";

  try{ 
   
    $conn= new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
    echo("conected");

  }catch(PDOException $e){

    echo "error" . $e->getMessage();
  }




?>