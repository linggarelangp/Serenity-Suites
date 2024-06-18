<?php

class Roles_model
{
    private $table = 'roles';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRoles(): array
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRoleByName(string $name)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE name LIKE :name');
        $this->db->bind(':name', '%' . $name . '%');

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }

        return $this->getAllRoles();
    }

    public function getRoleByDate(DateTime $date)
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE date LIKE :date');
        $this->db->bind(':date', '%' . $date . '%');

        if (count($$this->db->single()) >= 0) {
            return $this->db->single();
        }

        return $this->getAllRoles();
    }
}
