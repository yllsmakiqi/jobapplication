<?php
require_once 'Person.php';

class Admin extends Person
{
    public function __construct($emri,  $mbiemri, $username, $passwordi, $role)
    {
        parent::__construct($emri, $mbiemri, $username, $passwordi, $role);
        
    }

    public function setSession()
    {
        $_SESSION['role']=1;
        $_SESSION['rolename'] = "Admin";
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $this->username;
    }

    public function setCookie()
    {
        setcookie("emri", $this->getemri(), time() + 5000);
    }

    public function getemri()
    {
        return $this->emri;
    }
    public function getmbiemri()
    {
        return $this->mbiemri;
    }
    public function getusername()
    {
        return $this->username;
    }
    public function getpasswordi()
    {
        return $this->passwordi;
    }
    public function getRole()
    {
        return $this->role;
    }
}
