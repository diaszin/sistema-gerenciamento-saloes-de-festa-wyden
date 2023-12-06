<?php
include "./SaloesDeFesta.php";
include "./Espacos.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nomeSalao = $_POST["nomeSalao"];
  
  
  // Verificar decorações selecionadas

    $espaco = new Espaco();

    $espaco->create($nomeSalao);
    
    header("location: ./tela_opcao.php");
  
}
?>
