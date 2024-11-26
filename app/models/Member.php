<?php
// app/models/Member.php
require_once '../config/database.php';

//class member model
class Member {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllData() {
        $query = $this->db->query("SELECT * FROM members");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM members WHERE id_member = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama, $usia, $jenis_kelamin, $paket_langganan) {
        $query = $this->db->prepare("INSERT INTO members (nama_member, usia, jenis_kelamin, paket_langganan) VALUES (:nama_member, :usia, :jenis_kelamin, :paket_langganan)");
        $query->bindParam(':nama_member', $nama);
        $query->bindParam(':usia', $usia);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin);
        $query->bindParam(':paket_langganan', $paket_langganan);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE members SET nama_member = :nama_member, usia = :usia, jenis_kelamin = :jenis_kelamin, paket_langganan = :paket_langganan WHERE id_member = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_member', $data['nama_member']);
        $stmt->bindParam(':usia', $data['usia']);
        $stmt->bindParam(':jenis_kelamin', $data['jenis_kelamin']);
        $stmt->bindParam(':paket_langganan', $data['paket_langganan']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM members WHERE id_member = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
