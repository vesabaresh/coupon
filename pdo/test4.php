<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;

try{

	$con = new PDO($str,$user,$pass);
    $gender="MALE";
$sql="SELECT * FROM users WHERE GENDER=:GENDER";
$res=$con->prepare($sql);
$res->execute(["GENDER"=>$gender]);
$n=$res->rowCount();
echo "Total ".$n;

}catch(PDOException $e){

	echo "Error : ".$e->getMessage();

}

?>