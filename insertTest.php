<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('firebase.json')
    ->withDatabaseUri('https://teste-f99d6-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();
$database->getReference('')
   ->set([
       'name' => 'My Application',
       'emails' => [
           'support' => 'support@domain.tld',
           'sales' => 'sales@domain.tld',
       ],
       'website' => 'https://app.domain.tld',
      ]);

$database->getReference('root')->set('root value');