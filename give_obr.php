<?php
// session_start();
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "wqlsaxte_667", "12345", "wqlsaxte_667");
if ($mysqli == false) {
  print("error");
} else {

  $id = $_POST["id"];


  $result = $mysqli->query("SELECT * FROM `users` WHERE `id`='$id'");
  $result = $result->fetch_assoc();
  if ($result->num_rows !== 0) {
    echo "ok";
  }
}
