<?php

declare(strict_types=1);
namespace Stellar;

require_once('classes.php');

class Star
{
    /**
     * Database table name
     * @var string
     */
    protected static $dbTable = "stars";

    /**
    * ID for the image
    *
    * @var int
    */
    protected $id;

    /**
    * search index ID for the image
    *
    * @var int
    */
    protected $search_id;

    /**
    * URL of the image
    *
    * @var string
    */
    protected $image_url;

    /**
    * Image title
    *
    * @var string
    */
    protected $title;

    /**
    * Description
    *
    * @var string
    */
    protected $description;

    /**
     * Media type (image or video)
     *
     * @var string
     */
    protected $media_type;

    /**
    * Keywords
    *
    * @var array
    */
    protected $keywords;

    /**
    * Nasa ID
    *
    * @var string
    */
    protected $nasa_id;

    /**
    * Date created
    *
    * @var string
    */
    protected $date_created;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Star
     */
    public function setId()
    {
        if (is_null($id)) {
            $this->id = null;
        } else {
            $this->id = (int)$id;
        }
    }

    /**
     * @return int
     */
    public function getSearchId()
    {
        return (int) $this->search_id;
    }

    /**
     * @param int $searchId
     * @return Star
     */
    public function setSearchId($searchId)
    {
        $this->search_id = $searchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageURL()
    {
        return $this->image_url;
    }

    /**
     * @param string $imageURL
     * @return Star
     */
    public function setImageURL($imageURL)
    {
        $this->image_url = $imageURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Star
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Star
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * @param string $mediaType
     * @return Star
     */
    public function setMediaType($mediaType)
    {
        $this->media_type = $mediaType;
        return $this;
    }

    /**
     * @return array
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @return string
     */
    public function getKeywordsAsString()
    {
        $keywords = $this->keywords;
        return implode(", ", $keywords);
    }

    /**
     * @param array $keywords
     * @return Star
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getNasaId()
    {
        return $this->nasa_id;
    }

    /**
     * @param int $nasaId
     * @return Star
     */
    public function setNasaId($nasaId)
    {
        $this->nasa_id = $nasaId;
        return $this;
    }

    /**
     * @return string
     *
     */
     public function getDateCreated()
    {
         return $this->date_created;
     }

    /* @param string $dateCreated
     * @return Star
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
        return $this;
    }

    public static function findAll()
    {
        global $database;
        $sql = "SELECT * FROM stars";
        $result = $database->connect()->query($sql);
        $stars = [];
        while($row = $result->fetch()) {
           $stars[] = $row;
        }
        return $stars;
    }

    public static function findFirst()
    {
        global $database;
        $sql = "SELECT * FROM stars LIMIT 1";
        $result = $database->connect()->query($sql);
        while($row = $result->fetch()) {
            $star = $row;
            return $row;
        }
    }

    public static function findStar($id)
    {
        global $database;
        $sql = "SELECT * FROM stars WHERE id=" . $id;
        $result = $database->connect()->query($sql);
        while($row = $result->fetch()) {
            $star = $row;
            return $row;
        }
    }

    public static function findByTitle($title)
    {
        global $database;
        $sql = "SELECT * FROM stars WHERE title='" . $title . "'";
        $result = $database->connect()->query($sql);
        while($row = $result->fetch()) {
            $star = $row;
            return $row;
        }
    }

    public static function findByURL($url)
    {
        global $database;
        $sql = "SELECT * FROM stars WHERE image_url='" . $url . "'";
        $result = $database->connect()->query($sql);
        while($row = $result->fetch()) {
            $star = $row;
            return $row;
        }
    }

    public function createAllStars($data)
    {
        foreach($data as $row) {
            $this->buildStarFromRow($row);
        }
        return $stars;
    }

    public function createStar($data, $index)
    {
        $star = new Star();
        $star->setSearchId($index)
                 ->setImageURL($data['links'][0]['href'])
                 ->setTitle($data['data'][0]['title'])
                 ->setDescription($data['data'][0]['description'])
                 ->setMediaType($data['data'][0]['media_type'])
                 ->setKeywords($data['data'][0]['keywords'])
                 ->setNasaId($data['data'][0]['nasa_id'])
                 ->setDateCreated($data['data'][0]['date_created']);
        $star->setId($star->save($star));
        return $star;
    }

    public function saveAll($collection)
    {
        foreach ($collection as $star) {
            $this->save($star);
        }
    }

    public function save(Star $star)
    {
        global $database;
        $data = [
            'search_id' => $star->getSearchId(),
            'image_url' => $star->getImageURL(),
            'title' => $star->getTitle(),
            'description' => $star->getDescription(),
            'media_type' => $star->getMediaType(),
            'keywords' => $star->getKeywords(),
            'nasa_id' => $star->getNasaId(),
            'date_created' => $star->getDateCreated()
        ];
            $sql = "INSERT INTO " . $dbTable .  "(" . implode(",", array_keys($data)) . ")";
            $sql .= " VALUES ('" . implode("',", array_values($data)) . "')";
            if ($database->query($sql)) {
                $this->id = $database->insertID();
                return true;
            } else {
                return false;
            }
            $this->update($data, ['id = ?' => $id]);
            $starId = $id;
        return $starId;
    }

    public function delete($id)
    {
        global $database;
        $sql = "DELETE FROM stars WHERE id=" . $id . " LIMIT 1";
        $database->connect()->prepare($sql)->execute();
        return true;
    }

    private function buildStarFromRow($row) : Star
    {
        $star = new Star();
        $star->setId($row->id)
              ->setSearchId($row->search_id)
              ->setImageURL($row->image_url)
              ->setTitle($row->title)
              ->setDescription($row->description)
              ->setMediaType($row->mediaType)
              ->setKeywords($row->keywords)
              ->setNasaId($row->nasa_id)
              ->setDateCreated($row->date_created);
        return $star;
    }

}
