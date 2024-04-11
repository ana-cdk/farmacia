<?php
session_start();


$CONFIG['webroot'] = '/farmacia/';

function webroot()
{
  global $CONFIG;
  return $CONFIG['webroot'];
}

function approot()
{
  global $CONFIG;
  return $_SERVER['DOCUMENT_ROOT'] . '/' . $CONFIG['webroot'];
}

require_once approot() . 'conexao.php';

?>