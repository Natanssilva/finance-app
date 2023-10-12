<?php

$database = 'myfinance';
$user = 'root';
$password = '';

$ligacao = new PDO("mysql:host=localhost,dbname=$database",$user,$password);

try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}