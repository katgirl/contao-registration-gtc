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
$GLOBALS['TL_DCA']['tl_module']['palettes']['personalData'] = str_replace
(
  ';{redirect_legend}',
  ';{registration_legend:hide},gtc_page,disclaimer_page,licence_agreement_page;{redirect_legend}',
  $GLOBALS['TL_DCA']['tl_module']['palettes']['personalData']
);
$GLOBALS['TL_DCA']['tl_module']['palettes']['registration'] = str_replace
(
  ';{redirect_legend}',
  ';{registration_legend:hide},gtc_page,disclaimer_page,licence_agreement_page;{redirect_legend}',
  $GLOBALS['TL_DCA']['tl_module']['palettes']['registration']
);

/**
 * Add fields
 */  
$GLOBALS['TL_DCA']['tl_module']['fields']['gtc_page'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gtc_page'],
  'exclude'                 => true,
  'inputType'               => 'pageTree',
  'foreignKey'              => 'tl_page.title',
  'eval'                    => array('fieldType'=>'radio'),
  'sql'                     => "int(10) unsigned NOT NULL default '0'",
  'relation'                => array('type'=>'hasOne', 'load'=>'eager')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['disclaimer_page'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_module']['disclaimer_page'],
  'exclude'                 => true,
  'inputType'               => 'pageTree',
  'foreignKey'              => 'tl_page.title',
  'eval'                    => array('fieldType'=>'radio'),
  'sql'                     => "int(10) unsigned NOT NULL default '0'",
  'relation'                => array('type'=>'hasOne', 'load'=>'eager')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['licence_agreement_page'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_module']['licence_agreement_page'],
  'exclude'                 => true,
  'inputType'               => 'pageTree',
  'foreignKey'              => 'tl_page.title',
  'eval'                    => array('fieldType'=>'radio'),
  'sql'                     => "int(10) unsigned NOT NULL default '0'",
  'relation'                => array('type'=>'hasOne', 'load'=>'eager')
);
