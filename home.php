<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h1>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
