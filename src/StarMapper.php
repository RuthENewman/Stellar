<?php

use Src\Star;

class StarMapper
{
    public function findStar($id)
    {

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
    //         $dbTable = new $dbTable();
    //     }
    //     $this->dbTable = $dbTable;
    //     return $this;
    // }

    // public function getDbTable()
    // {
    //     if (null === $this->dbTable)
    //     {
    //         $this->setDbTable('Star');
    //     }
    //     return $this->dbTable;
    // }

    public function createTeammate($data)
    {
        $teammate = new \Application_Model_Userlogin();
        $teammate->setUsername(trim(strtolower($data['username'])))
                 ->setName($data['contactName'])
                 ->setNewPassword(trim($data['password']))
                 ->setTimezone($data['timezone'])
                 ->setCurrency(RequestMeta::getCurrency())
                 ->setHowDidYouHear('Invited by teammate');
        $teammate->justSeen();
        $teammate->setId($this->userloginMapper->save($teammate));
        return $teammate;
    }

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
        $star->setId($this->starMapper->save($star));
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
        $star->setId($this->starMapper->save($star));
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
        $data = [
            'search_id' => $star->getSearchId(),
            'image_url' => $star->getImageURL(),
            'title' => $star->getTitle(),
            'description' => $star->getDescription(),
            'media_type' => $star->getMediaType(),
            'keywords' => $star->getKeywords(),
            'nasa_id' => $star->getNasaId(),
            'date_created' => $star->getCreated()
        ];

        if (null === ($id = $star->getId())) {
            unset($data['id']);
            $starId = $this->getDbTable()->insert($data);
            $star->setId($starId);
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

