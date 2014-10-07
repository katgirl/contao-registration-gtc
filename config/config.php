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
 * Register hooks
 */
 $GLOBALS['TL_HOOKS']['getAttributesFromDca'][] = array('Hooks', 'getAttributesFromDcaHook');
