<?php

declare(strict_types=1);

class Star
{
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
     * /
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * @param string $dateCreated
     * @return Star
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
        return $this;
    }

}
