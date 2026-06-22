<?php

include "conexao.php";

$titulo = $_POST['titulo'];
$diretor = $_POST['diretor'];
$ano = $_POST['ano'];
$genero = $_POST['genero_id'];

$sql = "INSERT INTO filmes
(titulo,diretor,ano,genero_id)
VALUES
('$titulo','$diretor','$ano','$genero')";

$conn->query($sql);

header("Location: ../listagem.php");