<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login Salão de Festas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css_secundario_login.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div id="form_login">
    <h1>Login</h1>
    <form action="./tela_login.php">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" placeholder="Digite o Email" id="email">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" placeholder="Digite a senha" id="senha">
        </div>
        <button type="submit" class="btn btn-primary">ENTRAR</button>
      </form>
      <?php
        // Exibe a mensagem de erro, se houver
        if (isset($mensagem_erro)) {
            echo '<p style="color: red;">' . $mensagem_erro . '</p>';
        }
        ?>
    </div>
</div>
</body>
</html>