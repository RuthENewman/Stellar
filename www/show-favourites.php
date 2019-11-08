<?php
require_once("database.php");
require_once("model.php");
require_once("star.php");
require_once("favourite.php");

$stars = Star::findAll();

var_dump($stars);
exit;