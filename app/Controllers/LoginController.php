<?php

namespace App\Controllers;

use App\Models\Admin;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new Admin();
        $admin = $adminModel->where('username', $username)->first();
        if ($admin) {
            if ($password === $admin['password']) {
                $session->set([
                    'id_admin' => $admin['id_admin'],
                    'username' => $admin['username'],
                    'logged_in' => TRUE
                ]);

                return redirect()->to('/admin/hal_admin');
            } else {
                // Password salah
                $session->setFlashdata('msg', 'Password yang Anda masukkan salah');
                return redirect()->to('/admin/login');
            }
        } else {
            // Username tidak ditemukan
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
