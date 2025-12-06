<?php 

$host = "localhost";
$db ="rudinaphp";
$users="root";
$pass="";

try{
    $pdo = new PDO ("mysql:host=$host; dbname=$db",$users,$pass);

    $sql = "DROP TABLE users";

    $pdo->exec($sql);
    echo("tabela eshte fshier");


}catch(Expection $e){
    echo "Error" .$e->getMessage();
}
?>