<?php

$configuration = array(
    'db_dsn'  => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'mikaidou',
    'db_pass' => 'admin',
);

require_once __DIR__.'/lib/Service/Container.php';
require_once __DIR__.'/lib/Model/Ship.php';
require_once __DIR__.'/lib/Service/BattleManager.php';
require_once __DIR__.'/lib/Service/ShipLoader.php';
require_once __DIR__.'/lib/Model/BattleResult.php';
