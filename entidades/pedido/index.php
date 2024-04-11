<?php 

include '../../config.php';

$action = isset($_REQUEST['action'])
  ? $_REQUEST['action'] : null;

  if($action == "show"){
    $view ='view/meuspedidos.php';
  }else if($action == "cancelar"){
    $view ='view/cancelar.php';
  }
  if($action == 'validar'){
    $view = approot() . 'auth/index.php';
    }


  include '../../template/index.php';

  
?>
