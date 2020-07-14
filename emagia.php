<?php
include_once __DIR__ . '/vendor/autoload.php';

use \Emagia\Game\game;
use \Emagia\Game\charactersFactory;

$orderus = charactersFactory::factory('orderus');
$beast   = charactersFactory::factory('beast'); 

$game    = new game($orderus, $beast, 20);

$game->start();

