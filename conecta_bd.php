<?php

$endereco = 'localhost';
$banco =    'biblioteca';
$usuario = 'postgres';
$senha = 'postgres';

try{

    $pdo = new PDO("pgsql:host=$endereco; port=5432; dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    //echo 'Conectado';
}
catch (PDOException $e){
    echo 'Falha ao conectar ao banco <br>';
    die($e->getMessage());
}

?>