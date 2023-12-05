<?php
include "./SaloesDeFesta.php";
include "./Decoracoes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nomeSalao = $_POST["nomeSalao"];
  $numeroSalao = $_POST["numeroSalao"];
  $localizacaoSalao = $_POST["localizacaoId"];
  $statusSalao = $_POST["status"];
  
  // Verificar decorações selecionadas
  if(isset($_POST["decoracoes"])){
    $decoracoesSelecionadas = $_POST["decoracoes"];
  }

  if(isset($localizacaoSalao)){
    $salaoDeFesta = new SaloesDeFesta();
    $decoracao = new Decoracoes();
    $manutencao = false;
    $alugado = false;
    if ($statusSalao == "manuntencao"){
      $manutencao = true;
    }
    else if($statusSalao == "alugado"){
      $alugado = true;
    }

    $salaoDeFestaId = $salaoDeFesta->create($nomeSalao, $localizacaoSalao, $manutencao, $alugado);
    $decoracao->create($salaoDeFestaId, $decoracoesSelecionadas);
    header("location: ./crud_saloes_disponiveis.html");
  }
}
?>
