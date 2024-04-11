<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= webroot() ?>images/a.jpg" height="550"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= webroot() ?>images/b.jpg" height="550"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= webroot() ?>images/c.jpg" height="550"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>

<h2>
  Produtos
</h2>

<div>
  <?php
   
  while ($produto = mysqli_fetch_array($result)) :
  $idProd = $produto['id'];
  ?>
    <div class="col">
      <img src="<?= webroot() ?>images/produto.jpg">
      <div class="cardd-header">
      <?php echo '<a class=link href="?action=showdetails&product_id='.$idProd.'"><b> '.$produto["titulo"].' </b></a>'; ?> 
      </div>
      <div class="cardd-body">
        <p>
          <?= $produto["categoria"] ?> 
        </p>
        <p>
          <?= $produto["conteudo"] ?>
        </p>
      </div>
      <div class="cardd-footer">
        <p>R$<?= $produto["preco"] ?> 
      </div>
      
      <form action=" ">
        <input type="hidden" name="produto_id" value="<?= $produto["id"]?>">
        <input class="quant" type="number" name="qtd" value="1">
        <input type="hidden" name="action" value="addtocart" />
        <button class="add" type="submit">Adicionar ao carrinho</button>

    </form>
    </div>
   
</div>

<?php
  endwhile;
?>
</div>