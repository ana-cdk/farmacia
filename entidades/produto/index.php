<?php

include '../../config.php';

$action = isset($_REQUEST['action'])
  ? $_REQUEST['action'] : null;

if ($action == "addtocart") {
  $view = 'view/cart.php';
}
  else if ($action == "del") {
    $view = 'view/cart.php';

} else if ($action == "showdetails") {
  $view = 'view/details.php';

include '../../template/index.php';

?>