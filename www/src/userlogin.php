<?php

declare(strict_types=1);

namespace Stellar;

class Userlogin extends Model
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $reset_password_token;

    /**
     * @param int $id
     * @return Userlogin
     */
    public function setId($id)
    {
        if ($id == null) {
            $this->id = null;
        } else {
            $this->id = (int)$id;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Userlogin
     */
    public function setEmail($email)
    {
        $this->email = (string)$email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Userlogin
     */
    public function setPassword($password)
    {
        $this->password = (string)$password;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Userlogin
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $date
     * @return Userlogin
     */
    public function setCreated($date)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function generateResetPasswordToken()
    {
        $passwordToken = substr(
            md5(rand(100000, 9999999) . $this->email . "rn@?!yhap"), 0,
            14
        );
        $this->reset_password_token = $passwordToken;
        return $this->reset_password_token;
    }

    /**
     * @return string
     */
    public function getResetPasswordToken()
    {
        return $this->reset_password_token;
    }

    /**
     * @param string $token
     * @return Userlogin
     */
    public function setResetPasswordToken($token)
    {
        $this->reset_password_token = (string)$token;
        return $this;
    }

    public static function verifyUser($email, $password)
    {
        global $database;

        $email = $database->escapeString($email);
        $password = $databse->escapeString($password);
        $sql = "SELECT * FROM userlogins WHERE email = $email AND password = $password LIMIT 1";
        $resultArray = self::findQuery($sql);
        return !empty($resultArray) ? array_shift($resultArray) : false;
    }

}
