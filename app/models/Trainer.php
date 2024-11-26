<?php
// app/models/User.php
require_once '../config/database.php';

class Trainer {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM trainers");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }    

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM trainers WHERE id_trainer = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama, $spesialisasi, $jadwal) {
        $query = $this->db->prepare("INSERT INTO trainers (nama_trainer, spesialisasi, jadwal) VALUES (:nama, :spesialisasi, :jadwal)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':spesialisasi', $spesialisasi);
        $query->bindParam(':jadwal', $jadwal);
        return $query->execute();
    }
    

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE trainers SET nama_trainer = :nama, spesialisasi = :spesialisasi, jadwal = :jadwal WHERE id_trainer = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':spesialisasi', $data['spesialisasi']);
        $stmt->bindParam(':jadwal', $data['jadwal']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM trainers WHERE id_trainer = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
