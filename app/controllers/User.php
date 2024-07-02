<?php
session_start();

class User extends Controller
{
    private string $roles_model = 'roles_model';
    private string $users_model = 'users_model';

    public function index(): void
    {

        if (($_SESSION['roleid'] === 3) && $_SESSION['status'] === true) {
            $data = array(
                'title' => 'Dashboard',
                'roles' => $this->model($this->roles_model)->getAllRoles()
            );

            $this->view_user('user/index', $data);
        } else {
            header("Location: " . BASE_URL . "/home");
            exit;
        }
    }
}
