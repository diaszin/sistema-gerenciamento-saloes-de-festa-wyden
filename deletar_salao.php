<?php
    include "./SaloesDeFesta.php";

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $saloesDeFesta = new SaloesDeFesta();
        $saloesDeFesta->delete($id);    
    }
    
    header("location: ./crud_saloes_disponiveis.php")
?>