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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="mt-5">Bem-vindo ao site de exemplo</h1>

    <h3 class="mt-5">Usuários</h3>
    <ul class="list-group">
      <?php
        $usuarios = getUsers();
        foreach ($usuarios as $usuario) { echo "<li class='list-group-item'>{$usuario['nome']} - {$usuario['email']}</li>"; }
      ?>
    </ul>
    <a href="add_user.php" class="btn btn-primary mt-3">Adicionar Novo Usuário</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>