<?php
// routes.php

require_once 'app/controllers/MemberController.php';

$controller = new MemberController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/member/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/member/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/member/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/member\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/member\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/member\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}