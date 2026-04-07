<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);

        // Cek jika form disubmit
        if ($this->request->getMethod() === 'post') {
            // Validasi input
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[4]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/login', [
                    'title' => 'Login',
                    'validation' => $this->validator
                ]);
            }

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $model = new UserModel();
            $user = $model->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Simpan session
                session()->set([
                    'isLoggedIn' => true,
                    'user_id'    => $user['id'],
                    'user_name'  => $user['name'],
                    'user_email' => $user['email']
                ]);
                return redirect()->to('/admin/artikel');
            } else {
                // Jika gagal login
                session()->setFlashdata('flash_msg', 'Email atau password salah.');
                return redirect()->to('/login');
            }
        }

        // Tampilkan form login
        return view('auth/login', ['title' => 'Login']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}