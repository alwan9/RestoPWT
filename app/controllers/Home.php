<?php 

class Home extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = "Alwan";

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}