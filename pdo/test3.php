<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;

try{

	$con = new PDO($str,$user,$pass);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $city="SALEM";
    $gender="FEMALE";
    $sql="SELECT * FROM users WHERE city=:CITY and gender=:GENDER";
    $res=$con->prepare($sql);
    $res->execute(["CITY"=>$city,"GENDER"=>$gender]);
    $users=$res->fetchAll();

    foreach($users as $row){

    echo $row->name.'<br/>';

    }

}catch(PDOException $e){

	echo "Error : ".$e->getMessage();

}

?>