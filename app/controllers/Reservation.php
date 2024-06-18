<?php

class Reservation extends Controller
{

    public function index(): void
    {
        $data = array(
            'title' => 'Reservation',
        );

        $this->view('reservation/index', $data);
    }
}
