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
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $username; ?>!</h2>
    <a href="pagina1.php">Ir para Página 1</a>
    <br>
    <a href="pagina2.php">Ir para Página 2</a>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html>