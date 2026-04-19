<?php
class Layout {
    private $conn;
    private $table = "layouts";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function save($data) {
        $data = $this->conn->real_escape_string($data);
        $sql = "INSERT INTO " . $this->table . " (data) VALUES ('$data')";
        return $this->conn->query($sql);
    }

    public function getLatest() {
        $sql = "SELECT data FROM " . $this->table . " ORDER BY id DESC LIMIT 1";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
}
?>