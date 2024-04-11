<?php
include_once approot() . 'entidades/categoria/db.php';
?>


<?php
?>
<ul class="menu">
 
    <li><a href="#">Categorias</a>
    <ul>
    <?php
    $categorias = getCategorias($_conn);
    
        while ($cat = $categorias->fetch_array()) :
    ?>
    <li><a href="<?= webroot() ?>?categoria=<?= $cat['id'] ?>"><?= $cat["nome"] ?></a></li>
  <?php
  endwhile;
  ?>
</ul>
</li>
<li><a href="<?= webroot() ?>?produto_id=0&qtd=0&action=addtocart">Carrinho</a></li>
<li><a href="<?= webroot() ?>entidades/pedido/?action=show">Meus pedidos</a></li>
</ul>