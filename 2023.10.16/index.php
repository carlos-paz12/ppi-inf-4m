<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos de INSERT e DELETE</title>
</head>

<body>
    <?php
    /* Cria uma conexão com o Banco de Dados */
    $conexao = new PDO("sqlite:carros_bd.sqlite");
    /* Evita duplicação das informações */
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $placa = "N704KJ";
    $modelo = "Fusca 1958 Blue";
    $marca = "Volkswagen";
    $autonomia = 6.2;
    
    /* Comando SQL INSERT */
    $comandoInsert = $conexao->prepare("INSERT INTO carros (placa, modelo, marca, autonomia) VALUES (:placa, :modelo, :marca, :autonomia);");

    /*
     * Substitue os marcadores de posição pelos devidos valores
     *
     * Evita que o software sofra de uma SQL Injection
     */
    $comandoInsert->bindParam(":placa", $placa);
    $comandoInsert->bindParam(":modelo", $modelo);
    $comandoInsert->bindParam(":marca", $marca);
    $comandoInsert->bindParam(":autonomia", $autonomia);

    /* Executa o comando que foi preparado */
    $comandoInsert->execute();


    /* Comando SQL DELETE */
    $comandoDelete = $conexao->prepare("DELETE FROM carros WHERE placa=:placa");
    
    $comandoDelete->bindParam(":placa", $placa);

    $comandoDelete->execute();

    /* Consulta ao banco */
    $consulta = $conexao->query("SELECT * FROM carros;");
    $carros = $consulta->fetchAll();

    /* Imprime na tela o array de carros */
    echo "<pre>";
    print_r($carros);
    echo "</pre>";
    ?>
</body>

</html>