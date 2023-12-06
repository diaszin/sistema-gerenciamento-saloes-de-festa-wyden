<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
<a class="btn btn-primary" href="criar_local.php" role="button">Cadastrar localização</a>
  <?php
    // Verifica se o usuário foi logado
    if($_COOKIE["isLogged"] == false){
      header("location: index.php");
      die();
    }
  ?>
  <div class="row">
    <?php
    include "./Espacos.php";
    $espaco = new Espaco();
    foreach ($espaco->getAll() as $localizacao) {
      $nome_localizacao = $localizacao["nome"];
      echo "<div class='col-sm-6 mb-3'>
          <div class='card'>
            <div class='card-body'>
              <h5 class='card-title'>$nome_localizacao</h5>
              <a href='#' class='btn btn-primary'>Visitar</a>
            </div>
          </div>
        </div>";
    }
    ?>
  </div>
</body>

</html>