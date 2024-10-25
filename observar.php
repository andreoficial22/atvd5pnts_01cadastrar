<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php include "verificar_logado.php"; ?>

    <h1>Livros Cadastrados</h1>
    <div id="livros">
        <?php
        include "conexao.php";

        $sql = "SELECT * FROM tb_livros";
        $consultar = $conexao->prepare($sql);

        try {
            $consultar->execute();
            $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultados as $item) {
                echo "
                    <div class='cartao'>
                        ID: {$item['id_livro']}<br>
                        Título: {$item['titulo']}<br>
                        Autor: {$item['autor']}<br>
                        Ano de Publicação: {$item['ano_publicacao']}<br>
                        Categoria: {$item['categoria']}
                        <hr>
                    </div>
                ";
            }
        } catch (PDOException $erro) {
            echo "Falha ao consultar! " . $erro->getMessage();
        }
        ?>
    </div>
</body>
</html>
