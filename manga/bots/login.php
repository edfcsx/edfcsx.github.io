<?php
	session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pagina para Login">
    <meta name="author" content="Manga Softs">
    <link rel="icon" href="_imagens/favicon.ico">
    <title>Login - Manga Softs</title>
    <link href="_css/bootstrap.min.css" rel="stylesheet">
    <link href="_css/signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center">Login</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-primary btn-block" name="btlogin" value="1" type="submit">Acessar</button>
      </form>
    </div>
  </body>
</html>
