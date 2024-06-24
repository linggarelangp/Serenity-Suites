<?php

class Rooms extends Controller
{
    private string $rooms_model = "rooms_model";
    private string $details_room_model = 'details_room_model';

    public function index(): void
    {
        $data = array(
            'title' => 'Rooms',
            'rooms' => $this->model($this->rooms_model)->getAllRooms(),
            'details_room' => $this->model($this->details_room_model)->getAllDetailsRoom()
        );

        $this->view('rooms/index', $data);
    }

    public function reservations()
    {
        $data = array(
            'title' => 'Reservation',
        );

        $this->view('rooms/reservations', $data);
    }


    public function imageValidation($data)
    {
        $filename = $data["room_image"]["name"];
        $image_size = $data["room_image"]["size"];
        $image_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        $extension = array("jpg", "png", "jpeg");

        if (!in_array($image_extension, $extension)) return 'ext';
        if ($image_size > 2048000) return 'size';
        return 'success';
    }

    public function addRooms(): void
    {
        $image = $_FILES;

        $image_validation = $this->imageValidation($image);

        if ($image_validation === 'ext' || $image_validation === 'size') {
            header("location: " . BASE_URL . "/admin/rooms/$image_validation");
            return;
        }

        $rand = rand();
        $name = $_POST["name"];
        $price = $_POST["room_price"];

        $image_name = $rand . "-" . "room-" . $image["room_image"]["name"];
        $image_path = "assets/rooms/" . $image_name;
        $current_file_image_location = $image["room_image"]["tmp_name"];

        if (!move_uploaded_file($current_file_image_location, $image_path)  || empty($name)) {
            header("location: " . BASE_URL . "/admin/rooms/error");
            return;
        }

        $data = array(
            "name" => $name,
            "image" => $image_path,
            "price" => $price
        );

        if ($this->model($this->rooms_model)->addRooms($data) > 0) {
            header("location: " . BASE_URL . "/admin/rooms/added");
        }
    }

    public function updateRooms(): void
    {
        $id = $_POST["room_id"];
        $name = $_POST["update_room_name"];
        $price = $_POST["update_room_price"];
        $image = $_FILES;
        $current_image_file = $_POST["current_image_room"];

        if (!empty($image["room_image"]["name"])) {

            $image_validation = $this->imageValidation($image);

            if ($image_validation === 'ext' || $image_validation === 'size') {
                header("location: " . BASE_URL . "/admin/rooms/$image_validation");
                return;
            }

            $rand = rand();

            $image_name = $rand . "-" . "room-" . $image["room_image"]["name"];
            $image_path = "assets/rooms/" . $image_name;
            $current_file_image_location = $image["room_image"]["tmp_name"];


            if (!move_uploaded_file($current_file_image_location, $image_path)  || empty($name)) {
                header("location: " . BASE_URL . "/admin/rooms/error");
                return;
            }

            unlink($current_image_file);

            $data = array(
                "name" => $name,
                "image" => $image_path,
                "price" => $price
            );

            if ($this->model($this->rooms_model)->updateRooms($id, $data) > 0) {
                header("location: " . BASE_URL . "/admin/rooms/updated");
            }
        } else {
            $data = array(
                "name" => $name,
                "image" => $current_image_file,
                "price" => $price
            );

            if ($this->model($this->rooms_model)->updateRooms($id, $data) > 0) {
                header("location: " . BASE_URL . "/admin/rooms/updated");
            }
        }
    }

    public function deleteRooms(): void
    {
        $id = $_POST["room_id"];
        $image_path = $_POST["delete_room_image"];

        if ($this->model($this->rooms_model)->deleteRooms($id) > 0) {
            unlink($image_path);
            header("location: " . BASE_URL . "/admin/rooms/deleted");
        }
    }
}
