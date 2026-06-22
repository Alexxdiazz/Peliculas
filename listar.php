<?php

include "php/conexao.php";

$sql = "
SELECT filmes.*,
       generos.nome AS genero
FROM filmes
LEFT JOIN generos
ON filmes.genero_id = generos.id
";

$resultado = $conn->query($sql);

while($linha = $resultado->fetch_assoc()){
?>
<tr>
    <td><?= $linha['titulo'] ?></td>
    <td><?= $linha['diretor'] ?></td>
    <td><?= $linha['ano'] ?></td>
    <td><?= $linha['genero'] ?></td>

    <td>
        <a href="editar.php?id=<?= $linha['id'] ?>">
            Editar
        </a>

        <a href="php/excluir.php?id=<?= $linha['id'] ?>">
            Excluir
        </a>
    </td>
</tr>

<?php } ?>