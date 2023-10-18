<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica se a solicitação http pra esse script foi realizada via post
    $nome = $_POST['nomeCadastro'];
    $email = $_POST['emailCadastro'];
    $senha = $_POST['senhaCadastro'];
    $senha_segura = password_hash($senha,PASSWORD_DEFAULT);
    $sobrenome = $_POST['sobrenomeCadastro'];

    $query_ultimo_id = 'SELECT MAX(id_user) + 1 as max_id FROM usuarios;';
    $resultado_max_id = $ligacao ->query($query_ultimo_id);
    $proximo_id_user = $resultado_max_id -> fetch();

    $novo_codigo = $proximo_id_user['max_id'];
    
    // echo $proximo_id_user;
    

    $query_cadastrar_usuario = "INSERT INTO usuarios (id_user,nome,sobrenome,email,senha) VALUES 
                                ($novo_codigo,'$nome','$sobrenome','$email', '$senha_segura');";

    $resultado_cadastrar_usuario = $ligacao -> query($query_cadastrar_usuario);
    // showArray($resultado_cadastrar_usuario);

    if ($resultado_cadastrar_usuario && $novo_codigo) {
        $response = [
            'status' => 'true',
            'message' => 'usuario cadastrado',
            'redirect' => 'home.php'
        ];

    }else{
        $response = [
            'status' => 'false',
            'message' => 'erro ao cadastrar usuário'
        
        ];
    }
   

    echo json_encode($response);

}