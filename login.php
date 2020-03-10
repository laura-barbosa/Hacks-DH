<?php
  if($_POST){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
  }
?>
<?php require_once('inc/head.php'); ?>
<body>
  <?php require_once('inc/header.php'); ?>

  <div class="container">
    <h1>Preencha o formulário para efetuar login</h1>
    <form method="POST" action="login.php">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="usuario@exemplo.com">
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>
