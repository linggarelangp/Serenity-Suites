<?php

class Details_room extends Controller
{
    private string $details_room_model = 'details_room_model';

    public function addDetailsRoom()
    {
        $room = $_POST['room_id'];
        $facility = $_POST['facility_id'];

        if (!empty($room) && !empty($facility)) {
            $data = array(
                'room' => $room,
                'facility' => $facility
            );

            if ($this->model($this->details_room_model)->addDetailsRoom($data) > 0) {
                header("location: " . BASE_URL . "/admin/details_room/added");
            } else {
                header("location: " . BASE_URL . "/admin/details_room/error");
            }
        } else {
            header("location: " . BASE_URL . "/admin/details_room/failed");
        }
    }

    public function deleteDetailsRoom()
    {
        $details_room_id = $_POST['details_room_id'];
        if ($this->model($this->details_room_model)->deleteDetailsRoom($details_room_id) > 0) {
            header("location: " . BASE_URL . "/admin/details_room/deleted");
        }
    }
}
