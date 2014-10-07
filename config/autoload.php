<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2014 Kirsten Roschanski
 *
 * @package registration_gtc
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'KirstenRoschanski',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'KirstenRoschanski\Hooks' => 'system/modules/registration_gtc/classes/Hooks.php',
));
