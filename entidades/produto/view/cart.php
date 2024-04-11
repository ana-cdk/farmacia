<h2> Carrinho de compras </h2>

<?php
     

     if(!isset($_SESSION['cart'])){
         $_SESSION['cart'] = array();
     }
     

    if($_GET['produto_id']!= 0 ){
    
    $qtd = $_GET['qtd'];
    $id = intval($_GET ['produto_id']);

    if(array_key_exists($id, $_SESSION['cart'])){
         $_SESSION['cart'][$id] += $qtd;
    }else{
        $_SESSION['cart'][$id] = $qtd;
    }
 }


 if($_GET['action'] == 'del'){
    $id = intval($_GET['produto_id']);
    if(isset($_SESSION['cart'][$id])){
        unset($_SESSION['cart'][$id]);
    }
}

    ?>

    <?php


    if(count($_SESSION['cart'])== 0){
       echo '<div class="alert alert-danger" role="alert">Carrinho vazio.</div>';
    }else{
        
        require(approot() .'/conexao.php');
        foreach($_SESSION['cart'] as $id => $qtd){
            $sql = "SELECT * FROM tb_produto WHERE id= '$id'";
            $result = $_conn->query($sql) or die ;
            $produto = mysqli_fetch_array($result);

            $nome = $produto['titulo'];
            $preco = $produto['preco'];
            $sub = $produto['preco'] * $qtd;
            @$total += $sub;

            echo    '<table class="tabelacarrinho">
                    <tr>
                    <td>'.$nome.'</td>
                    <td>'.$preco.'</td>
                    <td>'.$sub.'</td>
                    <td><input type="text" class="quant" name="prod['.$id.']" value="'.$qtd.'"/></td>
                    <td><a href="?produto_id='.$id.'&action=del&qtd=0"><button class="btn btn-danger">Remover do carrinho</button></a></td>
                    </tr></table>';
        }
        echo '<table class="tabelacarrinho"><tr>
                <td> <b>TOTAL </b></td>
                <td> R$ '.$total.'</td>
            </tr></table>';

            
         echo '<form action=" ">
        <input type="hidden" name="action" value="fin" />
        <button class="btn btn-danger" type="submit">Finalizar Pedido</button>
        </form>';
        
           
        
            echo '<a href="index.php"><button class="btn btn-primary">Continuar comprando</button></a>';
    }
    
    ?>
             
         
            

    
