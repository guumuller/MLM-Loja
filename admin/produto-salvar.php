<?php
include_once '../includes/_banco.php';
include_once './_header.php';

if ( isset ($_GET['id']) || !empty ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE ProdutosID = ".$id;
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
} else {
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
}
include_once './_menu.php';
?>

<main>
    <h2 style="text-align: center;">Adminstração dos Produtos</h2>
    <a href="categoria-lista.php">Listagem</a>
    <hr>
    <form style="text-align: center;" action="produto-processa.php" method="post">
        <input type="text" value="salvar" name="acao">
        <input type="text" name="id" id="<?php echo $id;?>"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
        <label for="descricao">Descrição::</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $dados ['Descricao'];?></textarea><br>
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>


<?php
include_once './_footer.php';
?>