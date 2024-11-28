<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? "Mi Proyecto en PHP"; ?></title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <header>
        <a href="index.php">
            <img class="logo" src="assets/logo.png" alt="logo">
        </a>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
        
        <!-- Verificar si el usuario está logueado -->
        <?php if (isset($_SESSION['usuario'])): ?>
            <!-- Si el usuario está logueado, mostrar "Cerrar sesión" -->
            <a class="cta" href="cerrar_sesion.php"><button>Cerrar sesión, <?php echo $_SESSION['usuario']; ?></button></a>
        <?php else: ?>
            <!-- Si el usuario no está logueado, mostrar "Ingresar" -->
            <a class="cta" href="login.php"><button>Ingresar</button></a>
        <?php endif; ?>
    </header>
    
    <main>
        <?php echo $content ?? "Contenido principal aquí."; ?>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="about.php">Sobre nosotros</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>Teléfono: (662) 214 0760</p>
                <p>Email: abarrotessanfrancisco67@gmail.com</p>
                <p>Dirección: 10ma Privada de Perimetral #14
                    Colonia Modelo, Hermosillo, Sonora, México
                </p>
            </div>
            <div class="footer-section">
                <h4>Redes Sociales</h4>
                <div class="social-links">
                    <a href="index.php"><i class="fab fa-facebook-f"></i></a>
                    <a href="index.php"><i class="fab fa-instagram"></i></a>
                    <a href="index.php"><i class="fab fa-twitter"></i></a>
                    <a href="index.php"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Abarrotes San Francisco. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
