<?php
// app/controllers/kelasController.php
require_once '../app/models/WorkoutClass.php';

class WorkoutClassController
{
    private $workoutClassModel;

    public function __construct()
    {
        $this->workoutClassModel = new WorkoutClass();
    }

    public function index()
    {
        $kelas = $this->workoutClassModel->getAllWorkoutClass();
        require_once '../app/views/workout_class/index.php';
    }

    public function create()
    {
        $trainers = $this->workoutClassModel->getAllTrainer();
        require_once '../app/views/workout_class/create.php';
    }

    public function store()
    {
        $nama_kelas = $_POST['nama_kelas'];
        $waktu = $_POST['waktu'];
        $pelatih = $_POST['pelatih'];
        $kuota = $_POST['kuota'];
        $this->workoutClassModel->add($nama_kelas, $waktu, $pelatih, $kuota);
        header('Location: /workout_class/index');
    }
    // Show the edit form with the kelas data
    public function edit($id_kelas)
    {
        $kelass = $this->workoutClassModel->find($id_kelas); // Assume find() gets kelas by ID
        $trainers = $this->workoutClassModel->getAllTrainer();
        require_once __DIR__ . '/../views/workout_class/edit.php';
    }

    // Process the update request
    public function update($id_kelas, $data)
    {
        $updated = $this->workoutClassModel->update($id_kelas, $data);
        if ($updated) {
            header("Location: /workout_class/index"); // Redirect to kelas list
        } else {
            echo "Failed to update kelas.";
        }
    }

    // Process delete request
    public function delete($id_kelas)
    {
        $deleted = $this->workoutClassModel->delete($id_kelas);
        if ($deleted) {
            header("Location: /workout_class/index"); // Redirect to kelas list
        } else {
            echo "Failed to delete kelas.";
        }
    }
}
