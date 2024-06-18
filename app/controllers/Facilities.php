<?php

class Facilities extends Controller
{
    public function index(): void
    {
        $data = array(
            'title' => 'Facilities',
        );

        $this->view('facilities/index', $data);
    }
}
