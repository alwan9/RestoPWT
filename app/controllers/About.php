<?php 

class About extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = "Alwan";

        $this->view('templates/header', $data);
        $this->view('About/index', $data);
        $this->view('templates/footer');
    }
}