<?php
    require_once 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $dadosAtualizarSenha = filter_input_array(INPUT_POST,FILTER_DEFAULT); //recebendo os dados de envio do formulario via post
     
        $senhaAtualizada = $dadosAtualizarSenha['SenhaAtualizada'];
      

        //receber a chave de recuperação via post pelo AJAX
      if (isset($_POST['chave'])) {
            $chave_recuperacao = $_POST['chave'];

           
            if (empty($chave_recuperacao)) {
    
                $response = [
                'status' => 'false',
                'message' => 'chave inválida'
            ];
            }else{

                $query_verificar_chave_recuperacao = "SELECT id_user FROM usuarios 
                                                    WHERE chave_recuperar_senha = :chave LIMIT 1;";


                $stmt = $ligacao->prepare($query_verificar_chave_recuperacao);
                $stmt->bindParam(':chave', $chave_recuperacao);
                $stmt ->execute();
                $resultado_verificar_chave = $stmt ->fetch();

               if ($dadosAtualizarSenha) {
                    $senhaAtualizada = password_hash($dadosAtualizarSenha['SenhaAtualizada'], PASSWORD_DEFAULT);
                    $id_usuario = $resultado_verificar_chave['id_user'];
                    $chave_recuperar_senha = 'NULL'; //para que nao fique a chave passada e nao possa recuperar
                   
                    $query_update_senha = "UPDATE usuarios 
                                           SET senha = :senha_usuario, 
                                           chave_recuperar_senha = :chave_recuperar_senha
                                           WHERE id_user = :id_user; LIMIT 1";
                    showArray($query_update_senha);
                    $preparedStmt = $ligacao->prepare($query_update_senha);
                    $preparedStmt->bindParam(':senha_usuario', $senhaAtualizada);
                    $preparedStmt->bindParam(':chave_recuperar_senha', $chave_recuperar_senha);
                    $preparedStmt->bindParam(':id_user', $id_usuario);
                    
                    if ($preparedStmt ->execute()) {
                        //response pra retornar pro ajax q a senha foi alterada
                        $response = [
                            'status' => 'mov',
                            'message' => 'senha alterada com sucesso', 
                            'redirect' => 'index.php'
                        ];
                    }
                    
               }

            
            }

            echo json_encode($response);
      }


    }