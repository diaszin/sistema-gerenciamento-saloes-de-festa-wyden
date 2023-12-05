<?php
include "./User.php";
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtém os valores do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $user = new User();

    // Verifique as credenciais (exemplo: substitua isso com sua lógica real)
    $credenciais_validas = $user->login($email, $senha);

    // Se as credenciais são válidas, redirecione ou exiba uma mensagem de sucesso
    if ($credenciais_validas) {
        header("location: tela_opcao.php");
        exit();
    } else {
        $mensagem_erro = "Credenciais inválidas. Tente novamente.";
        header("location: ./index.php");
    }
}
?>