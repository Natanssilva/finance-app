<?php
// session_start();

require '../vendor/autoload.php'; // Carrega a biblioteca do Google API Client
require_once '../src/biblioteca/funcoes.php';

// $params = [];

$client = new Google_Client();
$client->setClientId('475090256871-duu195bffbhq80ub6rs39e10pd4ts2jp.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/finance-app/src/home.php');
$client->revokeToken();
// showArray($client);exit;



$client->addScope('https://www.googleapis.com/auth/userinfo.profile'); 
// showArray($client);exit;


// $params = $_GET['code'];


if (!isset($_GET['code'])) {
    $authUrl = $client->createAuthUrl();
    $params = [
        'response_type' => 'code',
        'client_id' => $client->getClientId(),
        'redirect_uri' => $client->getRedirectUri(),
        'scope' =>implode(' ', $client->getScopes())  
    ];

    // showArray($params);exit;

    header("Location: " . $authUrl . '?'. http_build_query($params));
    exit;
}else{

}

