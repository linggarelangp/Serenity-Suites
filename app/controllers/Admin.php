<?php

class Admin extends Controller
{
    private string $hotel_facilities_repo = 'hotel_facilities_repo';

    public function index(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/index', $data);
    }

    public function customers(): void
    {
        $data = array(
            'title' => 'Customers',
        );

        $this->view_admin('admin/customers', $data);
    }
    public function worker(): void
    {
        $data = array(
            'title' => 'Worker',
        );

        $this->view_admin('admin/worker', $data);
    }

    public function room(): void
    {
        $data = array(
            'title' => 'Rooms',
        );

        $this->view_admin('admin/room', $data);
    }
    public function facilities(): void
    {
        $data = array(
            'title' => 'Facilities',
        );

        $this->view_admin('admin/facilities', $data);
    }

    public function reservasi(): void
    {
        $data = array(
            'title' => 'Reservation',
        );

        $this->view_admin('admin/reservasi', $data);
    }

    // CRUD

    public function add_hotel_facilites()
    {
        if ($this->repository($this->hotel_facilities_repo)->add_hotel_facilites($_POST) > 0) {
            header('location' . BASE_URL . '/admin');
            exit;
        }
    }
}
