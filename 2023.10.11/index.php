<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução a Banco de Dados SQLite com PHP</title>
</head>

<body>
    <?php
    /* Cria uma conexão com o Banco de Dados */
    $conexao = new PDO("sqlite:carros_bd.sqlite");

    /* Consulta ao banco */
    $consulta = $conexao->query("SELECT * FROM carros;");
    $carros = $consulta->fetchAll();

    /* Imprime na tela o array de carros */
    ?>
    <pre>
    <?php
    print_r($carros);
    ?>
    </pre>
</body>

</html>