

<?php
    if(isset($_SESSION['farmacia_user_id'])) {
       $userID = $_SESSION['farmacia_user_id'];

       echo '<h2> Meus Pedidos </h2>';

       echo '<table class="tabelacarrinho ">
       <tr><td><b>Data</td>
       <td><b>Número do pedido</td>
       <td><b>Produto</td>
       <td><b>Quantidade</td>
       <td><b>Preço</td>
       <td><b>Status</td>
       <td><b>Cancelar</td></tr>
       </table>'; 

       $sql = "SELECT  tb_pedido.id_usuario,
       tb_pedido.dt_venda,
       tb_pedido.num_pedido,
       tb_produto.titulo,
       tb_pedido.qt_prod,
       tb_pedido.vl_total,
       tb_pedido.status_pedido
        FROM tb_pedido inner join tb_produto 
       on tb_pedido.id_produto = tb_produto.id WHERE id_usuario = '$userID'";
       $result = $_conn->query($sql) or die ;
   

       while($exibe = mysqli_fetch_array($result)){
        echo '<table class="tabelacarrinho">
       <tr> <td>'.$exibe['dt_venda'].'</td>
        <td>'.$exibe['num_pedido'].'</td>
        <td>'.$exibe['titulo'].'</td>
        <td>'.$exibe['qt_prod'].'</td>
        <td>'.$exibe['vl_total'].'</td>
        <td>'.$exibe['status_pedido'].'</td>
        <td><a href="?action=cancelar&num_pedido='.$exibe['num_pedido'].'"><button type="button" class="btn btn-danger">Cancelar o pedido</button></a></td></tr>
        </table>';

        
       }
    }else{
    echo '<div class="alert alert-danger" role="alert">É necessário fazer login para visualizar os seus pedidos</div>';
        include approot().'auth/view/form.php';
    }

      
    
?>