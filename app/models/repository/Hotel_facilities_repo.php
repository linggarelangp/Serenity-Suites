<?php

class Hotel_facilities_repo
{
    private $model;
    public function __construct()
    {
        $model = 'Hotel_facilities_model';
        require 'app/models/' . $model . '.php';
        $this->model = new Hotel_facilities_model;
    }

    public function getAllHotelFacilities()
    {
        return $this->model->getAllHotelFacilities();
    }
}
