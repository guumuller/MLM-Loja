<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>




<div id="capas">
   <a href="./produtos-cate1.php"><img id="imgguitarras" src="./content./imgguitarras.png" alt=""></a>
   <a href="./produtos-cate2.php"><img id="imgguitarras" src="./content./imgbaixos.png" alt=""></a>
   <a href="./produtos-cate3.php"><img id="imgguitarras" src="./content./imgamplificadores.png" alt=""></a>
</div>




<style>
   #capas{
      text-align: center;
   }

   #imgguitarras{
      width: 296px;
      height: 296px;
      margin-left: 30px;
      margin-top: 30px;
      box-shadow: 0 0 8px 4px black;
   }
</style>
</h1>

<div class="container">
    <div class="row mt-5">
   
    <?php 
 
 $sql = "SELECT * from produtos where Ativo = 1 ORDER BY RAND() LIMIT 3";

 $exec = mysqli_query($conn, $sql);

 $numProdutos = mysqli_num_rows($exec);

 while ($dados = mysqli_fetch_assoc($exec)){
 ?>


 <?php
 }
 ?> 
 </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>

   
