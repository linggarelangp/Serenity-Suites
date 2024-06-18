<?php

class Contact extends Controller
{

    public function index(): void
    {
        $data = array(
            'title' => 'Contact',
        );

        $this->view('contact/index', $data);
    }
}
