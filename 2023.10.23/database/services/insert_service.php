<?php

$caminhoBanco = "../carros_bd.sqlite";
$conexao = new PDO("sqlite:".$caminhoBanco);
$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$placa = $_POST["placa"];
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$autonomia = $_POST["autonomia"];

$comandoInsert = $conexao->prepare("INSERT INTO carros (placa, modelo, marca, autonomia) VALUES (:placa, :modelo, :marca, :autonomia)");

$comandoInsert->bindParam(":placa", $placa);
$comandoInsert->bindParam(":modelo", $modelo);
$comandoInsert->bindParam(":marca", $marca);
$comandoInsert->bindParam(":autonomia", $autonomia);

$comandoInsert->execute();

header("Location:../../carros_insert.html");