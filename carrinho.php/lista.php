<?php
// include do footer
include_once '../includes/_banco.php';
include_once '../includes/_head.php';
include_once '../includes/_header.php';
 
 $sql = "SELECT * from produtos where Ativo = 1";

 $exec = mysqli_query($conn, $sql);

 $numProdutos = mysqli_num_rows($exec);

 while ($dados = mysqli_fetch_assoc($exec)){
 ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./content/<?php echo $dados['imagem'];?>" alt="Card image cap">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<?php
 }
 ?>