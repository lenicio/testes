<?php


if (!empty($_GET['username']) && !empty($_GET['password'])) {
  echo "Entrou no IF <br>";
  echo $_GET['username'];
} else {
  header("Location: index.php");
  exit;
}
