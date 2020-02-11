<?php

class User extends Database
{
    public function getAllUsers()
    {
        $link = $this->openDbConnection();
        $result = $link->query('SELECT * FROM users ORDER BY id');
        $users_list = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $users_list[] = $row;
        }
        $this->closeDbConnection($link);

        return $users_list;
    }
}