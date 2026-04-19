<?php
include_once(__DIR__ . '/../config/db.php');
include_once(__DIR__ . '/../controllers/LayoutController.php');

$controller = new LayoutController($conn);

$request = $_SERVER['REQUEST_METHOD'];

if ($request === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $controller->saveLayout($data['data']);
}

if ($request === 'GET') {
    $controller->getLayout();
}
?>