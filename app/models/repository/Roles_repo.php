<?php

class Roles_repo
{
    private $model;
    public function __construct()
    {
        $model = 'Roles_model';
        require 'app/models/' . $model . '.php';
        $this->model = new Roles_model;
    }

    public function getAllRoles()
    {
        return $this->model->getAllRoles();
    }

    public function getRoleByName(string $name)
    {
        return $this->model->getRoleByName($name);
    }

    public function getRoleByDate(DateTime $date)
    {
        return $this->model->getRoleByDate($date);
    }
}
