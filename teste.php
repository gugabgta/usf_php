<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('firebase.json')
    ->withDatabaseUri('https://teste-f99d6-default-rtdb.firebaseio.com');

#$auth = $factory->createAuth('LazpE8sPa1Dd8McHGdAARjxnRYnUKD9bkLhSbupN');
$database = $factory->createDatabase();
#$cloudMessaging = $factory->createMessaging();
#$remoteConfig = $factory->createRemoteConfig();
#$cloudStorage = $factory->createStorage();
$reference = $database->getReference('Alan');
$snapshot = $reference->getSnapshot();
$value = $snapshot->getValue();
var_dump($value);
