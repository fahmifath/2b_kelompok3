<?php
// app/models/kelas.php
require_once '../config/database.php';

class WorkoutClass {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllWorkoutClass() {
        $query = $this->db->query("SELECT * FROM workout_classes");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM workout_classes WHERE id_workout_class = :id_kelas");
        $query->bindParam(':id_kelas', $id_kelas, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_kelas, $waktu, $pelatih, $kuota) {
        $query = $this->db->prepare("INSERT INTO workout_classes (nama_kelas, waktu, pelatih, kuota) VALUES (:nama_kelas, :waktu, :pelatih, :kuota)");
        $query->bindParam(':nama_kelas', $nama_kelas);
        $query->bindParam(':waktu', $waktu);
        $query->bindParam(':pelatih', $pelatih);
        $query->bindParam(':kuota', $kuota);
        return $query->execute();
    }
 
    // Update kelas data by ID
    public function update($id_kelas, $data) {
        $query = "UPDATE workout_classes SET nama_kelas = :nama_kelas, waktu = :waktu, pelatih = :pelatih, kuota = :kuota WHERE id_workout_class = :id_kelas";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_kelas', $data['nama_kelas']);
        $stmt->bindParam(':waktu', $data['waktu']);
        $stmt->bindParam(':pelatih', $data['pelatih']);
        $stmt->bindParam(':kuota', $data['kuota']);
        $stmt->bindParam(':id_kelas', $id_kelas);
        return $stmt->execute();
    }

    // Delete kelas by ID
    public function delete($id_kelas) {
        $query = "DELETE FROM workout_classes WHERE id_workout_class = :id_kelas";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_kelas', $id_kelas);
        return $stmt->execute();
    }
}
