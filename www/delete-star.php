<?php

namespace Stellar;

include("init.php");
include("collection.php");
include("src/model.php");
include("src/star.php");

if(!empty($_GET['id'])) {
    header("Location: stars.php");
}

$starID = (int) $_GET['id'];

$star = Star::find($starID);

if ($star) {
    $star->delete();
    header("Location: stars.php");
} else {
    header("Location: stars.php");
}

?>
