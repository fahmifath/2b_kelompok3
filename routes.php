<?php
// routes
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/WorkoutClassController.php';
require_once 'app/controllers/EquipmentController.php';
require_once 'app/controllers/TrainerController.php';
require_once 'app/controllers/MemberController.php';

//inisialisasi object member cotroller
$homeController = new HomeController();
$memberController = new MemberController();
$equipmentController = new EquipmentController();
$workoutClassController = new WorkoutClassController();
$trainerController = new TrainerController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($url == '/' || empty($url)) {
    $homeController->index(); // Arahkan ke HomeController method index
} elseif ($url == '/home/index' || $url == '/') {
    $homeController->index();
}
  elseif ($url == '/member/index' || $url == '/') {
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
  

} elseif ($url == '/equipment/index' || $url == '/') {
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


}  elseif ($url == '/workout_class/index' || $url == '/') {
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



}  elseif ($url == '/trainer/index' || $url == '/') {
    $trainerController->index();
} elseif ($url == '/trainer/create' && $requestMethod == 'GET') {
    $trainerController->create();
} elseif ($url == '/trainer/store' && $requestMethod == 'POST') {
    $trainerController->store();
} elseif (preg_match('/\/trainer\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_kelas = $matches[1];
    $trainerController->edit($id_kelas);
} elseif (preg_match('/\/trainer\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $id_kelas = $matches[1];
    $trainerController->update($id_kelas, $_POST);
} elseif (preg_match('/\/trainer\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_kelas = $matches[1];
    $trainerController->delete($id_kelas);
} else {
    http_response_code(404);
    echo "404 Not Found";
}