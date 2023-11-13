<?php

$caminhoBanco = "../carros_bd.sqlite";
$conexao = new PDO("sqlite:".$caminhoBanco);
$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id = $_POST["id"];
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$autonomia = $_POST["autonomia"];

$comandoUpdate = $conexao->prepare("UPDATE carros SET modelo=:modelo, marca=:marca, autonomia=:autonomia WHERE id=:id;");

$comandoUpdate->bindParam(":modelo", $modelo);
$comandoUpdate->bindParam(":marca", $marca);
$comandoUpdate->bindParam(":autonomia", $autonomia);
$comandoUpdate->bindParam(":id", $id);

$comandoUpdate->execute();

header("Location:../../index.php");