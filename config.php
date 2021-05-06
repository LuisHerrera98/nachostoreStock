<?php

$dbHost = 'localhost';
$dbName = 'u865864857_stock';
$dbUser = 'u865864857_stock';
$dbPass = 'Mision2017';

try{
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo $e->getMessage();
}


?>