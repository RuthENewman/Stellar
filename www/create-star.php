<?php

include("collection.php");
use Src\Star;

$stars = $forCollection;

$index = 0;

foreach($stars as $star) {
    Star::createStar($star, $index);
    $index++;
}

