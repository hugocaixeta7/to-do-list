<?php 

//Conexão com o banco de dados MySQL com PDO
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "to-do-list";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;port=$port; dbname=" . $dbname, $user, $pass); 
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
