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
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] =
  str_replace(
    ';{account_legend}',
    ';{registration_legend:hide},gtc,disclaimer,licence_agreement;{account_legend}',
    $GLOBALS['TL_DCA']['tl_member']['palettes']['default']
  );
  
/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['gtc'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_member']['gtc'],
  'exclude'                 => true,
  'filter'                   => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('mandatory'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'login', 'tl_class'=>'w50 wizard'),
  'sql'                     => "char(1) NOT NULL default ''"
);  
$GLOBALS['TL_DCA']['tl_member']['fields']['disclaimer'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_member']['disclaimer'],
  'exclude'                 => true,
  'filter'                   => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('mandatory'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'login', 'tl_class'=>'w50 wizard'),
  'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['licence_agreement'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_member']['licence_agreement'],
  'exclude'                 => true,
  'filter'                   => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('mandatory'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'login', 'tl_class'=>'w50 wizard'),
  'sql'                     => "char(1) NOT NULL default ''"
);
