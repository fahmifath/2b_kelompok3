<?php
// app/controllers/TrainerController.php
require_once '../app/models/Trainer.php';

class TrainerController {
    private $trainer;

    public function __construct() {
        $this->trainer = new Trainer();
    }

    public function index() {
        $trainers = $this->trainer->getAll();
        require_once '../app/views/trainer/index.php';

    }

    public function create() {
        require_once '../app/views/trainer/create.php';
    }

    public function store() {
        $nama = $_POST['nama_trainer'];
        $spesialisasi = $_POST['spesialisasi'];
        $jadwal = $_POST['jadwal'];
        $this->trainer->add($nama, $spesialisasi, $jadwal);
        header('Location: /trainer/index');
        // var_dump($nama, $spesialisasi, $jadwal);/\
    }

    public function edit($id) {
        $trainers = $this->trainer->find($id);
        require_once '../app/views/trainer/edit.php';
    }

    public function update($id, $data) {
        $data = [
            'nama' => $_POST['nama_trainer'],
            'spesialisasi' => $_POST['spesialisasi'],
            'jadwal' => $_POST['jadwal']
        ];
        $this->trainer->update($id, $data);
        header('Location: /trainer/index');
        // var_dump($data);
    }

    public function delete($id) {
        $this->trainer->delete($id);
        header('Location: /trainer/index');
    }
}