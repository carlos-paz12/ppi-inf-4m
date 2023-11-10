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
                <a href="#">Inserir novo carro</a>
            </li>
        </ul>
    </header>
    <main>
        <form action="database/services/insert_service.php" method="post">
            <div class="form-group">
                <label for="placa" class="form-label">Placa</label> <br>
                <input type="text" class="form-input" id="placa" name="placa" required>
            </div>
            <div class="form-group">
                <label for="modelo" class="form-label">Modelo</label> <br>
                <input type="text" class="form-input" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="marca" class="form-label">Marca</label> <br>
                <input type="text" class="form-input" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="autonomia" class="form-label">Autonomia</label> <br>
                <input type="number" class="form-input" id="autonomia" name="autonomia" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn" id="btn-salvar">Salvar</button>
            </div>
        </form>
    </main>
</body>

</html>