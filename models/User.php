<?php
class User {
    private $user;
    private $password;
    private $level;

    public function __construct($user, $password, $level = 1) {
        $this->user = $user;
        $this->password = $password;
        $this->level = $level;
    }

    public function  getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getLevel() {
        return $this->level;
    }
}
?>