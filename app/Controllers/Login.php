<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        session();
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Halaman Login',
            'validation' => $validation
        ];
        return view('login_view', $data);
    }

    public function masuk()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Harus Diisi'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => 'Passwordcxc Harus Diisi',
                    'min_length' => 'Passwordcxcxc Minimal 2 Huruf'
                ]
            ]
        ])) {
            session()->setFlashdata('state', 'true');
            $validation = \Config\Services::validation();
            return redirect()->to('/')->withInput()->with('validation', $validation);
        }
        echo 'Halaman Utama';
    }

    public function reset()
    {
        session();
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Reset Password',
            'validation' => $validation
        ];
        return view('reset_password', $data);
    }

    public function loginsipadu()
    {
        session();
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Login SIPADU',
            'validation' => $validation
        ];
        return view('loginsipadu_view', $data);
    }
}
