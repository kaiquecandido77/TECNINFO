<?php
$host = 'localhost';
$username = 'root';
$password = '';
dbname ='meudb'

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE MyGuests(id INT(6)unsigned AUTO_INCREMENT PRIMARY KEY,firstename VARCHAR(30)NOT NULL, lastname VARCAHR(30)NOT NULL, email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMERSTAMP ON UPDATE CURRENT_TIMESTAMP)";
    $conn ->exec($sql);
    echo "Criado com sucesso meu BD <br>";    
} catch (PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}$pdo = null;
?>