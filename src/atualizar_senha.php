<?php
require_once 'connect.php';

$link_url = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);  //armazenando valor da url no indice chave

if (empty($link_url)) {
    echo "<h1>ERRO: Chave não foi fornecida na URL.";
    die();
}
$query_verificar_chave_recuperacao = "SELECT id_user FROM usuarios 
                                                    WHERE chave_recuperar_senha = :chave LIMIT 1;";

$stmt = $ligacao->prepare($query_verificar_chave_recuperacao);
$stmt->bindParam(':chave', $link_url);
$stmt->execute();

if ($stmt->rowCount() === 0) { //validando caso usuario digite algo no link, terá um erro
    echo "<h1>ERRO! LINK ALTERADO";
    header('refresh:3;url=index.php'); //atrasa o redirecionamento para que o erro seja lido
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="../js/atualizarSenha.js" defer></script>
    <script src="../js/main.js" defer></script>
</head>
<?php require_once 'connect.php' ?>

<body class="bg-gray-800 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md sm:w-96 animate__animated animate__backInRight mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Atualizar senha</h2>
        <form id="formAtualizar" method="post">
            <div class="mb-4 relative rounded-md shadow-sm">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Senha</label>
                <input type="password" id="atualizarSenha" name="SenhaAtualizada" class="senha border rounded w-full py-2 px-3" placeholder="Digite uma nova senha">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer mt-6">
                    <img class="hide-password" src="../images/icons8-hide-password-30.png" alt="hide-password">
                    <img class="show-password hidden" src="../images/icons8-show-password-30.png" alt="show-password">
                </div>
                <p class="error-message text-red-700"></p>
            </div>
            <div class="text-center">
                <button id="buttonAtualizaSenha" type="submit" name="submitAtualizarSenha" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded w-full py-2">ATUALIZAR</button>
                <p class="erro-login text-red-700"></p>
            </div>
        </form>

        <div class="mt-4">
            <p class="text-gray-600 px-2 ">Lembrou a senha? <a href="index.php" class="hover:underline text-blue-500">Faça login agora</a></p>
        </div>

    </div>
</body>

</html>