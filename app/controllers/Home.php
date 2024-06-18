<?php

class Home extends Controller
{
    public function index(): void
    {
        $data = array(
            'title' => 'Homepage',
        );

        $this->view('home/index', $data);
    }
}
