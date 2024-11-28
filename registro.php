<?php
$title = "Inicio";
ob_start(); // Inicia el almacenamiento en búfer
?>

<main>
        <div class="login-container">
            <div class="login-card">
                <h2>Crear cuenta</h2>
                <hr>
                <form action="registro.php" method="POST">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="password" name="confirmar_password" placeholder="Confirmar Contraseña" required>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" required>
                    <input type="text" name="direccion" placeholder="Dirección" required>
                    <input type="tel" name="telefono" placeholder="Teléfono" required>
                    <input type="email" name="correo" placeholder="Correo electrónico" required>
                    <input type="submit" value="Registrarse">
                    <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
                    <p><a href="index.php">Volver al inicio</a></p>
                </form>
            </div>
        </div>
    </main>


<?php
$content = ob_get_clean(); // Captura el contenido del búfer
include 'templates/base.php'; // Incluye la plantilla base
?>
