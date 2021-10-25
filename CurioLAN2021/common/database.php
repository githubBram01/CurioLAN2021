<?php
$host = "localhost";
$dbname = "curioLAN2021";
$user= "root";
$passwd = "";
try
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
    echo "<hr>"; 
}   catch(PDOException $ex){
    echo "<br>Verbinding mislukt<br>";}
    
?>