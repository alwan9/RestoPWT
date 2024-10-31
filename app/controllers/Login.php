<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login Sebagai Admin';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->model('Login_model')->getUser($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: ' . BASEURL . '/dashboard');
                exit();
            } else {
                $data['error'] = 'Username atau password salah.';
                $this->view('templates/header', $data);
                $this->view('login/index', $data);
                $this->view('templates/footer');
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
        exit();
    }
}
