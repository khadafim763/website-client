<?php

namespace App\Controllers;

use App\Models\UsersModels;
use App\Controllers\Pages;

class Login extends BaseController
{
    public function Index()
    {
        $data = [
            'title' => 'Login',
        ];
        $db = \Config\Database::connect();
        $userModel = new UsersModels();
        $user = $db->query('select * from Users');
        dd($user);

        return view('Pages/Login', $data);
    }

    public function check_login()
    {
        $models = new UsersModels();
        $username = $this->request->getPost('Username');
        $password = $this->request->getPost('Password');
        $row = $models->get_Users($username, $password);

        if ($row == null) {
            return redirect('/Login');
        }
    }
}
