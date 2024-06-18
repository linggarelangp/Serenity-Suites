<?php

class Rooms extends Controller
{

    public function index(): void
    {
        $data = array(
            'title' => 'Rooms',
        );

        $this->view('rooms/index', $data);
    }
}
