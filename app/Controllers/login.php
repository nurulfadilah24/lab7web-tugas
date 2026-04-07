<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = [];
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $model = new UserModel();
            $user = $model->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                // simpan session
                session()->set([
                    'isLoggedIn' => true,
                    'user_id' => $user['id'],
                    'user_name' => $user['name']
                ]);
                return redirect()->to('/admin/artikel');
            } else {
                $data['error'] = 'Email atau password salah!';
            }
        }

        return view('login', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}