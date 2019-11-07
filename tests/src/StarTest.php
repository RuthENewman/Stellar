<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include 'src/Star.php';

class StarTest extends \PHPUnit\Framework\TestCase
{
    public function testStar()
    {
        $star = new Star();
        $star->setId(4)
              ->setSearchId(5)
              ->setImageURL('https://images-assets.nasa.gov/image/GSFC_20171208_Archive_e001894/GSFC_20171208_Archive_e001894~orig.jpg')
              ->setTitle('A Star-Formation Laboratory')
              ->setDescription('The dwarf galaxy NGC 4214 is ablaze with young stars and gas clouds. Located around 10 million light-years away in the
              constellation of Canes Venatici (The Hunting Dogs), the galaxys close proximity, combined with the wide variety of evolutionary stages
              among the stars, make it an ideal laboratory to research the triggers of star formation and evolution.  Intricate patterns of glowing hydrogen
              formed during the star-birthing process, cavities blown clear of gas by stellar winds, and bright stellar clusters of NGC 4214 can be seen in this optical and near-infrared image.
              Observations of this dwarf galaxy have also revealed clusters of much older red supergiant stars. Additional older stars can be seen dotted all across the galaxy. The variety of stars at different stages
              in their evolution indicates that the recent and ongoing starburst periods are not the first, and the galaxys abundant supply of hydrogen means that star formation will continue into the future.
              This color image was taken using the Wide Field Camera 3 in December 2009.')
              ->setMediaType('image')
              ->setKeywords('["A Star-Formation Laboratory"]')
              ->setNasaId('GSFC_20171208_Archive_e001894')
              ->setDateCreated('2011-05-13T16:56:36Z');
        $this->assertEquals(4, $star->getId());
        $this->assertEquals(5, $star->getSearchId());
        $this->assertEquals('https://images-assets.nasa.gov/image/GSFC_20171208_Archive_e001894/GSFC_20171208_Archive_e001894~orig.jpg', $star->getImageURL());
        $this->assertEquals('A Star-Formation Laboratory', $star->getTitle());
        $this->assertEquals('The dwarf galaxy NGC 4214 is ablaze with young stars and gas clouds. Located around 10 million light-years away in the
        constellation of Canes Venatici (The Hunting Dogs), the galaxys close proximity, combined with the wide variety of evolutionary stages
        among the stars, make it an ideal laboratory to research the triggers of star formation and evolution.  Intricate patterns of glowing hydrogen
        formed during the star-birthing process, cavities blown clear of gas by stellar winds, and bright stellar clusters of NGC 4214 can be seen in this optical and near-infrared image.
        Observations of this dwarf galaxy have also revealed clusters of much older red supergiant stars. Additional older stars can be seen dotted all across the galaxy. The variety of stars at different stages
        in their evolution indicates that the recent and ongoing starburst periods are not the first, and the galaxys abundant supply of hydrogen means that star formation will continue into the future.
        This color image was taken using the Wide Field Camera 3 in December 2009.', $star->getDescription());
        $this->assertEquals('image', $star->getMediaType());
        $this->assertEquals('GSFC_20171208_Archive_e001894', $star->getNasaId());
        $this->assertEquals('2011-05-13T16:56:36Z')->getDateCreated();
    }

    public function testGetKeywordsAsString()
    {

    }

    public function testFindStar()
    {

    }

    public function testFindByTitle()
    {

    }

    public function testFindByURL()
    {

    }

    public function testCreateAllStars()
    {

    }

    public function testCreateStar()
    {

    }

    public function testSave()
    {

    }

    public function testDelete()
    {

    }
}