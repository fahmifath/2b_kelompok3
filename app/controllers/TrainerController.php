<?php
// app/controllers/TrainerController.php
require_once '../app/models/Trainer.php';

class UserController {
    private $trainer;

    public function __construct() {
        $this->trainer = new Trainers();
    }

    public function index() {
        $users = $this->trainer->getAllUsers();
        require_once '../app/views/trainer/index.php';

    }

    public function create() {
        require_once '../app/views/trainer/create.php';
    }

    public function store() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->add($name, $email);
        header('Location: /user/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->userModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/trainer/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->userModel->update($id, $data);
        if ($updated) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->userModel->delete($id);
        if ($deleted) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
