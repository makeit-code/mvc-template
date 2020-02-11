<?php

class User extends Database
{
    public function getAllUsers()
    {
        $link = $this->openDbConnection();
        $result = $link->query('SELECT * FROM users ORDER BY id');
        $users_list = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $users_list[] = $row;
        }
        $this->closeDbConnection($link);
        return $users_list;
    }

    public function checkIfExist($username)
    {
        $link = $this->openDbConnection();
        $sql = "SELECT COUNT(*) FROM users WHERE username = '$username'";
        $result = $link->prepare($sql);
        $result->execute();
        $number_of_results = $result->fetchColumn();
        $this->closeDbConnection($link);
        return $number_of_results;
    }

    public function insert()
    {
        $link = $this->openDbConnection();

        $password_hash = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $query = 'INSERT INTO users (username, password, active) VALUES (?,?,?)';
        $statement = $link->prepare($query);
        $statement->execute([$_REQUEST['username'], $password_hash, 1]);
        $this->closeDbConnection($link);
    }
}