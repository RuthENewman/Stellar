<?php

declare(strict_types=1);

namespace Stellar;

class Star extends Model
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
        return static::findQuery($sql);
    }

    public function findStar($id)
    {
        global $database;

    }

    public function findByTitle($title)
    {

    }

    public function findByURL($url)
    {

    }

    // public function setDbTable($dbTable)
    // {
    //     if (is_string($dbTable)) {
    //         $dbTable = new Star();
    //     }
    //     $this->dbTable = $dbTable;
    //     return $this;
    // }

    // public function getDbTable()
    // {
    //     if (null === $dbTable)
    //     {
    //         $this->setDbTable('stars');
    //     }
    //     return $this->dbTable;
    // }

    public function createAllStars($data, $index)
    {
        $star = new Star();
        $star->setSearchId($data[$index])
                 ->setImageURL($data[$index]['links'][0]['href'])
                 ->setTitle($data[$index]['data'][0]['title'])
                 ->setDescription($data[$index]['data'][0]['description'])
                 ->setMediaType($data[$index]['data'][0]['media_type'])
                 ->setKeywords($data[$index]['data'][0]['keywords'])
                 ->setNasaId($data[$index]['data'][0]['nasa_id'])
                 ->setDateCreated($data[$index]['data'][0]['date_created']);
        $star->setId($this->star->save($star));
        return $star;
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
        if (null === ($id = $star->getId())) {
            unset($data['id']);

            $sql = "INSERT INTO " . $dbTable .  "(" . implode(",", array_keys($data)) . ")";
            $sql .= " VALUES ('" . implode("',", array_values($data)) . "')";
            if ($database->query($sql)) {
                $this->id = $database->insertID();
                return true;
            } else {
                return false;
            }
        } else {
            $this->getDbTable()->update($data, ['id = ?' => $id]);
            $starId = $id;
        }
        return $starId;
    }

    // should add userloginId as parameter when userlogin function added
    public function delete($starId)
    {
        if($this->getDbTable()->delete('id = ?', $starId) != 1) {
            return false;
        }
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
