<?php

require_once 'inc/autoload.php'; // Là où vous avez votre logique d'autoloading
use Controller\GameController;

$controllerName = $_GET["controller"] ?? "home";
$methodName     = $_GET["method"] ?? "home";
$id             = $_GET["id"] ?? null;

// Instancier le contrôleur
$controllerClassName = "Controller\\" . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClassName)) {
    $controller = new $controllerClassName();

    // Appeler la méthode appropriée
    if (method_exists($controller, $methodName)) {
        $controller->$methodName($id);
    } else {
        // Gérer l'erreur de méthode non trouvée
        echo "Méthode non trouvée : $methodName";
    }
} else {
    // Gérer l'erreur de contrôleur non trouvé
    echo "Contrôleur non trouvé : $controllerName";
}
/* 
URL: index.php?controller=user&method=update&id=32
*/
$controller = $_GET["controller"] ?? "home";
$method    = $_GET["method"] ?? "home";
$id         = $_GET["id"] ?? null;

echo $controller."<br>";
echo $method."<br>";
echo $id."<br>";