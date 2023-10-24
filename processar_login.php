<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

  
    $query_usuarios = 'SELECT * FROM usuarios';
    $resultado_query = $ligacao ->query($query_usuarios);
<<<<<<< HEAD
    $tabela_usuarios = $resultado_query ->fetchAll(); 
=======
    $tabela_usuarios = $resultado_query ->fetchAll();
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
  

    $loginEfetuado = false; //inicializa a variavel fora do foreach pq se não causa erro
    //caso no looping nao encontro o login digitado, vai constar que a variavel nao foi declarada


    foreach ($tabela_usuarios as $info_usuario) {  //aqui vai mostrar tudo que tiver no db 
<<<<<<< HEAD
        if ($info_usuario['email'] == $email && password_verify($senha,$info_usuario['senha'])) {
=======
        if ($info_usuario['email'] == $email && $info_usuario['senha'] == $senha) {
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
            $loginEfetuado = true;
            break;  //login efetuado, nao precisa continuar verificando
        }
    }

    if ($loginEfetuado) {
        $response = [
            'status' => 'true',
<<<<<<< HEAD
            'message' => 'login efetuado com sucesso',
            'redirect' => 'home.php'
        ];

        
=======
            'message' => 'login efetuado com sucesso'
        ];

>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
    }else{
        $response = [
            'status' => 'false',
            'message' => 'login incorreto'
        ];
    }

    echo json_encode($response);
<<<<<<< HEAD
   
=======
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
}