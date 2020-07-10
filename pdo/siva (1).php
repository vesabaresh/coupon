<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "pdo";
$str = "mysql:host=".$host.";dbname=".$db;
$pdo = new PDO($str,$user,$pass);



try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements

  $data = array(
        array(
        "name" => "Peter Parker",
        "gender" => "MALE",
        "city" => "Madurai", 
        ),
        array(
        "name" => "Clark Kent",
        "gender" => "FEMALE",
        "city" => "trichy", 
        ),
        array(
        "name" => "Harry Potter",
        "gender" => "FEMALE",
        "city" => "nellai", 
       )
);




  foreach($data as $row){

  	$name = $row['name'];
  	$gender = $row['gender'];
  	$city = $row['city'];
    //echo "INSERT INTO users (name, gender, city) VALUES ($name, $gender, $city)";exit;
  	$conn->exec("INSERT INTO `users` (name, gender, city) VALUES ('$name', '$gender', '$city')");

  }
  
  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
}


?>