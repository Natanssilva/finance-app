<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="../js/recupSenha.js" defer></script>
</head>
<?php require_once 'connect.php' ?>
<body class="bg-gray-800 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md sm:w-96 animate__animated animate__backInRight mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Recuperar senha</h2>
        <form id="formRecup"  method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <input type="email" id="emailSenha" name="emailRecupSenha" class="border rounded w-full py-2 px-3" placeholder="seuemail@exemplo.com">
                <p class="error-message text-red-700"></p>
            </div>
            <div class="text-center">
            <button id="button-recuperar-senha" type="submit" name="submitRecupSenha" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded w-full py-2">ENVIAR</button>
            <p class="erro-login text-red-700"></p>
            </div>
        </form>

        <div class="mt-4">
            <p class="text-gray-600 px-2 ">Lembrou a senha? <a  href="index.php" class="hover:underline text-blue-500">Faça login agora</a></p>
        </div>
        
    </div>
</body>
</html>
