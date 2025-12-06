<?php 

$host = "localhost";
$db ="rudinaphp";
$users="root";
$pass="";

try{
    $pdo = new PDO ("mysql:host=$host; dbname=$db",$users,$pass);

    $sql = "CREATE TABLE users (id INT(6) NOT NULL PRIMARY KEY,
    surname varchar(30) NOT NULL,
    password varchar (30) NOT NULL) ";

    $pdo->exec($sql);
    echo("table created successfully");


}catch(Expection $e){
    echo "Error createin table" .$e->getMessage();
}
?>