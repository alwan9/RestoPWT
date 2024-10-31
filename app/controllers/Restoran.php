<?php

class Restoran extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Restoran';
        $data['rest'] = $this->model('Restoran_model')->getAllRestoran();
        $this->view('templates/header', $data);
        $this->view('restoran/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Restoran';
        $data['rest'] = $this->model('Restoran_model')->getRestoranById($id);
        $this->view('templates/header', $data);
        $this->view('restoran/detail', $data);
        $this->view('templates/footer');
    }

    // public function tambah()
    // {
    //     if ($this->model('Restoran_model')->tambahDataRestoran($_POST) > 0) {
    //         header('Location: ' . BASEURL . '/Restoran');
    //         exit;
    //     } else {
    //         header('Location: ' . BASEURL . '/Restoran');
    //         exit;
    //     }
    // }

    // public function hapus($id)
    // {
    //     if ($this->model('Restoran_model')->hapusDataRestoran($id) > 0) {
    //         header('Location: ' . BASEURL . '/Restoran');
    //         exit;
    //     } else {
    //         header('Location: ' . BASEURL . '/Restoran');
    //         exit;
    //     }
    // }

    // public function getubah()
    // {

    //     echo json_encode($this->model('Restoran_model')->getRestoranById($_POST['id']));
    // }

    // public function ubah()
    // {
    //     if ($this->model('Restoran_model')->ubahDataRestoran($_POST) > 0) {
    //         header('Location: ' . BASEURL . '/Restoran');
    //         exit;
    //     } else {
    //         header('Location: ' . BASEURL . '/Restoran');
    //         exit;
    //     }
    // }



    public function cari()
    {
        $data['judul'] = 'Daftar Restoran';
        $data['rest'] = $this->model('Restoran_model')->cariDataDashboard();
        $this->view('templates/header', $data);
        $this->view('restoran/index', $data);
        $this->view('templates/footer');
    }
}
