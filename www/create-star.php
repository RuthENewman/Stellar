<?php

include("collection.php");
use Src\StarMapper;

$stars = $forCollection;

$index = 0;

foreach($stars as $star) {
    StarMapper::createStar($star, $index);
    $index++;
}

