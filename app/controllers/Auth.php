<?php

class Auth extends Controller
{
    private string $auth_model = 'Auth_model';

    public function login(): void
    {
        $data = array(
            'title' => 'Login',
        );

        $this->view('auth/login', $data);
    }

    public function register(): void
    {
        $data = array(
            'title' => 'Register',
        );

        $this->view('auth/register', $data);
    }

    public function loginValidation()
    {
        session_start();

        $email = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email']) ? true : false;
        var_dump($email);

        if (!$email) {
            header("location: " . BASE_URL . "/auth/login/failed");
        } else {
            $data = $this->model($this->auth_model)->login($_POST);
            if (!empty($data)) {

                $_SESSION['id'] = $data->id;
                $_SESSION['roleid'] = $data->roleid;
                $_SESSION['email'] = $data->email;
                $_SESSION['firstname'] = $data->firstname;
                $_SESSION['lastname'] = $data->lastname;
                $_SESSION['fullname'] = $data->fullname;
                $_SESSION['status'] = true;

                if ($data->roleid === 1) {
                    header("location: " . BASE_URL . "/admin");
                } else if ($data->roleid === 2) {
                    header("location: " . BASE_URL . "/staff");
                } else {
                    header("location: " . BASE_URL . "/home");
                }
            } else {
                header("location: " . BASE_URL . "/auth/login/failed");
            }
        }
    }

    public function registerValidation()
    {
        $email = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email']) ? true : false;

        if (!$email) {
            header("location: " . BASE_URL . "/auth/register/email");
        } else if ($_POST["password"] !== $_POST["confirmPassword"]) {
            header("location: " . BASE_URL . "/auth/register/password");
        } else {
            if ($this->model($this->auth_model)->register($_POST) > 0) {
                header("location: " . BASE_URL . "/auth/register/success");
            } else {
                header("location: " . BASE_URL . "/auth/register/failed");
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header("location: " . BASE_URL . "/home");
    }
}
