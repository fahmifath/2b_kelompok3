<?php
// app/models/User.php
require_once '../config/database.php';

class Equipment {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM equipments");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_equipment) {
        $query = $this->db->prepare("SELECT * FROM equipments WHERE id_equipment = :id_equipment");
        $query->bindParam(':id_equipment', $id_equipment, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_alat, $jenis_alat, $kondisi) {
        $query = $this->db->prepare("INSERT INTO equipments (nama_alat, jenis_alat, kondisi) VALUES (:nama_alat, :jenis_alat, :kondisi)");
        $query->bindParam(':nama_alat', $nama_alat);
        $query->bindParam(':jenis_alat', $jenis_alat);
        $query->bindParam(':kondisi', $kondisi);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id_equipment, $data) {
        $query = "UPDATE equipments SET nama_alat = :nama_alat, jenis_alat = :jenis_alat, kondisi = :kondisi WHERE id_equipment = :id_equipment";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_alat', $data['nama_alat']);
        $stmt->bindParam(':jenis_alat', $data['jenis_alat']);
        $stmt->bindParam(':kondisi', $data['kondisi']);
        $stmt->bindParam(':id_equipment', $id_equipment);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_equipment) {
        $query = "DELETE FROM equipments WHERE id_equipment = :id_equipment";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_equipment', $id_equipment);
        return $stmt->execute();
    }
}
