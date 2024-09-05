<?php
$database_name = 'mystore';
$username = 'root';
$password = '';
$host = 'localhost';
try{
    //connection to databasee
    $pdo = new PDO("mysql:host=$host:dbname=$database_name",$username,$password);
    //connection to database  not imported !!
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $reqsql = "SELECT * FROM product";

    //to tell the pdo to prepare the requette sql
    $sqlstatment = $pdo->prepare($reqsql);

    //excute satement
    $sqlstatment -> execute();

    $products =   $sqlstatment -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product){
        echo "ID : ".$product['id']."<br>";
        echo "name : ".$product['name']."<br>";
        echo "price : ".$product['price']."<br>";
    }

}catch (PDOException $exception){
    echo "connection error : ". $exception->getMessage();
}
?>