<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
   public function login()
{
    helper('form'); // loads form helper for views

    if ($this->request->getMethod() === 'post') {
        $identity = $this->request->getPost('username'); // username or email
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUserByEmailOrUsername($identity);

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            session()->set([
                'user_id'   => $user['id'],
                'username'  => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            // On failure, redirect back with error message
            return redirect()->back()->withInput()->with('error', 'Invalid username or password');
        }
    }

    // For GET requests, just load the login view
    return view('index');
}

    public function register()
    {
        return view('register');
    }
     public function dashboard()
    {
        return view('dashboard');
    }
     public function dispatch()
    {
        return view('dispatch');
    }
     public function coders()
    {
        return view('coders');
    }
    public function codes()
    {
        return view('codes');
    }
     public function additem()
    {
        return view('additem');
    }

}
