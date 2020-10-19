<?php

class About extends Controller {
    public function index($name = 'Muhammad Genta',$job = 'student', $age = '19') 
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['title'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() 
    {
        $data['title'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}