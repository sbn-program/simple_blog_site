<?php


$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "simple_blog_site";



try{
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new PDO("mysql:host=$server_name;dbname=$dbname", $user_name, $password , $options);
    return $pdo;

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}





?>