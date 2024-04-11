<?php 

include '../../config.php';



function getUsuarios($_conn)
{
  $sql = "SELECT * FROM tb_usuario";

  #$result = $_conn->query($sql);
  return mysqli_query($_conn, $sql);
}

function formValido($arr)
{
  return !empty($arr['nome'])
    && !empty($arr['telefone'])
    && !empty($arr['email'])
    && !empty($arr['senha'])
    && ($arr['senha'] == $arr['senha2']);
}

$action = isset($_REQUEST['action'])
  ? $_REQUEST['action'] : null;

if ($action == "novo") {
  $view = 'view/form.php';
}else if ($action == "editar") {
    $view = 'view/form.php';
} else if ($action == "salvar") {
    require('../../conexao.php');

    $sql = "INSERT INTO tb_usuario(
      nome, 
      nascimento, 
      cidade, 
      estado,
      pais,
      email,
      telefone,
      password) VALUES(
        '" . $_POST['nome'] . "',
        '" . $_POST['nascimento'] . "',
        '" . $_POST['cidade'] . "',
        '" . $_POST['uf'] . "',
        '" . $_POST['pais'] . "',
        '" . $_POST['email'] . "',
        '" . $_POST['telefone'] . "',
        '" . $_POST['senha'] . "'
        )";


        if ($result = $_conn->query($sql))
         $view = approot(). 'entidades/usuario/view/sucess.php';
        else
          echo "Falha ao salvar usuário";

        $result = getUsuarios($_conn);
        
    
}else {
    require('../../conexao.php');
    $result = getUsuarios($_conn);
  
    $view = 'view/list.php'; 
  }

  include '../../template/index.php';
?>