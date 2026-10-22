<?php

$host = 'mysql';
$banco = 'amigopet';
$usuario = 'root';
$senha = '1234';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $erro) {
    error_log($erro->getMessage());
    die('Não foi possível conectar ao banco de dados.');
}