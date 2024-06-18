<?php

class Home extends Controller
{
    private string $roles_repo = 'Roles_repo';

    public function index(): void
    {
        $data = array(
            'title' => 'Homepage',
            // 'roles' => $this->repository($this->roles_repo)->getAllRoles(),
        );

        $this->view('home/index', $data);
    }

    public function search()
    {
        $data = array('title' => 'Homepage');

        if (isset($_POST['rolename']) && !empty($_POST['rolename'])) {
            $input = $_POST['rolename'];
            $data['roles'] = $this->repository($this->roles_repo)->getRoleByName($input);
        } else {
            $data['roles'] = $this->repository($this->roles_repo)->getAllRoles();
        }

        $this->view('home/index', $data);
    }
}
