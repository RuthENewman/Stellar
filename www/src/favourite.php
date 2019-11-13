<?php

declare(strict_types=1);
namespace Stellar;

require_once('classes.php');

class Favourite
{
    /**
     * Database table name
     * @var string
     */
    protected static $dbTable = "favourites";

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


    public static function findAll()
    {
        global $database;
        // Would add a where condition for match userlogin ID when auth added
        $sql = "SELECT * FROM favourites";
        $result = $database->connect()->query($sql);
        $favouriteResults = [];
        while($row = $result->fetch()) {
            $favouriteResults[] = $row;
        }
        $favourites = [];
        foreach($favouriteResults as $favouriteResult) {
            $favourite = Star::findStar($favouriteResult["star_id"]);
            $favourites[] = $favourite;
        }
        return $favourites;
    }
}
