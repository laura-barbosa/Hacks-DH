<?php
    require_once("utils/funcaoCadastro.php");

    if($_POST){
      
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $confirmaSenha = $_POST["confirmaSenha"];
      
      if($senha !== $confirmaSenha){
        $mensagem = "Senha e confirmação de senha não conferem";
      } else {
        $novoUsuario = [
          "nome" => $nome,
          "email" => $email,
          "senha" => $senha,
          "nivelAcesso"=> 0
        ];

        $cadastrou = cadastroDeUsuario($novoUsuario);
      }
    }

?>

<?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <div class="container">
    <h1>Formulário de Cadastro</h1>
    <form method="POST" action="cadastro.php">
     
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