<?php

include("qqq.php");

$id = $_GET['id'];

$sql = "DELETE FROM filmes WHERE id = $id";

$conn->query($sql);

header("Location: listar.php");
exit;