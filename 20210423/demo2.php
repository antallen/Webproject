<?php

require_once "Wash.php";
require_once "Plants.php";
require_once "Thirts.php";

$plant = new Plants;
$thirt = new Thirts;
$action = new Washer;
$action->dowash($plant);
$action->dowash($thirt);

?>