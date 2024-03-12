<?php 

include_once "../includes/_banco.php";

$acao = $_REQUEST ['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        $sql = "UPDATE produtos SET Ativo = '0' WHERE ProdutosID = $id";
        
        mysqli_query($conn, $sql);

        header('location: ./produto-lista.php');
        break;
    
    case 'salvar';
        $nome = $_POST['nome'];
        // print($nome);
        // print($descricao);

       if (!isset($nome)) {
        header('location: ./produto-lista.php');
       }

       if (!isset($id) || empty($id)) {
        $sql = "INSERT INTO produtos (Nome, Ativo) VALUES ('$nome', 1)";
       } else {
        $sql = "UPDATE produtos SET nome = '$nome' WHERE ProdutosID = $id";        
       }

       mysqli_query($conn, $sql);
       
       header ('location: ./produto-lista.php');

       break;

        
}

?>

