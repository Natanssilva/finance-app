<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="./js/validarLogin.js" defer></script>
</head>
<?php require_once 'connect.php' ?>
<body class="bg-gray-800 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md sm:w-96 animate__animated animate__backInRight mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
        <form id="form" action="processar_login.php" method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="border rounded w-full py-2 px-3" placeholder="seuemail@exemplo.com">
                <p class="error-message text-red-700"></p>
            </div>
            <div class="mb-6">
                <label for="senha" class="block text-gray-700 text-sm font-semibold mb-2">Senha</label>
                <input type="password" id="senha" name="senha" class="border rounded w-full py-2 px-3" placeholder="********">
                <p class="error-message text-red-700"></p>
            </div>
            <div class="text-center">
            <button id="button-submit" type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded w-full py-2">Entrar</button>
            <p class="erro-login text-red-700"></p>
            </div>
        </form>
        <div class="mt-4">
            <p class="text-gray-600">Novo por aqui? <a href="cadastro.php" class="text-blue-500">Crie uma conta agora</a></p>
        </div>
    </div>

  
        <h1 class="text-2xl text-white text-center absolute top-10 w-full animate__animated animate__backInRight ">Seja bem-vindo ao Finance App, o lugar certo para suas finanças !</h1>
        
</body>
</html>
