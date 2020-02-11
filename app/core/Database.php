<?php

class Database
{
    protected $dbhost = 'localhost';
    protected $dbname = 'test';
    protected $dbuser = 'root';
    protected $dbpass = '';

    public function openDbConnection()
    {
        $link = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
        return $link;
    }

    public function closeDbConnection(&$link)
    {
        $link = null;
    }
}