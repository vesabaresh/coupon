<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;

try{

	$con = new PDO($str,$user,$pass);
    
    $id=9;

    $sql="DELETE FROM users WHERE ID=:ID";
    $res=$con->prepare($sql);
    $res->execute(["ID"=>$id]);
    echo "DATA DELETED";

}catch(PDOException $e){

	echo "Error : ".$e->getMessage();

}

?>