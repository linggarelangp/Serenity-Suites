<?php

class Rooms_Facilities_model
{
    private $table = 'roomfacilities';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addRoomFacilities($data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("INSERT INTO " . $this->table . "(name, createdAt, updatedAt) VALUES(:name, '$dateNow', '$dateNow')");
        $this->db->bind(':name', $data['name_facility_room']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAllRoomFacilities(): array
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function updatedRoomFacilities($id, $data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("UPDATE " . $this->table . " SET name = :name, updatedAt = '$dateNow' WHERE id = :id");
        $this->db->bind(':name', $data['name_facility_room']);
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteRoomFacilities($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
