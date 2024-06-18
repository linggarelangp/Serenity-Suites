<?php

class Auth_repo
{
    private $model;
    public function __construct()
    {
        $model = 'Auth_model';
        require 'app/models/' . $model . '.php';
        $this->model = new Auth_model;
    }

    public function login($data)
    {
        return $this->model->login($data);
    }

    public function register($data)
    {
        return $this->model->register($data);
    }
}
