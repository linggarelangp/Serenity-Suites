<?php

class facilities_hotel extends Controller
{
    private string $facilities_hotel_model = "facilities_hotel_model";
    private string $details_facilities_hotel_model = 'facilities_hotel_model';

    public function index(): void
    {
        $data = array(
            'title' => 'FacilitiesHotel',
            'facilities_hotel' => $this->model($this->facilities_hotel_model)->getAllFacilitiesHotel(),
        );

        header("location: " . BASE_URL . "/admin/facilities_hotel/added");
    }

    public function reservations()
    {
        $data = array(
            'title' => 'Reservation',
        );

        $this->view('facilities_hotel/reservations', $data);
    }


    public function imageValidation($data)
    {
        $filename = $data["facilities_hotel_image"]["name"];
        $image_size = $data["facilities_hotel_image"]["size"];
        $image_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        $extension = array("jpg", "png", "jpeg");

        if (!in_array($image_extension, $extension)) return 'ext';
        if ($image_size > 2048000) return 'size';
        return 'success';
    }

    public function addFacilitiesHotel(): void
    {
        $image = $_FILES;

        $image_validation = $this->imageValidation($image);

        if ($image_validation === 'ext' || $image_validation === 'size') {
            header("location: " . BASE_URL . "/admin/facilities_hotel/$image_validation");
            return;
        }

        $rand = rand();
        $name = $_POST["name"];

        $image_name = $rand . "-" . "facilities_hotel-" . $image["facilities_hotel_image"]["name"];
        $image_path = "assets/facilities_hotel/" . $image_name;
        $current_file_image_location = $image["facilities_hotel_image"]["tmp_name"];

        if (!move_uploaded_file($current_file_image_location, $image_path)  || empty($name)) {
            header("location: " . BASE_URL . "/admin/facilities_hotel/error");
            return;
        }

        $data = array(
            "name" => $name,
            "path_image" => $image_path,
        );

        if ($this->model($this->facilities_hotel_model)->addHotelFacilites($data) > 0) {
            header("location: " . BASE_URL . "/admin/facilities_hotel/added");
        }
    }

    public function updateHotelFacilites(): void
    {
        $id = $_POST["facilities_hotel_id"];
        $name = $_POST["update_facilities_hotel_name"];
        $image = $_FILES;
        $current_image_file = $_POST["current_image_facilities_hotel"];

        if (!empty($image["facilities_hotel_image"]["name"])) {

            $image_validation = $this->imageValidation($image);

            if ($image_validation === 'ext' || $image_validation === 'size') {
                header("location: " . BASE_URL . "/admin/facilities_hotel/$image_validation");
                return;
            }

            $rand = rand();

            $image_name = $rand . "-" . "facilities_hotel-" . $image["facilities_hotel_image"]["name"];
            $image_path = "assets/facilities_hotel/" . $image_name;
            $current_file_image_location = $image["facilities_hotel_image"]["tmp_name"];


            if (!move_uploaded_file($current_file_image_location, $image_path)  || empty($name)) {
                header("location: " . BASE_URL . "/admin/facilities_hotel/error");
                return;
            }

            unlink($current_image_file);

            $data = array(
                "name" => $name,
                "image" => $image_path,
            );

            if ($this->model($this->facilities_hotel_model)->updateHotelFacilites($id, $data) > 0) {
                header("location: " . BASE_URL . "/admin/facilities_hotel/updated");
            }
        } else {
            $data = array(
                "name" => $name,
                "image" => $current_image_file,
            );

            if ($this->model($this->facilities_hotel_model)->updateHotelFacilites($id, $data) > 0) {
                header("location: " . BASE_URL . "/admin/facilities_hotel/updated");
            }
        }
    }

    public function deleteHotelFacilites(): void
    {
        $id = $_POST["facilities_hotel_id"];
        $image_path = $_POST["delete_facilities_hotel_image"];

        if ($this->model($this->facilities_hotel_model)->deleteHotelFacilites($id) > 0) {
            unlink($image_path);
            header("location: " . BASE_URL . "/admin/facilities_hotel/deleted");
        }
    }
}
