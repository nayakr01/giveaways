<?php
require_once('controllers/UserController.php');
require_once('controllers/LotteryController.php');

session_start();

$UserController = new UserController();
$LotteryController = new LotteryController();

if (isset($_SERVER['PATH_INFO'])) {
  $partes = explode('/', $_SERVER['PATH_INFO']);
  if ($partes[1] == 'login') {
    if (empty($_POST['user'])) {
      $UserController -> pagLogin();
    } else {
      $UserController -> singIn($_POST['user'], $_POST['password']);
    }
  } elseif($partes[1] == 'logout') {
    $UserController -> logOut();
  } elseif($partes[1] == 'index') {
    $UserController -> pagIndex();
  } elseif($partes[1] == 'list') {
    $LotteryController -> list();
  } elseif($partes[1] == 'raffles') {
    if (empty($_POST['title'])) {
      $LotteryController -> formRaffles();
    } else {
      $LotteryController -> createRaffles($_POST['title'], $_POST['firstTicket'], $_POST['lastTicket']);
    }
  } elseif($partes[1] == 'domino') {
    if (empty($_POST['title'])) {
      $LotteryController -> formDomino();
    } else {
      $LotteryController -> createDomino($_POST['title'], $_POST['number']);
    }
  } elseif($partes[1] == 'delete' && is_numeric($partes[2])) {
    $LotteryController -> delete($partes[2]);
  } elseif($partes[1] == 'print' && is_numeric($partes[2])) {
    $LotteryController -> print($partes[2]);
  } else {
    $LotteryController -> list();
  }
} else {
  header('Location: /index.php/login');
}
?>