<?php

class Hotel_facilities_model
{
    private $table = 'hotelfacilities';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHotelFacilities(): array
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getHotelFacilitiesByName($name)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE name LIKE :name');
        $this->db->bind(':name', '%' . $name . '%');

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }

        return $this->getAllHotelFacilities();
    }

    public function getRoleByDate(DateTime $date)
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE date LIKE :date');
        $this->db->bind(':date', '%' . $date . '%');

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }

        return $this->getAllHotelFacilities();
    }

    public function addHotelFacilites($data)
    {
        $this->db->query('INSERT INTO ' . $this->table . '(name) VALUES(:name)');
        $this->db->bind(':name', $data['name']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateHotelFacilites($data)
    {
        $this->db->query('INSERT INTO ' . $this->table . '(name) VALUES(:name)');
        $this->db->bind(':name', $data['name']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteHotelFacilites($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . 'WHERE id = :id');
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
