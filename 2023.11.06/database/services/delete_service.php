<?php

$caminhoBanco = "../carros_bd.sqlite";
$conexao = new PDO("sqlite:".$caminhoBanco);
$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id = $_GET["id"];

$comandoDelete = $conexao->prepare("DELETE FROM carros WHERE id=:id;");

$comandoDelete->bindParam(":id", $id);

$comandoDelete->execute();

header("Location:../../index.php");