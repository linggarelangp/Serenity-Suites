<?php

class Controller
{
    public function view(string $view, array $data = []): void
    {
        $data;
        require 'app/views/layouts/header.php';
        require 'app/views/' . $view . '.php';
        require 'app/views/layouts/footer.php';
    }

    public function view_admin(string $view, array $data = []): void
    {
        $data;
        require 'app/views/admin/layouts/header.php';
        require 'app/views/' . $view . '.php';
        require 'app/views/admin/layouts/footer.php';
    }

    public function view_staff(string $view, array $data = []): void
    {
        $data;
        require 'app/views/staff/layouts/header.php';
        require 'app/views/' . $view . '.php';
        require 'app/views/staff/layouts/footer.php';
    }

    public function view_user(string $view, array $data = []): void
    {
        $data;
        require 'app/views/user/layouts/header.php';
        require 'app/views/' . $view . '.php';
        require 'app/views/user/layouts/footer.php';
    }


    public function model(string | object $model): object
    {
        require 'app/models/' . $model . '.php';
        return new $model;
    }
}
