<?php

class Users extends Controller
{
    public function index()
    {
        $user = $this->model('User');
        $this->view('users/index', ['users_list' => $user->getAllUsers()]);
    }

    public function newUser()
    {
        $this->view('users/newUser');
    }

    public function add_user()
    {
        if ($_POST)
        {
            $user = $this->model('User');
            if ($user->checkIfExist($_POST['username']) == 0)
            {
                $user->insert();
                $_SESSION['info'] = 'User added successfully!';
                header("Location: newUser");
            }
            else
            {
                $_SESSION['info'] = 'The user already exists in the database!';
                header("Location: newUser");
            }
        }
    }
}