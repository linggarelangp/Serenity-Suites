<?php

class Users_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getWorkers()
    {
        $this->db->query('SELECT roles.id, roles.name AS roleName, users.email, users.fullname, users.createdAt, users.updatedAt FROM users, roles WHERE users.roleid = roles.id AND users.roleid BETWEEN 1 AND 2');
        return $this->db->resultSet();
    }

    public function getCustomers()
    {
        $this->db->query('SELECT roles.id, roles.name AS roleName, users.email, users.fullname, users.createdAt, users.updatedAt FROM users, roles WHERE users.roleid = roles.id AND users.roleid = 3');
        return $this->db->resultSet();
    }
}
