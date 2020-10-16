<?php

class Santri_model
{
    private $table ='santri';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSantri()
    {
        $this->db->query('SELECT * FROM phpmvc.' . $this->table);
        return $this->db->resultSet();
    }

    public function getSantriById($id)
    {
        $this->db->query('SELECT * FROM phpmvc.' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function tambahDataSantri($data)
    {
        $query = "INSERT INTO phpmvc." . $this->table . "
                    (nama, nrp, email, jurusan) 
                    VALUES
                   (:nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSantri($id)
    {
        $query = "DELETE FROM phpmvc." . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSantri($data)
    {
        $query = "UPDATE phpmvc." . $this->table . " SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                 WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSantri()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM phpmvc." . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}