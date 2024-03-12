<?php
include_once '../includes/_banco.php';
include_once './_header.php';
include_once './_valida.php';

$sql = "SELECT * FROM categorias WHERE Ativo = 1";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);

include_once './_menu.php';
?>

<main>
    <h1 style="text-align: center;">Administração das Categorias</h1>

    <a href="categoria-salvar.php">Inserir</a>
    <hr>
    <table style="text-align: center; background-color: #F5F5F5;" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

<?php
if ($resultado) {
    while ($dado = mysqli_fetch_array($resultado)) {
?>

<tr style="text-align: center;">
    <td><?php echo $dado['CategoriaID'];?></td>
    <td><a style="color: #000000; " href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome']?></a></td>
    <td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
</tr>

<?php
    }
}else{
?>

<tr>
    <td colspan="3">Resultados não encontrados</td>
</tr>

<?php
}
?>

<tr>
    <td colspan="3">Total de registros:<?php echo $total; ?></td>
</tr>

    </table>
</main>

<?php
include_once './_footer.php';
?>