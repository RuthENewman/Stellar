<?php
require_once('classes.php');
require_once('init.php');

// $star = new Star();
$foundFaveStars = Favourite::findAll();
var_dump($foundFaveStars);
exit;

?>