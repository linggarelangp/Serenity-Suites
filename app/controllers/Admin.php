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

    public function user(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/user', $data);
    }

    public function kamar(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/kamar', $data);
    }

    public function reservasi(): void
    {
        $data = array(
            'title' => 'Admin',
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
