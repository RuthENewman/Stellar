<?php

namespace Stellar;

class Session
{
    private $signedIn;
    public $userloginId;

    function __construct()
    {
        session_start();
        $this->checkLogin();
        $this->checkMessage();
    }

    public function message($message="")
    {
        if(!empty($message)) {
            $_SESSION['message'] = $message;
        } else {
            return $this->message;
        }
    }

    private function checkMessage()
    {
        if(isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }

    public function isSignedIn()
    {
        return $this->signedIn;
    }

    public function login($userlogin)
    {
        if($userlogin){
            $this->userloginId = $_SESSION['user_id'];
            $this->signedIn = true;
        } else {
            unset($this->userloginId);
            $this->signedIn = false;
        }
    }
}


$session = new Session();
