<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica se a solicitação http pra esse script foi realizada via post
    $nome = $_POST['nome'];
    $email = $_POST['emailCadastro'];
    $senha = $_POST['SenhaCadastro'];
    $sobrenome = $_POST['sobrenome'];

    $query_ultimo_id = 'SELECT MAX(id_user) as max_id FROM usuarios;';
    $resultado_max_id = $ligacao ->query($query_ultimo_id);
    $max_id_user = $resultado_max_id -> fetch();
    $proximo_id_user = $max_id_user + 1;
    echo $proximo_id_user;

    $query_cadastrar_usario = "INSERT INTO usuarios VALUES 
                                ($proximo_id_user,'$nome','$sobrenome','$email', '$senha');";

    $resultado_cadastrar_usuario = $ligacao -> query($query_cadastrar_usario);
    showArray($resultado_cadastrar_usuario);
}