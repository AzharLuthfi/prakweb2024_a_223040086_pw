<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa'; // Tambahkan spasi antara 'private' dan '$table'
    private $db; // Tambahkan tanda titik koma untuk mengakhiri deklarasi variabel

    public function __construct()
    {
        $this->db = new Database; // Inisialisasi database di constructor
    }

    public function getAllMahasiswa()
    {
        // Gunakan tanda spasi setelah 'FROM' dan akses variabel $table dengan benar
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet(); // Panggil resultSet untuk mengambil hasil query
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        // Kolom id tidak perlu dimasukkan jika auto-increment
        $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nrp", $data["nrp"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("jurusan", $data["jurusan"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

}
