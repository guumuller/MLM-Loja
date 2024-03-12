<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>

<?php 
 
 $sql = "SELECT * FROM produtos WHERE ProdutosID = $id";
 

 $exec = mysqli_query($conn, $sql);

 $numProdutos = mysqli_num_rows($exec);
 $produto = mysqli_fetch_assoc($exec);
?>
<div id="maindetalhe">
<div id="card" class="card mt-3" style="width: 18rem; margin: 2rem;">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1><?php echo $produto['Nome']; ?></h1>
                <p><?php echo $produto['Descricao']; ?></p>
                <img id="img" src="./content/<?php echo $produto['imagem']; ?>">
                <h5><?php echo $produto['Preco']; ?></h5>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <a href="pagamento.php"><button id="botao" type="button" class="btn btn-primary" >Comprar</button></a>
            </div>

            <style>
                #botao{
                    margin-bottom: 20px;
                    border: none;
                    background-color: LightSeaGreen; 
                    padding-left: 50px;
                    padding-right: 50px;  
                }

                #card{
                    text-align: center;
                    box-shadow: 0 0 8px 4px black;
                }

                #img{
                    width: 217px;
                }
            </style>
        </div>
    </div>
</div>

</div>
    

<?php
// include do footer
include_once './includes/_footer.php';
?>