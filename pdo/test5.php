<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;

try{

	$con = new PDO($str,$user,$pass);
    $name="Mala";
    $gender="FEMALE";
    $city="CHENNAI";
    $sql="INSERT INTO users (NAME,GENDER,CITY) VALUES (:NAME,:GENDER,:CITY)";
    $res=$con->prepare($sql);
    $res->execute(["NAME"=>$name,"GENDER"=>$gender,"CITY"=>$city]);
    echo "DATA SAVED";

}catch(PDOException $e){

	echo "Error : ".$e->getMessage();

}

?>