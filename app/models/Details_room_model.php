<?php

class Details_room_model
{
    private $table = 'roomdetails';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function AddDetailsRoom($data)
    {
        if ($this->getDetailsRoomByFields($data['room'], $data['facility']) !== null)  return 0;

        $dateNow = date_create('now')->format('Y-m-d');
        $this->db->query("INSERT INTO " . $this->table . "(roomId, facilitiesRoomId, createdAt, updatedAt) VALUES(:room, :facility, '$dateNow', '$dateNow')");
        $this->db->bind(':room', $data['room']);
        $this->db->bind(':facility', $data['facility']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDetailsRoomByFields($roomId, $facilityId)
    {
        $this->db->query("SELECT rooms.id, rooms.name, roomfacilities.id AS room_facilities_id, roomfacilities.name AS room_facilities_name, roomdetails.createdAt, roomdetails.updatedAt FROM roomdetails, rooms, roomfacilities WHERE rooms.id = roomdetails.roomId AND roomdetails.facilitiesRoomId = roomfacilities.id AND roomdetails.roomId = :roomId AND roomdetails.facilitiesRoomId = :facilityId");
        $this->db->bind(":roomId", $roomId);
        $this->db->bind(":facilityId", $facilityId);
        $result = $this->db->single();
        return $result ? $result : null;
    }

    public function getAllDetailsRoom()
    {
        $this->db->query("SELECT roomdetails.id AS detail_id, rooms.id, rooms.name, roomfacilities.id AS room_facilities_id, roomfacilities.name AS room_facilities_name, roomdetails.createdAt, roomdetails.updatedAt FROM roomdetails, rooms, roomfacilities WHERE rooms.id = roomdetails.roomId AND roomdetails.facilitiesRoomId = roomfacilities.id");
        return $this->db->resultSet();
    }

    public function deleteDetailsRoom($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
