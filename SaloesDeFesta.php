<?php

require_once ("./db.php");

class SaloesDeFesta
{
    private  $conexao;
    function __construct()
    {
        global $dsn;
        $this->conexao = $dsn;
    }
    function getAll()
    {
        $sql = "SELECT id, nome FROM salaoDeFestas";
        $resultado = $this->conexao->query($sql);

        return $resultado->fetchAll();
    }
    function getById(int $id)
    {
        $sql = "SELECT id, nome, esta_em_manutencao, esta_sendo_alugado FROM salaoDeFestas WHERE localizacao_id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchAll();
    }

    function create(string $nome, int $localizacao_id, bool $esta_em_manutencao = false, bool $esta_sendo_alugado = false)
    {
        $sql = "INSERT INTO salaoDeFestas (nome, localizacao_id, esta_em_manutencao, esta_sendo_alugado) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        // Retorna id
        $stmt->execute([$nome, $localizacao_id, $esta_em_manutencao, $esta_sendo_alugado]);
        return $this->conexao->lastInsertId();
    }

    function delete(int $id)
    {
        $sql = "DELETE FROM salaoDeFestas WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([$id]);
    }

    function update(int $id, array $updatedData)
    {
        $values = "";
        $subject = array_keys($updatedData);
        $lenArray = count($updatedData);
        // Separa o campo dos valores
        for ($i = 0; $i < $lenArray; $i++) {
            // Pega a chave do array
            $field = $subject[$i];
            // Pega o valor do array
            $value = $updatedData[$subject[$i]];
            // Verifica a posição dos valores, se for menor que o array irá adicionar uma virgula na frase
            if ($i < ($lenArray - 1)) {
                $values .= "$field = $value,";
            } else {
                $values .= "$field = $value";
            }
        }
        echo $values;
        $sql = "UPDATE salaoDeFestas SET ? WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        // Retorna se foi alterado com sucesso ou não
        $stmt->execute([$values, $id]);
        return $this->conexao->lastInsertId();
    }
}
