<?php
include "./Decoracoes.php";
include "./SaloesDeFesta.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $nomeSalao = '"' . $_POST["nomeSalao"] . '"';
  $localizacaoSalao = $_POST["localizacao"];
  $statusSalao = $_POST["status"];

  // Verificar decorações selecionadas
  if (isset($_POST["decoracoes"])) {
    $decoracoesSelecionadas = $_POST["decoracoes"];
  }

  if (isset($localizacaoSalao)) {
    $salaoDeFesta = new SaloesDeFesta();
    $decoracao = new Decoracoes();
    $manutencao = 1;
    $alugado = 1;
    if ($statusSalao == "manuntencao") {
      $manutencao = 0;
    } else if ($statusSalao == "alugado") {
      $alugado = 0;
    }
    $valoresAtualizados = array("nome" => $nomeSalao,  "esta_em_manutencao" => '"' . $manutencao . '"', "esta_sendo_alugado" => '"' . $alugado . '"');
    $salaoDeFestaId = $salaoDeFesta->update($id, $valoresAtualizados);
    $decoracao->create($salaoDeFestaId, $decoracoesSelecionadas);
    header("location: ./crud_saloes_disponiveis.php");
  }
}
