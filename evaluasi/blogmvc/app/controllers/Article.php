<?php

class Article extends Controller
{
    public function index()
    { 
        $data['title'] = 'Article List';
        $data['article'] = $this->model('Article_model')->getAllArticle();
        $this->view('templates/header', $data);
        $this->view('article/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    { 
        $data['title'] = 'Article Details';
        $data['article'] = $this->model('Article_model')->getArticleById($id);
        $this->view('templates/header', $data);
        $this->view('article/detail', $data);
        $this->view('templates/footer');
    }

    public function add() 
    {
        if ($this->model('Article_model')->addArticle($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/article');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/article');
            exit;
        }
    }

    public function delete($id) 
    {
        if ($this->model('Article_model')->deleteArticle($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/article');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/article');
            exit;
        }
    }

    public function getUpdate()
    {
        echo json_encode($this->model('Article_model')->getArticleById($_POST['id']));
    }

    public function Update()
    {
        if ($this->model('Article_model')->updateArticle($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/article');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/article');
            exit;
        }
    }

    public function search()
    {
        $data['title'] = 'Article List';
        $data['article'] = $this->model('Article_model')->searchArticle();
        $this->view('templates/header', $data);
        $this->view('article/index', $data);
        $this->view('templates/footer');
    }
    
}