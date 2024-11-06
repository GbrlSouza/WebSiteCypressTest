<?php
// Função para adicionar um usuário
function addUser($nome, $email)
{
  global $conn;
  $stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
  $stmt->bind_param("ss", $nome, $email);
  return $stmt->execute();
}

// Função para adicionar uma postagem
function addPost($usuario_id, $titulo, $conteudo)
{
  global $conn;
  $stmt = $conn->prepare("INSERT INTO posts (usuario_id, titulo, conteudo) VALUES (?, ?, ?)");
  $stmt->bind_param("iss", $usuario_id, $titulo, $conteudo);
  return $stmt->execute();
}

// Função para adicionar um comentário
function addComment($post_id, $usuario_id, $comentario)
{
  global $conn;
  $stmt = $conn->prepare("INSERT INTO comentarios (post_id, usuario_id, comentario) VALUES (?, ?, ?)");
  $stmt->bind_param("iis", $post_id, $usuario_id, $comentario);
  return $stmt->execute();
}

// Função para obter todos os usuários
function getUsers()
{
  global $conn;
  $result = $conn->query("SELECT * FROM usuarios");
  return $result->fetch_all(MYSQLI_ASSOC);
}

// Função para obter todas as postagens
function getPosts()
{
  global $conn;
  $result = $conn->query("SELECT * FROM posts");
  return $result->fetch_all(MYSQLI_ASSOC);
}

// Função para obter todos os comentários
function getComments()
{
  global $conn;
  $result = $conn->query("SELECT * FROM comentarios");
  return $result->fetch_all(MYSQLI_ASSOC);
}
