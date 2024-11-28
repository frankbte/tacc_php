<?php
$title = "Inicio";
ob_start(); // Inicia el almacenamiento en búfer
?>

<main>
        <div class="login-container">
            <div class="login-card">
                <h2>Iniciar sesión</h2>
                <hr>
                <form action="login.php" method="POST">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="submit" value="Entrar">
                    <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
                    <p><a href="index.php">Volver al inicio</a></p>
                </form>
            </div>
        </div>
    </main>



<?php
$content = ob_get_clean(); // Captura el contenido del búfer
include 'templates/base.php'; // Incluye la plantilla base
?>
