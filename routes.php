<?php
// routes
require_once 'app/controllers/WorkoutClassController.php';
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
  
$workoutClassController = new WorkoutClassController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/workout_class/index' || $url == '/') {
    $workoutClassController->index();
} elseif ($url == '/workout_class/create' && $requestMethod == 'GET') {
    $workoutClassController->create();
} elseif ($url == '/workout_class/store' && $requestMethod == 'POST') {
    $workoutClassController->store();
} elseif (preg_match('/\/workout_class\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_kelas = $matches[1];
    $workoutClassController->edit($id_kelas);
} elseif (preg_match('/\/workout_class\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $id_kelas = $matches[1];
    $workoutClassController->update($id_kelas, $_POST);
} elseif (preg_match('/\/workout_class\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_kelas = $matches[1];
    $workoutClassController->delete($id_kelas);
} else {
    http_response_code(404);
    echo "404 Not Found";
}



