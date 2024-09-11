
<?php
$host = 'localhost';
$user = 'root';      
$password = '';      
$dbname = 'MEUBDNEW';

try {
   
    $pdo = new PDO("mysql:host=$host", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql);
    echo "Banco de dados $dbname criado com sucesso.<br>";

   
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    $sql = "CREATE TABLE IF NOT EXISTS MINHATABELA (
        ID INT(11) AUTO_INCREMENT PRIMARY KEY,
        NOME VARCHAR(50) NOT NULL,
        LASTNAME VARCHAR(50) NOT NULL,
        CPF VARCHAR(14) NOT NULL,
        ENDERECO VARCHAR(100) NOT NULL,
        CIDADE VARCHAR(50) NOT NULL
    )";
    $pdo->exec($sql);
    echo "Tabela MINHATABELA criada com sucesso.<br>";

   
    $sql = "INSERT INTO MINHATABELA (NOME, LASTNAME, CPF, ENDERECO, CIDADE) VALUES
            ('João', 'Silva', '123.456.789-01', 'Rua A, 123', 'São Paulo'),
            ('Maria', 'Oliveira', '234.567.890-12', 'Av. B, 456', 'Rio de Janeiro'),
            ('Carlos', 'Santos', '345.678.901-23', 'Rua C, 789', 'Belo Horizonte')";
    $pdo->exec($sql);
    echo "Dados inseridos com sucesso.<br>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}


$pdo = null;
?>
