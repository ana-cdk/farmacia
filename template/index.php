<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FarmaStar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="<?= webroot() ?>template/css/estilo.css">
 
</head>

<body>

<header>
<h1><a href="<?= webroot() ?>"><img src="<?= webroot() ?>images/logo.png" alt="FarmaStar" /></a></h1>   

<nav>
<ul>
        <?php
        if (isset($_SESSION['farmacia_user_id'])) {
          $login_page = webroot() . 'auth/?action=logout';
          $login_name = explode(' ', $_SESSION['farmacia_user_nome'])[0] .' (Logout)';
        } else {
          $login_page = webroot() . 'auth';
          $login_name = 'Login';
        }
        ?>
        <li><a href="<?= $login_page ?>"><?= $login_name ?></a></li>
        <li><a href="<?= webroot() ?>entidades/usuario/?action=novo">Cadastre-se</a></li>
      </ul>
</nav>    
    
</header>
<nav class="principal">
  <?php include approot() . 'template/menu.php'; ?>
</nav>

<main>
<?php
    if (isset($view))
      include $view;
    ?>
</main>

<footer>
  Todos os direitos reservados a FarmaStar 2021.
</footer>
</body>

</html>