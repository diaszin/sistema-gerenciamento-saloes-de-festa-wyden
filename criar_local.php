<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Salão de Festas</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap JS, optional -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
</head>

<body>

  <div class="container mt-5">
    <h1>Cadastro de Salão de Festas</h1>
    <form action="cadastro_local.php" method="post">
      <div class="form-group">
        
        <label for="nomeSalao">Nome da localização:</label>
        <input type="text" class="form-control" id="nomeLocal" name="nomeLocal" required>
      </div>
      
     
      
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>


</body>

</html>