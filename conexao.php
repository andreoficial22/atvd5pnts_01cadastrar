<?php
$servidor = 'localhost';
$bancoDados = 'bd_senai_at1';
$usuario = 'root';
$senha = '';
$porta_bd = '3306';
try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$bancoDados", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro meu amiguinho:" . $erro->getMessage();
}
?>
