<?php

  require_once 'connect.php';

  $login = $_GET['login'];
  $password = $_GET['password'];

  $accounts = mysqli_query($connect, "SELECT * FROM `Accounts`");
  $accounts = mysqli_fetch_all($accounts);
  foreach ($accounts as $account) {
    if ($login == $account[0] && $password == $account[1]) {
      header("Location: /index.php");
      break;
    }
  }
