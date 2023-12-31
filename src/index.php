<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="../js/validarLogin.js" defer></script>
    <script src="../js/main.js" defer></script>

</head>
<?php require_once 'connect.php' ?>

<body class="bg-gray-800 min-h-screen flex items-center justify-center ">

    <h1 class="text-2xl text-white text-center absolute top-10 w-full animate__animated animate__backInRight ">Seja bem-vindo ao Finance App, o lugar certo para suas finanças !</h1>

    <div class="bg-white p-8 rounded shadow-md sm:w-96 animate__animated animate__backInRight mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
        <form id="form" action="processar_login.php" method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>

                <input type="email" id="email" name="email" class="border rounded w-full py-2 px-3" placeholder="seuemail@exemplo.com">

                <p class="error-message text-red-700"></p>
            </div>
            <div class="mb-6 relative">
                <label for="senha" class="block text-gray-700 text-sm font-semibold mb-2">Senha</label>

                <div class="relative rounded-md shadow-sm">
                    <input type="password" id="senha" name="senha" class="senha py-2 px-3 block w-full border rounded w-full py-2 px-3" placeholder="********">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                        <img class="hide-password" src="../images/icons8-hide-password-30.png" alt="hide-password">
                        <img class="show-password hidden" src="../images/icons8-show-password-30.png" alt="show-password">
                    </div>
                    <!-- <p class=" fixed error-message text-red-700"></p> -->
                    <p class="erro-login text-red-700"></p>
                </div>

            </div>
            <div class="text-center">
                <button id="button-submit" type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded w-full py-2">Entrar</button>
            </div>
            <div class="text-center mt-4">
                <a href="<?= 'api_google.php' ?>" class="btn bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded w-full py-2 flex items-center justify-center">
                    <img src="../images/google-icon-2048x2048-czn3g8x8.png" alt="Google Logo" class="w-6 h-6 mr-2">
                    Entrar com Google
                </a>
            </div>

        </form>
        <div class="container mx-auto px-2 mt-2">
            <a class="hover:underline text-blue-500" href="recuperar_senha.php">Esqueceu a senha?</a>
        </div>
        <div class="mt-4">
            <p class="text-gray-600 px-2 ">Novo por aqui? <a href="cadastro.php" class="hover:underline text-blue-500">Crie uma conta agora</a></p>
        </div>
    </div>

</body>

</html>