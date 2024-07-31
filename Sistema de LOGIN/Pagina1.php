<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit;
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $username; ?>!</h2>
    <p>Esta é a página 1.</p>
    <a href="pagina1.php">Ir para a página 2</a>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html>
