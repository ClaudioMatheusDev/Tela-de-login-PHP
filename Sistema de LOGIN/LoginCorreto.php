<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $usuario_correto = "Claudio";
    $senha_correta = "matheus123"; 

    $usuario_digitado = $_POST["usuario"];
    $senha_digitada = $_POST["senha"];

//VERIFICANDO SE ESTÁ CORRETO O LOGIN
    if ($usuario_digitado == $usuario_correto && $senha_digitada == $senha_correta) {
 
        session_start();
        $_SESSION["usuario"] = $usuario_correto;
        header("Location: PaginaLogado.php");
        exit();
    } else {
        // CASO A SENHA ESTIVER ERRADA, VOLTE PARA A TELA DE LOGIN
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>
