<?php
require_once 'controllers/Controller.php';
require_once 'model/user.php';
class AuthAdminController extends Controller {
    public function login() {
        if($_SESSION['login'] == true){
            $this->redirect('index.php?mod=admin');
        }
        $this->view('admin/auth/login.php');
    }

    public function checkLogin() {
        //logic
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = new User();
        $user = $userModel->getUserByEmail($email);

        // var_dump($user);die();

        if($user) {
            if($user['password'] == $password) {
                $_SESSION['login'] = true;
                $_SESSION['auth'] = $user;
                header('location: index.php?mod=admin');
            } else {
                $_SESSION['login'] = false;
                echo "Sai mật khẩu";
            }
        } else {
            $_SESSION['login'] = false;
        }
    }

    public function logout()
    {
        
        $_SESSION['login'] = false;
        
        unset($_SESSION['auth']);

        $this->redirect('index.php?mod=admin');
    }
}

?>