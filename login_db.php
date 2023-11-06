<?php
session_start();

// Verifica si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Verifica si los datos son válidos (puedes cambiar estos valores)
    if ($usuario === "admin" && $contrasena === "password") {
        $_SESSION["usuario"] = $usuario;
        header("Location: home.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos. <a href='login.php'>Volver a intentar</a>";
    }
}
?>
