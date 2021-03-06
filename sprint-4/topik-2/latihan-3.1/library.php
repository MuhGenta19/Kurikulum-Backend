<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "crud";
        $username = "genta";
        $password = "12345678";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function login($user, $pass)
    {
        $query = $this->db->prepare("SELECT * FROM user WHERE username = ? LIMIT 1");
        $query->execute([$user]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            if (password_verify($pass, $result[0]['pass'])) {
                session_start();
                $_SESSION['username'] = $result[0]['username'];
                $_SESSION['status'] = "Logged In";
                header('Location:home.php');
            }
        }
    }

    public function register($user, $pass, $pass2)
    {
        if ($pass == $pass2) {
            $hashed = password_hash($pass, PASSWORD_DEFAULT);
            $query = $this->db->prepare("INSERT INTO user (username, pass) VALUES (?, ?)");
            $save = $query->execute([$user, $hashed]);

            if ($save) {
                session_start();
                $_SESSION['reg_user'] = $user;
                $_SESSION['reg_pass'] = $pass;
                header('Location:home.php');
            }
        } else {
            echo "<script>alert('Password Must Be Same')</script>";
        }
    }

    public function logout()
    {
        session_destroy();
    }

    public function addData($nama_barang, $harga, $stok_barang)
    {
        $data = $this->db->prepare('INSERT INTO barang (nama_barang,harga,stok_barang) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_barang);
        $data->bindParam(2, $harga);
        $data->bindParam(3, $stok_barang);
 
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM barang");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function getData($id){
        $query = $this->db->prepare("SELECT * FROM barang where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id,$nama_barang,$harga,$stok_barang){
        $query = $this->db->prepare('UPDATE barang set nama_barang=?,harga=?,stok_barang=? where id=?');
        
        $query->bindParam(1, $nama_barang);
        $query->bindParam(2, $harga);
        $query->bindParam(3, $stok_barang);
        $query->bindParam(4, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM barang where id=?");
 
        $query->bindParam(1, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>