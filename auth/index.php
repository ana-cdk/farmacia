<?php 

include '../config.php';

function formValido($arr)
{
  return !empty($arr['usuario']) && !empty($arr['senha']);
}

$action = isset($_REQUEST['action'])
  ? $_REQUEST['action'] : null;

  if($action == 'logout'){
    session_destroy();

    Header('Location: ' . webroot());
    exit;
  }

  else if($action == 'validar'){
   $usuario = trim($_POST['usuario']);
   $senha = trim($_POST['senha']);

   if (!formValido($_POST)) {
    $message = "Usuário e/ou senha inválidos";
    $view = 'view/form.php';
   } else {
      $sql = "SELECT distinct id, nome, email, password FROM tb_usuario
      WHERE email = '$usuario' AND password = '$senha'";

   $result = $_conn->query($sql);

   if (mysqli_num_rows($result) > 0) {
     $user = $result->fetch_array();

     session_start(); 

     $_SESSION['farmacia_user_id'] = $user['id'];
     $_SESSION['farmacia_user_nome'] = $user['nome'];
     $_SESSION['farmacia_user_email'] = $user['email'];

     Header("Location: " . webroot());
     exit;
   }else{
    
    $message = "Usuário e/ou senha inválidos";
    
    $view = 'view/form.php';
    }
   }
  }else{
    $view = 'view/form.php';
  }
  

include approot() . 'template/index.php';
?>