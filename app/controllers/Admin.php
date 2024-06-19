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
}
