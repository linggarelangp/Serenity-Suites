<?php

class Rooms_Model
{
    private $table = 'rooms';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addRooms($data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("INSERT INTO " . $this->table . "(name, path_image, price, createdAt, updatedAt) VALUES(:name, :path, :price, '$dateNow', '$dateNow')");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':path', $data['image']);
        $this->db->bind(':price', $data['price']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAllRooms(): array
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRoomsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function updateRooms($id, $data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("UPDATE " . $this->table . " SET name = :name, path_image = :path, price = :price, updatedAt = '$dateNow' WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':path', $data['image']);
        $this->db->bind(':price', $data['price']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteRooms($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
