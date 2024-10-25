<?php
include "conexao.php";

$titulo = $_POST['titulo_digitado'];
$autor = $_POST['autor_digitado'];
$ano_publicacao = $_POST['ano_publicacao_digitado'];
$categoria = $_POST['categoria_digitada'];

$sql = "INSERT INTO tb_livros (titulo, autor, ano_publicacao, categoria) VALUES ('$titulo', '$autor', '$ano_publicacao', '$categoria')";
$inserir = $conexao->prepare($sql);

try {
    $inserir->execute();
    echo "Livro cadastrado com sucesso!";
} catch (PDOException $erro) {
    echo "Falha ao inserir! " . $erro->getMessage();
}
?>
