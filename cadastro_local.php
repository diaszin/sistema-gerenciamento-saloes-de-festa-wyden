<?php
include "./Espacos.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nomeLocal = $_POST["nomeLocal"];
  
  
  // Verificar decorações selecionadas

    $espaco = new Espaco();

    $espaco->create($nomeLocal);
    
    header("location: ./tela_opcao.php");
  
}
?>
