<?php
include('includes/db.php');
include('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  if (addUser($nome, $email)) {
    header('Location: index.php');
  } else {
    echo "Erro ao adicionar usuário.";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Usuário</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1 class="mt-5">Adicionar Usuário</h1>
    <form method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>