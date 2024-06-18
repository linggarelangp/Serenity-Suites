<?php

class Auth extends Controller
{
    private string $roles_repo = 'Roles_repo';

    public function login(): void
    {
        $data = array(
            'title' => 'Login',
            // 'roles' => $this->repository($this->roles_repo)->getAllRoles(),
        );

        $this->view('auth/login', $data);
    }

    public function register(): void
    {
        $data = array(
            'title' => 'Register',
            // 'roles' => $this->repository($this->roles_repo)->getAllRoles(),
        );

        $this->view('auth/register', $data);
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
