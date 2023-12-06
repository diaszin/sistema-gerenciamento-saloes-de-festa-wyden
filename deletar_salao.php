<?php
    include "./SaloesDeFesta.php";

    if(isset($_GET["localizacao"]) && isset($_GET["id"])){
        $id = $_GET["id"];
        $localizacaoID = $_GET["localizacao"];
        $saloesDeFesta = new SaloesDeFesta();
        $saloesDeFesta->delete($id);

        header("location: ./crud_saloes_disponiveis.php?localizacao=$localizacaoID");
    }
    
?>