<?php

namespace db;

class DB
{
    private $db_host = "localhost";
    private $db_name = "mvc-project";
    private $db_username = "root";
    private $db_password = "";
    public function openConnection(){
        return new \PDO("mysql:host=" . $this->db_host . ";" . "dbname=" . $this->db_name, $this->db_username, $this->db_password);
    }
}