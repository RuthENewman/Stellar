<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include 'src/Userlogin.php';

class UserloginTest extends \PHPUnit\Framework\TestCase
{
    public function testUserlogin()
    {
        $userlogin = new Userlogin();
        $passwordToken = $userlogin->generateResetPasswordToken();
        $userlogin->setId(47)
                   ->setEmail('neil@armstrong.com')
                   ->setPassword('1stManOnTheMoon')
                   ->setName('Neil Armstrong')
                   ->setCreated('1969-07-20 00:00:00')
                   ->setResetPasswordToken($passwordToken);
        $this->assertEquals(47, $userlogin->getId());
        $this->assertEquals('neil@armstrong.com', $userlogin->getEmail());
        $this->assertEquals('1969-07-20 00:00:00', $userlogin->getCreated());
        $this->assertEquals($passwordToken, $userlogin->getResetPasswordToken());
    }

    public function testGenerateResetPasswordToken()
    {

    }
}