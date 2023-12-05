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
    <form action="processar_formulario.php" method="post">
      <div class="form-group">
        <label for="nomeSalao">Nome do Salão:</label>
        <input type="text" class="form-control" id="nomeSalao" name="nomeSalao" required>
      </div>
      <div class="form-group">
        <label for="numeroSalao">Número do Salão:</label>
        <input type="text" class="form-control" id="numeroSalao" name="numeroSalao" required>
      </div>
      <div class="form-group">
        <label for="localizacaoSalao">Localização do Salão:</label>
        <input type="text" class="form-control" id="localizacaoSalao" name="localizacaoSalao" required>
      </div>
      <div class="form-group">
        <label>Tipos de Decorações Desejadas:</label>
        <?php
        include "./Decoracoes.php";
        $decoracoes = new Decoracoes();
        foreach ($decoracoes->getAll() as $decoracao) {
          $nome_decoracao = $decoracao["nome"];
          $id_decoracao = $decoracao["id"];

          echo " 
          <div class='form-check'>
            <input class='form-check-input' type='checkbox' id='$nome_decoracao' name='decoracoes[]' value='$id_decoracao'>
            <label class='form-check-label' for='$nome_decoracao'>$nome_decoracao</label>
          </div>
          ";
        }
        ?>

      </div>
      <div class="form-group">
        <label>Observações</label>
        <div class='form-check'>
            <input class='form-check-input' type='radio'  name='status' value='manuntencao' id="manuntencao">
            <label class='form-check-label' for="manuntencao">Em manuntencao</label>
        </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio'  name='status' value='alugado' id="alugado">
            <label class='form-check-label' for="alugado" >Alugado</label>
        </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio'  name='status' value='livre' id="livre">
            <label class='form-check-label' for="livre" >Livre</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>


</body>

</html>