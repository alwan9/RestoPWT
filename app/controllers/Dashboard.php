<?php

class Dashboard extends Controller
{

    public function index()
    {
        // Periksa apakah sesi belum dimulai, jika belum baru panggil session_start()
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . '/login');
            exit();
        }
    
        $data['judul'] = 'Dashboard';
        $data['rest'] = $this->model('Dashboard_model')->getAllDashboard();
    
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
    



    public function detail($id)
    {
        $data['judul'] = 'Detail Restoran';
        $data['rest'] = $this->model('Dashboard_model')->getDashboardById($id);
        $this->view('templates/header', $data);
        $this->view('dashboard/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // Process main image upload
        if (isset($_FILES['img_url']) && $_FILES['img_url']['error'] == UPLOAD_ERR_OK) {
            $imgUrl = $this->uploadImage($_FILES['img_url']);
            $_POST['img_url'] = $imgUrl;
        } else {
            $_POST['img_url'] = null;
        }

        // Process img_preview1 upload
        if (isset($_FILES['img_preview1']) && $_FILES['img_preview1']['error'] == UPLOAD_ERR_OK) {
            $imgPreview1 = $this->uploadImage($_FILES['img_preview1']);
            $_POST['img_preview1'] = $imgPreview1;
        } else {
            $_POST['img_preview1'] = null;
        }

        // Process img_preview2 upload
        if (isset($_FILES['img_preview2']) && $_FILES['img_preview2']['error'] == UPLOAD_ERR_OK) {
            $imgPreview2 = $this->uploadImage($_FILES['img_preview2']);
            $_POST['img_preview2'] = $imgPreview2;
        } else {
            $_POST['img_preview2'] = null;
        }

        // Process img_preview3 upload
        if (isset($_FILES['img_preview3']) && $_FILES['img_preview3']['error'] == UPLOAD_ERR_OK) {
            $imgPreview3 = $this->uploadImage($_FILES['img_preview3']);
            $_POST['img_preview3'] = $imgPreview3;
        } else {
            $_POST['img_preview3'] = null;
        }

        if ($this->model('Dashboard_model')->tambahDataRestoran($_POST) > 0) {
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        } else {
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        }
    }

    private function uploadImage($file)
    {
        // Path direktori tempat file akan disimpan
        $targetDir = "uploads/images/";

        // Memastikan direktori target ada
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        // Menghasilkan path lengkap dari file yang diunggah
        $targetFile = $targetDir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Memastikan file adalah gambar
        $check = getimagesize($file["tmp_name"]);
        if ($check === false) {
            return null; // Bukan gambar
        }

        // Cek ukuran file (opsional)
        if ($file["size"] > 500000) {
            return null; // File terlalu besar
        }

        // Izinkan format file tertentu
        if (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
            return null; // Format file tidak didukung
        }

        // Generate nama unik untuk file
        $uniqueFileName = uniqid() . '_' . basename($file["name"]);
        $targetFile = $targetDir . $uniqueFileName;

        // Pindahkan file yang diunggah ke direktori target
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile; // Kembalikan path ke file yang diunggah
        } else {
            return null; // Gagal memindahkan file
        }
    }

    public function hapus($id)
    {
        if ($this->model('Dashboard_model')->hapusDataDashboard($id) > 0) {
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        } else {
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        }
    }

    // Tampilkan form edit dengan data yang sudah ada
    public function edit($id)
    {
        $data['judul'] = 'Edit Restoran';
        $data['restoran'] = $this->model('Dashboard_model')->getRestoranById($id);

        $this->view('templates/header', $data);
        $this->view('dashboard/edit', $data);
        $this->view('templates/footer');
    }

    // Proses update data restoran
    public function ubah()
    {
        if ($this->model('Dashboard_model')->updateRestoran($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }



    public function cari()
    {
        $data['judul'] = 'Daftar Restoran';
        $data['rest'] = $this->model('Dashboard_model')->cariDataDashboard();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}