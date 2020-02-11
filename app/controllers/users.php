<?php

class Users extends Controller
{
    public function index()
    {
        $user = $this->model('User');
        //print_r($user->getAllUsers());
        $this->view('users/index', ['users_list' => $user->getAllUsers()]);
    }
}