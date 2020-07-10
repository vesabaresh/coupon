<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;

try{

	$con = new PDO($str,$user,$pass);
	$sql = "SELECT * FROM users";
	$res = $con->query($sql);

	while($row=$res->fetch(PDO::FETCH_ASSOC)){

		echo $row["name"]." - ".$row["gender"]." - ".$row["city"]."<br/>";

	}

}catch(PDOException $e){

	echo "Error : ".$e->getMessage();

}

?>