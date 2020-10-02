<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "crud";
        $username = "genta";
        $password = "12345678";
        $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    public function addData($nama_santri, $divisi, $asal)
    {
        $data = $this->conn->prepare('INSERT INTO santri (nama_santri, divisi, asal) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_santri);
        $data->bindParam(2, $divisi);
        $data->bindParam(3, $asal);
 
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->conn->prepare("SELECT * FROM santri");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function getData($id){
        $query = $this->conn->prepare("SELECT * FROM santri where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id,$nama_santri,$divisi,$asal){
        $query = $this->conn->prepare('UPDATE santri set nama_santri=?,divisi=?,asal=? where id=?');
        
        $query->bindParam(1, $nama_santri);
        $query->bindParam(2, $divisi);
        $query->bindParam(3, $asal);
        $query->bindParam(4, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id)
    {
        $query = $this->conn->prepare("DELETE FROM santri where id=?");
 
        $query->bindParam(1, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>