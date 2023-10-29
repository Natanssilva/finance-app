<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //receber os dados do formulario
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    showArray($dados);
    $emailRecupSenha = $dados['emailRecupSenha'];
   
    $query_recuperar_usuario = "SELECT nome,sobrenome, email 
                FROM usuarios 
                WHERE email = '$emailRecupSenha' LIMIT 1;";
                

    $resultado = $ligacao ->query($query_recuperar_usuario);
    $dadosRecupSenha = $resultado -> fetchAll();
    

    if (!empty($submitRecupSenha)) {
        echo 'submitado';
    }
  
    
  

    if (empty($dadosRecupSenha)) {
        $response = [
            'status' => 'false',
            'message' => 'email digitado nao existe no database'
        ];
    }else{
        $response = [
            'status' => 'true',
            'message' => 'email digitado existe no database'
        ];
    }


    echo json_encode($response);
}


