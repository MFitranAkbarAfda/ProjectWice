<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = "Wice Official 2022";
        $data['nama'] = $this->model('Home_model')->getData();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}