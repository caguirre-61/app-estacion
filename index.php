<?php
require_once "env.php";
require_once "controllers/EstacionController.php";

// Motor de plantillas simple
function renderView($view, $data = []) {
    extract($data);
    $viewFile = "views/" . $view . ".php";
    if (file_exists($viewFile)) {
        require_once $viewFile;
    } else {
        echo "Vista no encontrada: " . htmlspecialchars($view);
    }
}

// Enrutamiento básico según el parámetro 'action'
$action = $_GET['action'] ?? 'landing';
$controller = new EstacionController();

switch ($action) {
    case 'landing':
        $controller->landing();
        break;
    case 'panel':
        $controller->panel();
        break;
    case 'detalle':
        $controller->detalle();
        break;
    default:
        $controller->landing();
        break;
}
?>