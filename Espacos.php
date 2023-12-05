<?php

include "./db.php";

class Espaco{
    private static $conexao;
    function __construct()
    {
        global $dsn;
        $this->conexao = $dsn;
    }
    function getAll(){
        $sql = "SELECT id, nome FROM localizacao";
        $resultado = $this->conexao->query($sql);

        return $resultado->fetchAll();
    }
    function getById(int $id){
        $sql = "SELECT id, nome FROM localizacao WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    function create(string $nome){
        $sql = "INSERT INTO localizacao (nome) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);
        // Retorna verdadeiro se foi cadastrado com sucesso
        return $stmt->execute([$nome]);
    }

    function delete(int $id){
        $sql = "DELETE FROM localizacao WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([$id]);
    }

    function update(int $id, array $updatedData){
        $values = "";
        $subject = array_keys($updatedData);
        $lenArray = count($updatedData);
        // Separa o campo dos valores
        for($i = 0; $i<$lenArray;$i++){
            // Pega a chave do array
            $field = $subject[$i];
            // Pega o valor do array
            $value = $updatedData[$subject[$i]];
            // Verifica a posição dos valores, se for menor que o array irá adicionar uma virgula na frase
            if($i < ($lenArray-1)){
                $values .= "$field = $value,";
            }else{
                $values .= "$field = $value";
            }

        }
        echo $values;
        $sql = "UPDATE localizacao SET ? WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        // Retorna se foi alterado com sucesso ou não
        return $stmt->execute([$values, $id]);
    }
}