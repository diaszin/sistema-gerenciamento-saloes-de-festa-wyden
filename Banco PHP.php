<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nomeSalao = $_POST["nomeSalao"];
  $numeroSalao = $_POST["numeroSalao"];
  $localizacaoSalao = $_POST["localizacaoSalao"];
  
  // Verificar decorações selecionadas
  if(isset($_POST["decoracoes"])){
    $decoracoesSelecionadas = $_POST["decoracoes"];
  }

  // Aqui é para poder processar os dados do formulário (salvar no banco de dados, enviar por e-mail, etc.)
  echo "Nome do Salão: " . $nomeSalao . "<br>";
  echo "Número do Salão: " . $numeroSalao . "<br>";
  echo "Localização do Salão: " . $localizacaoSalao . "<br>";
  if(isset($decoracoesSelecionadas)){
    echo "Decorações Selecionadas: ";
    foreach($decoracoesSelecionadas as $decoracao){
      echo $decoracao . ", ";
    }
  }
}
?>
