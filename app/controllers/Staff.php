<?php
session_start();

class Staff extends Controller
{
    private string $roles_model = 'roles_model';
    private string $rooms_model = 'rooms_model';
    private string $users_model = 'users_model';
    private string $details_room_model = 'details_room_model';
    private string $room_facilities_model = 'rooms_facilities_model';

    public function index(): void
    {

        if (($_SESSION['roleid'] === 1 || $_SESSION['roleid'] === 2) && $_SESSION['status'] === true) {
            $data = array(
                'title' => 'Dashboard',
                'roles' => $this->model($this->roles_model)->getAllRoles()
            );

            $this->view_staff('staff/index', $data);
        } else {
            header("Location: " . BASE_URL . "/home");
            exit;
        }
    }

    public function customers(): void
    {
        $data = array(
            'title' => 'Customers',
            'customers' => $this->model($this->users_model)->getCustomers()
        );

        $this->view_staff('staff/customers', $data);
    }
    public function worker(): void
    {
        $data = array(
            'title' => 'Worker',
            'workers' => $this->model($this->users_model)->getWorkers()
        );

        $this->view_staff('staff/worker', $data);
    }

    public function room(): void
    {
        $data = array(
            'title' => 'Rooms',
            'rooms' => $this->model($this->rooms_model)->getAllRooms()
        );

        $this->view_staff('staff/room', $data);
    }

    public function details_room(): void
    {
        $data = array(
            'title' => 'details_room',
            'details_room' => $this->model($this->details_room_model)->getAllDetailsRoom(),
            'rooms' => $this->model($this->rooms_model)->getAllRooms(),
            'room_facilities' => $this->model($this->room_facilities_model)->getAllRoomFacilities()
        );

        $this->view_staff('staff/details_room', $data);
    }

    public function room_facilities(): void
    {
        $data = array(
            'title' => 'Room Facilities',
            //'room_facilities' => $this->model($this->users_model)->getRoomFacilities()
        );

        $this->view_staff('staff/room_facilities', $data);
    }

    public function reservasi(): void
    {
        $data = array(
            'title' => 'Reservation',
        );

        $this->view_staff('staff/reservasi', $data);
    }
}
