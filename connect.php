<?php

$host = 'localhost';
$database = 'myfinance';
$user = 'root';
$password = '';

//verificar conexao com banco de dados
try {
    
    if ( strlen($database) == 0) {
        echo "Banco de dados inexistente";
        die();
    }else{
        $ligacao = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $statusConnect = $ligacao -> getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }
   

} catch (PDOException  $statusConnect) {
    echo "erro ao conectar ao db " . $statusConnect ->getMessage();
    
}
