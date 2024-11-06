<?php
include('includes/db.php');
include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Simples com MySQL</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1 class="mt-5">Bem-vindo ao site de exemplo</h1>

    <h3 class="mt-5">Usuários</h3>
    <ul class="list-group">
      <?php
      $usuarios = getUsers();
      foreach ($usuarios as $usuario) {
        echo "<li class='list-group-item'>{$usuario['nome']} - {$usuario['email']}</li>";
      }
      ?>
    </ul>

    <h3 class="mt-5">Postagens</h3>
    <ul class="list-group">
      <?php
      $posts = getPosts();
      foreach ($posts as $post) {
        echo "<li class='list-group-item'>
                        <strong>{$post['titulo']}</strong><br>
                        {$post['conteudo']}
                    </li>";
      }
      ?>
    </ul>

    <h3 class="mt-5">Comentários</h3>
    <ul class="list-group">
      <?php
      $comentarios = getComments();
      foreach ($comentarios as $comentario) {
        echo "<li class='list-group-item'>
                        {$comentario['comentario']} - Usuário ID: {$comentario['usuario_id']} (Post ID: {$comentario['post_id']})
                    </li>";
      }
      ?>
    </ul>

    <a href="add_user.php" class="btn btn-primary mt-3">Adicionar Novo Usuário</a>
    <a href="add_post.php" class="btn btn-secondary mt-3">Adicionar Nova Postagem</a>
    <a href="add_comment.php" class="btn btn-success mt-3">Adicionar Novo Comentário</a>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>