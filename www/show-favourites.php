<?php

namespace Stellar;
require_once('classes.php');
require_once('init.php');

$foundFaveStars = Favourite::findAll();

var_dump($foundFaveStars);
exit;

?>