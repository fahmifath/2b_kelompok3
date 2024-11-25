<?php
// routes.php

require_once 'app/controllers/KelasController.php';

$controller = new KelasController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/kelas/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/kelas/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/kelas/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/kelas\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/kelas\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/kelas\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
