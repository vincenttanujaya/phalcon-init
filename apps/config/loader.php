<?php

$loader = new \Phalcon\Loader();

/**
  * Load library namespace
  */
$loader->registerNamespaces(array(
	/**
	 * Load SQL server db adapter namespace
	 */
	//'Phalcon\Db\Adapter\Pdo' => APP_PATH . '/lib/Phalcon/Db/Adapter/Pdo',
	//'Phalcon\Db\Dialect' => APP_PATH . '/lib/Phalcon/Db/Dialect',
	'Phalcon\Init\Dashboard\Domain' => APP_PATH . '/modules/dashboard/domain',
	'Phalcon\Init\Dashboard\Presentation' => APP_PATH . '/modules/dashboard/presentation',

));

$loader->register();
