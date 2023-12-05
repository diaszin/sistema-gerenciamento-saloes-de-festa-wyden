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

    function create(int $id_salao, array $decoracao){
        $sqlInsert = "INSERT INTO ocupacao(id_salao, id_decoracao) VALUES (?,?)";
        $sqlDelete = "DELETE FROM ocupacao WHERE id_salao = $id_salao";

        $this->conexao->query($sqlDelete);
        foreach($decoracao as $num_decoracao){
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->execute([$id_salao, $num_decoracao]);
        }
        
    }
}
