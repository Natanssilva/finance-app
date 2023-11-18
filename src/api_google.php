<?php
require '../vendor/autoload.php'; // Carrega a biblioteca do Google API Client

$client = new Google_Client();
$client->setClientId('475090256871-duu195bffbhq80ub6rs39e10pd4ts2jp.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/finance-app/src/home.php');

$client->addScope('email'); // Adicione os escopos necessários


$authUrl = $client->createAuthUrl();

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Agora você pode usar $client para fazer solicitações à API do Google
    $userInfo = $client->verifyIdToken();

    showArray($userInfo);
} else {
    // Redirecione o usuário para a URL de autorização
    header('Location: ' . $authUrl);
    exit;
}
