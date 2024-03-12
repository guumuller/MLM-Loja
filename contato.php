<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

if (isset ( $_POST['txtNome']) ) {
    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    echo $nome. "<br>". $email."<br>". $telefone."<br>". $mensagem;
}

?>

<h1>Contato</h1>
<form action="./contato.php" method="post">
    <ul>
        <li>
        <label for="txtNome">Nome Completo</label>
        <input type="text" name="txtNome" id="txtNome">
        </li>
        <li>
        <label for="txtEmail">E-mail</label>
        <input type="text" name="txtEmail" id="txtEmail">
        </li>
        <li>
        <label for="txtTelefone">Telefone</label>
        <input type="text" name="txtTelefone" id="txtTelefone">
        </li>
        <li>
        <label for="txtMensagem">Mensagem</label>
        <input type="text" name="txtMensagem" id="txtMensagem">
        </li>
        <input type="submit" value="Cadastrar">
    </ul>
</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>