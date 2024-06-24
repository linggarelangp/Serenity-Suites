<?php

class room_Facilities extends Controller
{
    private string $room_facilities_model = 'rooms_facilities_model';

    public function addRoomFacilities()
    {
        if (!empty($_POST['name_facility_room'])) {
            if ($this->model($this->room_facilities_model)->addRoomFacilities($_POST) > 0) {
                header("location: " . BASE_URL . "/admin/room_facilities/added");
            } else {
                header("location: " . BASE_URL . "/admin/room_facilities/error");
            }
        } else {
            header("location: " . BASE_URL . "/admin/room_facilities/failed");
        }
    }

    public function updateRoomFacilities()
    {
        $roomFacilityId = $_POST["id_room_facilities"];

        if (!empty($_POST['name_facility_room'])) {
            if ($this->model($this->room_facilities_model)->updatedRoomFacilities($roomFacilityId, $_POST) > 0) {
                header("location: " . BASE_URL . "/admin/room_facilities/updated");
            } else {
                header("location: " . BASE_URL . "/admin/room_facilities/error");
            }
        } else {
            header("location: " . BASE_URL . "/admin/room_facilities/failed");
        }
    }

    public function deleteRoomFacilities()
    {
        if ($this->model($this->room_facilities_model)->deleteRoomFacilities($_POST["id_room_facilities"]) > 0) {
            header("location: " . BASE_URL . "/admin/room_facilities/deleted");
        } else {
            header("location: " . BASE_URL . "/admin/room_facilities/error");
        }
    }
}
