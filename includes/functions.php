<?php
function addUser($nome, $email) {
  global $conn;

  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) { return false; }

  $stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
  $stmt->bind_param("ss", $nome, $email);

  return $stmt->execute();
}

function getUsers() {
  global $conn;

  $result = $conn->query("SELECT * FROM usuarios");
  
  return $result->fetch_all(MYSQLI_ASSOC);
}
