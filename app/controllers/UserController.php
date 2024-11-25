<?php
// app/controllers/UserController.php
require_once '../app/models/Equipment.php';

class UserController {
    private $equipment;

    public function __construct() {
        $this->equipment = new Equipment();
    }

    public function index() {
        $users = $this->equipment->getAllUsers();
        require_once '../app/views/equipment/index.php';

    }

    public function create() {
        require_once '../app/views/equipment/create.php';
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
        require_once __DIR__ . '/../views/user/edit.php';
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
