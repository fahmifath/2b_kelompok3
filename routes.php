<?php
// routes.php

require_once 'app/controllers/EquipmentController.php';

$controller = new EquipmentController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/equipment/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/equipment/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/equipment/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/equipment\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/equipment\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/equipment\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}