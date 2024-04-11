<?php

if (isset($_SESSION['farmacia_user_id'])) {

$data = date('y-m-d');
$ticket = uniqid();
$cd_user = $_SESSION['farmacia_user_id'];


foreach($_SESSION['cart'] as $id => $qtd){
    $sql = "SELECT preco FROM tb_produto WHERE id= '$id'";
    $result = $_conn->query($sql) or die ;
    $exibe = mysqli_fetch_array($result);
    $preco = $exibe['preco'];

    
    require(approot().'conexao.php');
    $inserir = $_conn->query("INSERT INTO tb_pedido(num_pedido, 
    id_usuario, 
    id_produto, 
    qt_prod, 
    vl_prod, 
    dt_venda) VALUES('".$ticket."',
    '$cd_user',
    '$id',
    '$qtd',
    '$preco',
    '$data')");

} 
echo '<div class="alert alert-success" role="alert">Pedido finalizado com sucesso!</div>';
}else{
    echo '<div class="alert alert-danger" role="alert">É necessário fazer login para finalizar o seu pedido</div>';
    include approot().'auth/view/form.php';

    
}

?>