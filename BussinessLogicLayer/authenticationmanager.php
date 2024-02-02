<?php

require_once 'userauthentication.php';
require_once 'securityenforcer.php';
require_once 'auditloggermodule.php';
require_once 'usermapper.php';
require_once 'UserAuthentication.php';

class AuthenticationManager implements UserAuthentication
{
    private $userMapper;

    public function __construct(UserMapper $userMapper)
    {
        $this->userMapper = $userMapper;
    }

    public function authenticateUser(): bool
    {
        $username = $_POST['username']; 
        $password = $_POST['password']; 

        $user = $this->userMapper->getUserByUsername($username);

        if ($user && password_verify($password, $user['passwordi'])) {
            $obj = new User($user['emri'], $user['mbiemri'], $user['username'], $user['passwordi'], $user['role']);
            $obj->setSession();

            return true;
        } else {
            return false;
        }
    }

    public function externalVerification(): bool
    {    
        $username = $_POST['username']; 
        $user = $this->userMapper->getUserByUsername($username);
        if ($user && $user['is_verified'] == 1) {
            return true;
        } else {
            return false;
        }
    }
    

    public function createSession()
    {
        session_start();
    
        $username = $_POST['username'];
        $user = $this->userMapper->getUserByUsername($username);
    
        if ($user) {
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
    
            return true;
        } else {
            return false;
        }
    }
    public function terminateSession()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        return true;
    }
    
}

?>
