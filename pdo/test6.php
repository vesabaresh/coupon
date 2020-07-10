<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;

try{

	$con = new PDO($str,$user,$pass);
    $name="MAHA";
    $id=9;

    $sql="UPDATE users set NAME=:NAME WHERE ID=:ID";
    $res=$con->prepare($sql);
    $res->execute(["NAME"=>$name,"ID"=>$id]);
    echo "DATA UPDATED";

}catch(PDOException $e){

	echo "Error : ".$e->getMessage();

}

?>