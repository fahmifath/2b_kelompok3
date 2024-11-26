<?php
// app/controllers/UserController.php
require_once '../app/models/Equipment.php';

class EquipmentController {
    private $equipment;

    public function __construct() {
        $this->equipment = new Equipment();
    }

    public function index() {
        $equipments = $this->equipment->getAll();
        require_once '../app/views/equipment/index.php';

    }

    public function create() {
        require_once '../app/views/equipment/create.php';
    }

    public function store() {
    $nama_alat = $_POST['nama_alat'];
    $jenis_alat = $_POST['jenis_alat'];
    $kondisi = $_POST['kondisi'];
    $this->equipment->add($nama_alat, $jenis_alat, $kondisi);
    header("Location: /equipment/index");
    }
    
    // Show the edit form with the user data
    public function edit($id_equipment) {
        $equipments = $this->equipment->find($id_equipment); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/equipment/edit.php';
    }

    // Process the update request
    public function update($id_equipment, $data) {
        $nama_alat = $_POST['nama_alat'];
        $jenis_alat = $_POST['jenis_alat'];
        $kondisi = $_POST['kondisi'];
        //$id_equipment = $_POST['id_equipment'];
        

        $updated = $this->equipment->update($id_equipment, $data);
        if ($updated) {
            header("Location: /equipment/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
        //var_dump($_POST);
        //die();
    }

    // Process delete request
    public function delete($id_equipment) {
        $deleted = $this->equipment->delete($id_equipment);
        if ($deleted) {
            header("Location: /equipment/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}