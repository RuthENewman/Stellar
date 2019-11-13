<?php

declare(strict_types=1);

namespace Stellar;

class Favourite
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $userlogin_id;
    /**
     * @var int
     */
    protected $star_id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param int $id
     * @return Favourite
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserloginId()
    {
        return $this->userlogin_id;
    }

    /**
     * @param int $userloginId
     * @return Favourite
     */
    public function setUserloginId($userloginId)
    {

    }

    /**
     * @return int
     */
    public function getStarId()
    {
        return $this->star_id;
    }

    /**
     * @param int $starId
     * @return Favourite
     */
    public function setStarId($starId)
    {
        $this->star_id = $starId;
        return $this;
    }

}
