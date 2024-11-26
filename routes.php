<?php
// routes.php

require_once 'app/controllers/WorkoutClassController.php';

$workoutClassController = new WorkoutClassController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/WorkoutClass/index' || $url == '/') {
    $workoutClassController->index();
} elseif ($url == '/WorkoutClass/create' && $requestMethod == 'GET') {
    $workoutClassController->create();
} elseif ($url == '/WorkoutClass/store' && $requestMethod == 'POST') {
    $workoutClassController->store();
} elseif (preg_match('/\/WorkoutClass\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $workoutClassController->edit($userId);
} elseif (preg_match('/\/WorkoutClass\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $workoutClassController->update($userId, $_POST);
} elseif (preg_match('/\/WorkoutClass\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $workoutClassController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
