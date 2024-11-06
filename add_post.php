<?php
// Conexão com o banco de dados
include('includes/db.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_id = $_POST['user_id']; // ID do usuário
  $content = $_POST['content']; // Conteúdo da postagem

  // Validar os dados
  if (!empty($user_id) && !empty($content)) {
    // Preparar a query para inserir a postagem
    $sql = "INSERT INTO posts (user_id, content, created_at) VALUES ('$user_id', '$content', NOW())";

    if ($conn->query($sql) === TRUE) {
      echo "Postagem adicionada com sucesso!";
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
  <title>Adicionar Postagem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mt-5">
    <h2>Adicionar Postagem</h2>
    <form method="POST" action="add_post.php">
      <div class="mb-3">
        <label for="user_id" class="form-label">ID do Usuário</label>
        <input type="number" class="form-control" id="user_id" name="user_id" required>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Conteúdo da Postagem</label>
        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Adicionar Postagem</button>
    </form>
  </div>
</body>

</html>