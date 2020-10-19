<?php

class Article_model
{
    private $table ='article';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArticle()
    {
        $this->db->query('SELECT * FROM blogmvc.' . $this->table);
        return $this->db->resultSet();
    }

    public function getArticleById($id)
    {
        $this->db->query('SELECT * FROM blogmvc.' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function addArticle($data)
    {
        $query = "INSERT INTO blogmvc." . $this->table . "
                    (pic, title, content, author) 
                    VALUES
                   (:pic, :title, :content, :author)";

        $this->db->query($query);
        if (!$_FILES["pic"]["error"] == 4) {
            $this->db->bind('pic', $_FILES['pic']['name']);
            move_uploaded_file($_FILES['pic']['tmp_name'], '../public/img/' . $_FILES['pic']['name']);
        } else {
            $this->db->bind('pic', NULL);
        }
        $this->db->bind('title', $data['title']);
        $this->db->bind('content', $data['content']);
        $this->db->bind('author', $data['author']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteArticle($id)
    {
        $query = "DELETE FROM blogmvc." . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateArticle($data)
    {
        $query = "UPDATE blogmvc." . $this->table . " SET
                    pic = :pic,
                    title = :title,
                    content = :content,
                    author = :author
                 WHERE id = :id";

        $this->db->query($query);
        if (!$_FILES["pic"]["error"] == 4) {
            $this->db->bind('pic', $_FILES['pic']['name']);
            move_uploaded_file($_FILES['pic']['tmp_name'], '../public/img/' . $_FILES['pic']['name']);
        } else {
            $this->db->bind('pic', $data['gambarlama']);
        }
        $this->db->bind('title', $data['title']);
        $this->db->bind('content', $data['content']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchArticle()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM blogmvc." . $this->table . " WHERE title LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}