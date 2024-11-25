<?php
// app/controllers/UserController.php
require_once '../app/models/Member.php';

class MemberController {
    private $memberModel;

    public function __construct() {
        $this->memberModel = new Member();
    }

    public function index() {
        $members = $this->memberModel->getAllData();
        require_once '../app/views/member/index.php';

    }

    public function create() {
        require_once '../app/views/member/create.php';
    }

    public function store() {
        $nama_member = $_POST['nama_member'];
        $usia = $_POST['usia'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $paket_langganan = $_POST['paket_langganan'];
        $this->memberModel->add($nama_member, $usia, $jenis_kelamin, $paket_langganan);
        header('Location: /user/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->memberModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/member/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->memberModel->update($id, $data);
        if ($updated) {
            header("Location: /member/index"); // Redirect to user list
        } else {
            echo "Failed to update member.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->memberModel->delete($id);
        if ($deleted) {
            header("Location: /member/index"); // Redirect to user list
        } else {
            echo "Failed to delete member.";
        }
    }
}
