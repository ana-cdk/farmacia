<?php 

$idProduto = $_GET['product_id'];


$sql = "SELECT  
       tb_produto.titulo,
       tb_produto.descricao,
       tb_produto.preco,
       tb_produto.conteudo
       FROM tb_produto
       WHERE id= '$idProduto'";

       $result = $_conn->query($sql) or die ;
       $exibe = mysqli_fetch_array($result);
      echo '<h3>'.$exibe['titulo'].'</h3>';
      
       ?>
        <img src="<?= webroot() ?>images/produto.jpg">
       <?php 
        echo '
        <h5><b>Descrição</b></h5>
        '.$exibe['conteudo'].'<br>
        '.$exibe['descricao'].' <br><br>
       
         <h5>R$'.$exibe['preco'].'</h5>';


       ?>

        <form action=" ">
        <input type="hidden" name="produto_id" value="<?= $idProduto?>">
        <input class="quant" type="number" name="qtd" value="1">
        <input type="hidden" name="action" value="addtocart" />
        <button class="add" type="submit">Adicionar ao carrinho</button>
        </form>

        