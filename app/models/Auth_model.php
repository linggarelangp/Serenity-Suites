<?php

class Auth_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE email = :email AND password = :password");
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":password", $data["password"]);
        return $this->db->single();
    }

    public function register($data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("INSERT INTO " . $this->table . "(roleid, email , password, createdAt, updatedAt) VALUES(3, :email, :password, '$dateNow', '$dateNow')");
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":password", $data["password"]);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
