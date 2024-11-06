<?php
// Conexão com o banco de dados
include('includes/db.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $post_id = $_POST['post_id']; // ID da postagem
  $user_id = $_POST['user_id']; // ID do usuário
  $comment = $_POST['comment']; // Comentário

  // Validar os dados
  if (!empty($post_id) && !empty($user_id) && !empty($comment)) {
    // Preparar a query para inserir o comentário
    $sql = "INSERT INTO comments (post_id, user_id, comment, created_at) VALUES ('$post_id', '$user_id', '$comment', NOW())";

    if ($conn->query($sql) === TRUE) {
      echo "Comentário adicionado com sucesso!";
    } else {
      echo "Erro: " . $conn->error;
    }
  } else {
    echo "Preencha todos os campos!";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Comentário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mt-5">
    <h2>Adicionar Comentário</h2>
    <form method="POST" action="add_comment.php">
      <div class="mb-3">
        <label for="post_id" class="form-label">ID da Postagem</label>
        <input type="number" class="form-control" id="post_id" name="post_id" required>
      </div>
      <div class="mb-3">
        <label for="user_id" class="form-label">ID do Usuário</label>
        <input type="number" class="form-control" id="user_id" name="user_id" required>
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">Comentário</label>
        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Adicionar Comentário</button>
    </form>
  </div>
</body>

</html>