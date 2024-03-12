<?php
include_once '../includes/_banco.php';
include_once './_header.php';

$sql = "SELECT * FROM produtos WHERE Ativo = 1";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);

include_once './_menu.php';
?>

<main>
    <h1 style="text-align: center;">Administração das Categorias</h1>

    <a href="produto-salvar.php">Inserir</a>
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
    <td><?php echo $dado['ProdutosID'];?></td>
    <td><a style="color: #000000; " href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutosID'];?>"><?php echo $dado['Nome']?></a></td>
    <td><a href="produto-processa.php?acao=excluir&id=<?php echo $dado['ProdutosID'];?>">Excluir</a></td>
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