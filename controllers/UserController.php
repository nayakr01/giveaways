<?php
    require_once('models/User.php');

class UserController {
    public $users;

    public function __construct() {
        $this -> users =[
            new User('Pepe', 'pepito',),
            new User('Marta', '123', 2),
            new User('Juan', 'qwerty'),
            new User('Naya', 'naya', 2),
        ];

    }

    public function pagLogin() {
        require('views/login.php');
    }

    public function pagIndex() {
        require('views/homepage.php');
    }

    private function searchUser($name, $pass) {
        foreach($this -> users as $user) {
            if ($user -> getUser() == $name && $user -> getPassword() == $pass) {
                return $user && $pass;
            }
        }
        return null;
    }

    private function searchLevel($name) {
        foreach($this -> users as $user) {
            if ($user -> getUser() == $name) {
                return $user -> getLevel();
            }
        }
    }

    public function singIn($user, $password) {
        $singIn = $this -> searchUser($user, $password);
        $level = $this -> searchLevel($user);
        if ($singIn == $this -> users) {
            $_SESSION['users'][] = $this -> users;
            $_SESSION['user'] = $user;
            $_SESSION['level'] = $level;
            header('Location: /index.php/index');
        } else {
            require('views/error.php');
        }
    }

    public function logOut() {
        session_destroy();
        header('Location: /index.php/login');
    }
}
?>