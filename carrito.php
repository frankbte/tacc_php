<?php
$title = "Inicio";
ob_start(); // Inicia el almacenamiento en búfer
?>



<?php
$content = ob_get_clean(); // Captura el contenido del búfer
include 'templates/base.php'; // Incluye la plantilla base
?>
