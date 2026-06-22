<?php
include("qqq.php");

$id = $_GET['id'];

$sql = "SELECT * FROM filmes WHERE id = $id";
$resultado = $conn->query($sql);

$filme = $resultado->fetch_assoc();

if(isset($_POST['atualizar'])){

    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];
    $ano = $_POST['ano'];

    $sql = "UPDATE filmes
            SET titulo='$titulo',
                diretor='$diretor',
                ano='$ano'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: listar.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Filme</title>
</head>
<body>

<h2>Editar Filme</h2>

<form method="POST">

    <input
        type="text"
        name="titulo"
        value="<?= $filme['titulo'] ?>"
        required>

    <br><br>

    <input
        type="text"
        name="diretor"
        value="<?= $filme['diretor'] ?>"
        required>

    <br><br>

    <input
        type="number"
        name="ano"
        value="<?= $filme['ano'] ?>"
        required>

    <br><br>

    <button type="submit" name="atualizar">
        Atualizar
    </button>

</form>

</body>
</html>