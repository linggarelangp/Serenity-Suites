<?php

class Auth extends Controller
{
    private string $auth_repo = 'Auth_repo';

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

        $data = $this->repository($this->auth_repo)->login($_POST);
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
            header("location: " . BASE_URL . "/home");
        }
    }

    public function registerValidation()
    {
        if ($_POST["password"] === $_POST["confirmPassword"]) {
            if ($this->repository($this->auth_repo)->register($_POST) > 0) {

                echo "<script>alertSuccess()</script>";
            } else {
                echo "<script>alertFailed()</script>";
            }
        } else {
            echo "<script>alertErrorPasswordAndConfirmPassword()</script>";
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header("location: " . BASE_URL . "/home");
    }
}
?>

<script>
    function alertSuccess() {
        alert('Register Successfully!');

        window.location.href = "<?= BASE_URL; ?>/auth/register"
    }

    function alertFailed() {
        alert('Register Failed!');

        window.location.href = "<?= BASE_URL; ?>/auth/register"
    }

    function alertErrorPasswordAndConfirmPassword() {
        alert('Password and Confirm Password must match!');

        window.location.href = "<?= BASE_URL; ?>/auth/register"
    }
</script>