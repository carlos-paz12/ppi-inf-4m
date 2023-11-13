<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/carro_insert.css">
    <title>CRUD PHP</title>
</head>

<body>
    <header>
        <h2>Carros</h2>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="carros_insert.html">Inserir novo carro</a>
            </li>
        </ul>
    </header>
    <main>
    <?php
        $id = 0;
        $car = null;

        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            $caminhoBanco = "database/carros_bd.sqlite";
            $conexao = new PDO("sqlite:".$caminhoBanco);
            $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            $consulta = $conexao->prepare("SELECT * FROM carros WHERE id=:id;");
            $consulta->bindParam(":id", $id);

            $consulta->execute();

            $carro = $consulta->fetch();
        }
        ?>
        <form action="database/services/update_service.php" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $id ?>">
            </div>
            <div class="form-group">
                <label for="modelo" class="form-label">Modelo</label> <br>
                <input type="text" class="form-input" id="modelo" name="modelo" value="<?= is_null($carro) ? '' : $carro->modelo ?>">
            </div>
            <div class="form-group">
                <label for="marca" class="form-label">Marca</label> <br>
                <input type="text" class="form-input" id="marca" name="marca" value="<?= is_null($carro) ? '' : $carro->marca ?>">
            </div>
            <div class="form-group">
                <label for="autonomia" class="form-label">Autonomia</label> <br>
                <input type="number" class="form-input" id="autonomia" name="autonomia" value="<?= is_null($carro) ? '' : $carro->autonomia ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn" id="btn-salvar">Salvar</button>
            </div>
        </form>
    </main>
</body>

</html>