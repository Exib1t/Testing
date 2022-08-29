<?php

  require_once 'connect.php';

  $login = $_POST['login'];
  $password = $_POST['password'];

  mysqli_query($connect, "INSERT INTO `Accounts` (`Login`, `Password`) VALUES ('$login', '$password')");

  header("Location: /index.php");
