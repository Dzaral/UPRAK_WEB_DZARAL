<?php
class db
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'uprak_dzaral';
    private $koneksi;

    // Method untuk melakukan koneksi ke database
    public function koneksi()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
    }

    
    public function ambil_data($query) {
        $result = $this->koneksi->query($query);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function modifikasi($query) {
        if ($this->koneksi->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}