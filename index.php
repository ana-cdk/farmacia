<?php
   
    include 'config.php';
    include approot() . 'entidades/produto/db.php';

    $categoria = @$_REQUEST['categoria'];

    $result = getProdutos($_conn, $categoria);

    $view = approot() . 'entidades/produto/view/list_public.php';


    $action = isset($_REQUEST['action'])
  ? $_REQUEST['action'] : null;

    if ($action == "addtocart") {
     $view = approot() .'entidades/produto/view/cart.php';
}
if ($action == "del") {
  $view = approot() .'entidades/produto/view/cart.php';
}

if ($action == "fin") {
  $view = approot() .'entidades/produto/view/finalizar.php';
}

if($action == 'validar'){
$view = approot() . 'auth/index.php';
}

else if ($action == "showdetails") {
  $view = approot() .'entidades/produto/view/details.php';
}
    include 'template/index.php';
?>