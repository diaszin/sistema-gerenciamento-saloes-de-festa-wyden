<?php
include "./db.php";

class User{
    private static $conexao;
    function __construct()
    {
        global $dsn;
        $this->conexao = $dsn;
    }
    function login(string $email, string $senha){
        $sql = "SELECT email, senha FROM user WHERE email = ? AND senha = ?";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([$email, $senha]);
    
    }
}