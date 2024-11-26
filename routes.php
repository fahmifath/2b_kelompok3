<?php
// routes
require_once 'app/controllers/MemberController.php';
require_once 'app/controllers/WorkoutClassController.php';

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



