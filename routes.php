<?php
// routes.php

require_once 'app/controllers/MemberController.php';

//inisialisasi object member cotroller
$memberController = new MemberController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/member/index' || $url == '/') {
    $memberController->index();
} elseif ($url == '/member/create' && $requestMethod == 'GET') {
    $memberController->create();
} elseif ($url == '/member/store' && $requestMethod == 'POST') {
    $memberController->store();
} elseif (preg_match('/\/member\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $memberController->edit($userId);
} elseif (preg_match('/\/member\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $memberController->update($userId, $_POST);
} elseif (preg_match('/\/member\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $memberController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}