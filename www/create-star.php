<?php

namespace Stellar;

include("classes.php");
include("init.php");

$stars = $forCollection;

$index = 0;

// $allStars = Star::findAll();
// $firstStar = Star::findFirst();
// $foundStar = Star::findStar(1848);
// $foundByTitle = Star::findByTitle("Tabbys Star (Illustration)");
// $foundByURL = Star::findByURL("https://images-assets.nasa.gov/image/PIA22081/PIA22081~orig.jpg");

// var_dump($stars);
// exit;

$newStars = [];
foreach($stars as $star) {
        $newStar = Star::createStar($star, $index);
        $newStars[] = $newStar;
        $index++;
}

// var_dump($newStars);
// exit;

// foreach($newStars as $newStar) {
//     $database->insertInto()->execute($newStar);
// }

Star::saveAll($newStars);
