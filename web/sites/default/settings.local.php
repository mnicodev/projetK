<?php

$databases['default']['default'] = array (
  'database' => 'projetK',
  'username' => 'userbdd',
  'password' => 'userbdd',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
// Include Kint class.
//include_once(DRUPAL_ROOT . '/modules/contrib/devel/kint/kint/Kint.class.php');

// If debugging is very slow or leads to WSOD reduce the number
// of levels of information shown by Kint.
// Change Kint maxLevels setting:
if (class_exists('Kint')){
  // Set the maxlevels to prevent out-of-memory. Currently there doesn't seem to be a cleaner way to set this:
//  Kint::$maxLevels = 4;
}
