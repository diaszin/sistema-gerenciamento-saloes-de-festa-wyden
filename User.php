<?php
include "./db.php";

class User{
    private $conexao;
    function __construct()
    {
        global $dsn;
        $this->conexao = $dsn;
    }
    function login(string $email, string $senha){

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "SELECT email, senha FROM account WHERE email = ? AND senha = ?";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([$email, $senha]);
    }
    
    function signup (string $email, string $senha){
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO account (email, senha) VALUES (?, ?)";
        $stmt = $this->conexao->prepare($sql);
        
        return $stmt->execute([$email, $senha]);
    }
}