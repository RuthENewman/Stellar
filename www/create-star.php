<?php

namespace Stellar;

include("init.php");
include("collection.php");
include("src/model.php");
include("src/star.php");

$stars = $forCollection;

$index = 0;

foreach($stars as $star) {
    $newStar = new Star();
    $newStar->createStar($star, $index);
    $index++;
}

