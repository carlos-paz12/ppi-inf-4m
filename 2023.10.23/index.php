<!DOCTYPE html>
<html lang="pt-br">

<?php
$caminhoBanco = "database/carros_bd.sqlite";
$conexao = new PDO("sqlite:".$caminhoBanco);
$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/index.css">
    <title>CRUD PHP</title>
</head>

<body>
    <header>
        <h2>Carros</h2>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="carros_insert.html">Inserir novo carro</a>
            </li>
        </ul>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">PLACA</th>
                    <th scope="col">MODELO</th>
                    <th scope="col">MARCA</th>
                    <th scope="col">AUTONOMIA (KM/L)</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">DELETAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $consulta = $conexao->query("SELECT * FROM carros;");
                $carros = $consulta->fetchAll();

                foreach ($carros as $carro) :
                ?>
                    <tr>
                        <td><?= $carro->id; ?></td>
                        <td><?= $carro->placa; ?></td>
                        <td><?= $carro->modelo; ?></td>
                        <td><?= $carro->marca; ?></td>
                        <td><?= $carro->autonomia; ?></td>
                        <td>
                            <a href="#" class="btn material-symbols-outlined" id="btn-editar">edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn material-symbols-outlined" id="btn-deletar">delete</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>