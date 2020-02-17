<?php 
try{
    $dsn="mysql:dbname=cadastros;host=localhost";
    $dbuser="root";
    $dbpass="";
    $pdo=new PDO($dns,$dbuser,$dbpass);

}catch(PDOException $e){
    die($e->getMessage());

}
}