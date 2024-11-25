<?php
// app/controllers/kelasController.php
require_once '../app/models/kelas.php';

class KelasController {
    private $kelasModel;

    public function __construct() {
        $this->kelasModel = new Kelas();
    }

    public function index() {
        $kelas = $this->kelasModel->getAllKelas();
        require_once '../app/views/kelas/index.php';

    }

    public function create() {
        require_once '../app/views/kelas/create.php';
    }

    public function store() {
        $nama_kelas = $_POST['nama_kelas'];
        $waktu = $_POST['waktu'];
        $pelatih = $_POST['pelatih'];
        $kuota = $_POST['kuota'];
        $this->kelasModel->add($nama_kelas, $waktu, $pelatih, $kuota);
        header('Location: /kelas/index');
    }
    // Show the edit form with the kelas data
    public function edit($id_kelas) {
        $kelas = $this->kelasModel->find($id_kelas); // Assume find() gets kelas by ID
        require_once __DIR__ . '/../views/kelas/edit.php';
    }

    // Process the update request
    public function update($id_kelas, $data) {
        $updated = $this->kelasModel->update($id_kelas, $data);
        if ($updated) {
            header("Location: /kelas/index"); // Redirect to kelas list
        } else {
            echo "Failed to update kelas.";
        }
    }

    // Process delete request
    public function delete($id_kelas) {
        $deleted = $this->kelasModel->delete($id_kelas);
        if ($deleted) {
            header("Location: /kelas/index"); // Redirect to kelas list
        } else {
            echo "Failed to delete kelas.";
        }
    }
}
