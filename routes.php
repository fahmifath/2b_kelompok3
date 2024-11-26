<?php
// routes.php

require_once 'app/controllers/TrainerController.php';

$trainerController = new TrainerController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/trainer/index' || $url == '/') {
    $trainerController->index();
} elseif ($url == '/trainer/create' && $requestMethod == 'GET') {
    $trainerController->create();
} elseif ($url == '/trainer/store' && $requestMethod == 'POST') {
    $trainerController->store();
} elseif (preg_match('/\/trainer\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $trainerController->edit($userId);
} elseif (preg_match('/\/trainer\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $trainerController->update($userId, $_POST);
} elseif (preg_match('/\/trainer\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $trainerController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}