<?php
// app/controllers/kelasController.php
require_once '../app/models/WorkoutClass.php';

class WorkoutClassController {
    private $kelasModel;

    public function __construct() {
        $this->kelasModel = new WorkoutClass();
    }

    public function index() {
        $kelas = $this->kelasModel->getAllWorkoutClass();
        require_once '../app/views/WorkoutClass/index.php';

    }

    public function create() {
        require_once '../app/views/WorkoutClass/create.php';
    }

    public function store() {
        $nama_kelas = $_POST['nama_kelas'];
        $waktu = $_POST['waktu'];
        $pelatih = $_POST['pelatih'];
        $kuota = $_POST['kuota'];
        $this->kelasModel->add($nama_kelas, $waktu, $pelatih, $kuota);
        header('Location: /WorkoutClass/index');
    }
    // Show the edit form with the kelas data
    public function edit($id_kelas) {
        $kelass = $this->kelasModel->find($id_kelas); // Assume find() gets kelas by ID
        require_once __DIR__ . '/../views/WorkoutClass/edit.php';
    }

    // Process the update request
    public function update($id_kelas, $data) {
        $updated = $this->kelasModel->update($id_kelas, $data);
        if ($updated) {
            header("Location: /WorkoutClass/index"); // Redirect to kelas list
        } else {
            echo "Failed to update kelas.";
        }
    }

    // Process delete request
    public function delete($id_kelas) {
        $deleted = $this->kelasModel->delete($id_kelas);
        if ($deleted) {
            header("Location: /WorkoutClass/index"); // Redirect to kelas list
        } else {
            echo "Failed to delete kelas.";
        }
    }
}
