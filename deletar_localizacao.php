<?php
    include "./Espacos.php";

    if(isset($_GET["localizacao"])){
        $id = $_GET["localizacao"];
        $espacos = new Espaco();
        $espacos->delete($id);    
    }
    
    header("location: ./tela_opcao.php")
?>