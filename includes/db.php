<?php
$servername = "sql308.infinityfree.com";
$username = "if0_37666554";
$password = "h9e8s3w2";
$dbname = "if0_37666554_devlobcypresstests";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
