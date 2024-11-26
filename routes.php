<?php
// routes.php

require_once 'app/controllers/EquipmentController.php';

$equipmentController = new EquipmentController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/equipment/index' || $url == '/') {
    $equipmentController->index();
} elseif ($url == '/equipment/create' && $requestMethod == 'GET') {
    $equipmentController->create();
} elseif ($url == '/equipment/store' && $requestMethod == 'POST') {
    $equipmentController->store();
} elseif (preg_match('/\/equipment\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $equipmentController->edit($userId);
} elseif (preg_match('/\/equipment\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $equipmentController->update($userId, $_POST);
} elseif (preg_match('/\/equipment\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $equipmentController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}