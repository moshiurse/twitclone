<?php
/**
 * Created by Moshiur.
 * Date: 9/20/2018
 * Time: 3:15 AM
 */

$dsn = 'mysql:host=localhost; dbname=twitclone';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO($dsn, $user, $pass);
}catch (PDOException $e){
    echo "Error Connecting DB ". $e->getMessage();
}


?>