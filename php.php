<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se enviaron los datos por el POST
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Recoge los datos del formulario
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Aca podes agregar la lógica de autenticación, verificar si tu usuario esta bien 
        // Por ejemplo, aca vamos a verificar un usuario "admin" con contraseña "password123"
        if ($username === "admin" && $password === "password123") {
            // Si la autenticación es exitosa, mandar a la página de bienvenida
            header("Location: welcome.php");
            exit();
        } else {
            // Si la autenticación falla, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
            header("Location: index.php?error=1");
            exit();
        }
    }
}
?>
