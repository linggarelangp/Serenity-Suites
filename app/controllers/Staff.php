<?php

class Staff extends Controller
{

    public function index(): void
    {
        $data = array(
            'title' => 'Staff',
        );
        
        $this->view_staff('staff/index', $data);
    }
    public function user(): void
    {
        $data = array(
            'title' => 'staff',
        );

        $this->view_staff('staff/user', $data);
    }

    public function kamar(): void
    {
        $data = array(
            'title' => 'staff',
        );

        $this->view_staff('staff/kamar', $data);
    }
    public function reservasi(): void
    {
        $data = array(
            'title' => 'staff',
        );

        $this->view_staff('staff/reservasi', $data);
    }
}
