<?php
session_start();

class Admin extends Controller
{
    private string $roles_model = 'roles_model';
    private string $users_model = 'users_model';

    public function index(): void
    {

        if ($_SESSION['roleid'] === 1 && $_SESSION['status'] === true) {
            $data = array(
                'title' => 'Dashboard',
                'roles' => $this->model($this->roles_model)->getAllRoles()
            );

            $this->view_admin('admin/index', $data);
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

        $this->view_admin('admin/customers', $data);
    }
    public function worker(): void
    {
        $data = array(
            'title' => 'Worker',
            'workers' => $this->model($this->users_model)->getWorkers()
        );

        $this->view_admin('admin/worker', $data);
    }

    public function room(): void
    {
        $data = array(
            'title' => 'Rooms',
            // 'room' => $this->model($this->users_model)->getRoom()
        );

        $this->view_admin('admin/room', $data);
    }

    public function details_room(): void
    {
        $data = array(
            'title' => 'details_room',
            //'details_room' => $this->model($this->users_model)->getDetailsRoom()
        );

        $this->view_admin('admin/details_room', $data);
    }

    public function room_facilities(): void
    {
        $data = array(
            'title' => 'Room Facilities',
            //'room_facilities' => $this->model($this->users_model)->getRoomFacilities()
        );

        $this->view_admin('admin/room_facilities', $data);
    }

    public function facilities_hotel(): void
    {
        $data = array(
            'title' => 'Facilities Hotel',
            //'room_facilities' => $this->model($this->users_model)->getRoomFacilities()
        );

        $this->view_admin('admin/facilities_hotel', $data);
    }

    public function reservasi(): void
    {
        $data = array(
            'title' => 'Reservation',
        );

        $this->view_admin('admin/reservasi', $data);
    }
}
