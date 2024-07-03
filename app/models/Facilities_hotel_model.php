<?php

class Facilities_hotel_model
{
    private $table = 'hotelfacilities';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllFacilitiesHotel(): array
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getFacilitiesHotelByName($name)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE name LIKE :name');
        $this->db->bind(':name', '%' . $name . '%');

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }

        return $this->getAllFacilitiesHotel();
    }

    public function getRoleByDate(DateTime $date)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE date LIKE :date');
        $this->db->bind(':date', '%' . $date . '%');

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }

        return $this->getAllFacilitiesHotel();
    }

    public function addHotelFacilites($data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query('INSERT INTO ' . $this->table . "(name, path_image,  createdAt, updatedAt) VALUES(:name, :path_image, '$dateNow', '$dateNow')");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':path_image', $data['path_image']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateHotelFacilites($id, $data)
    {
        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("UPDATE " . $this->table . " SET name = :name, path_image = :path, updatedAt = '$dateNow' WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':path', $data['image']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteHotelFacilites($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
