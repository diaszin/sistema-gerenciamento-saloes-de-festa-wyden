<?php
include "./db.php";

class Decoracoes
{
    private $conexao;
    function __construct(){
        global $dsn;
        $this->conexao = $dsn;
    }

    function getAll(){
        $sql = "SELECT id, nome FROM decoracoes";
        return $this->conexao->query($sql);
    }
}
