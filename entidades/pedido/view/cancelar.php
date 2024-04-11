<?php 
require(approot().'conexao.php');

$cod_pedido =$_GET['num_pedido'];
$alterar = $_conn->query("UPDATE tb_pedido SET status_pedido = 'Cancelado' WHERE num_pedido = '$cod_pedido'");
echo '<div class="alert alert-danger" role="alert">Pedido cancelado</div>';


include 'meuspedidos.php';

?>