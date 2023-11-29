<?php
session_start();

require '../vendor/autoload.php'; // Carrega a biblioteca do Google API Client
require_once '../src/biblioteca/funcoes.php';


$client = new Google_Client();
$client->setClientId('475090256871-duu195bffbhq80ub6rs39e10pd4ts2jp.apps.googleusercontent.com');
$client->setClientSecret('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');
$redirectUri = 'http://localhost/finance-app/src/home.php';
$client->revokeToken();
$client->setRedirectUri($redirectUri);

$client->addScope('https://www.googleapis.com/auth/userinfo.profile'); 

if (!isset($_GET['code'])) {
    $authUrl = $client->createAuthUrl();

    header("Location: " . $authUrl);

    exit;
}else{

}

