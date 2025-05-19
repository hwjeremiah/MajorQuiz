<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Dummy check
        if ($username === 'admin' && $password === 'tawagnun') {
            session()->set('isLoggedIn', true);
            session()->set('username', $username);
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
