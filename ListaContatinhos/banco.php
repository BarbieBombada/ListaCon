<?php
function getConnection() {
  $username = 'macedo';
  $password = '';
  $conn = new PDO('mysql:host=localhost;dbname=prova',  $username, $password);
  return $conn;
}
?>
