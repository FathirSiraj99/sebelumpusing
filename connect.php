<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'recipe_db';
    // jangan di ikutin ya ini untuk mampp bukan xampp !!


   
    $connect = new mysqli($serverName,$userName,$password,$dbName);
    
    if($connect->connect_error){
        die('Error :'.$connect->error);
    }

?>

