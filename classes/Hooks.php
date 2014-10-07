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
 * Run in a custom namespace, so the class can be replaced
 */
namespace KirstenRoschanski;

/**
 * Class Hooks
 *
 * @copyright  Kirsten Roschanski 2014
 * @author     Kirsten Roschanski
 * @package    registration_gtc
 */
class Hooks extends \Frontend
{   
  
	/**
	 * Hook for the Widget attributes from a Data Container array
	 *
	 * @param array  $arrAttributes  The attributes array
	 * @param object $objDca         An optional DataContainer object
	 *
	 * @return array An attributes array that can be passed to a widget
	 */
  public function getAttributesFromDcaHook($arrAttributes, $objDca)
  {

    if ($objDca->type == 'personalData' || $objDca->type == 'registration') {
      
      if($arrAttributes['name'] == 'gtc' && $objDca->gtc_page != 0) {
        $arrAttributes['options'][0]['label'] = preg_replace('#'.$arrAttributes['label'].'#i', '{{link::'.$objDca->gtc_page.'}}', $arrAttributes['options'][0]['label']);
      }  
      
      if($arrAttributes['name'] == 'disclaimer' && $objDca->disclaimer_page != 0) {
        $arrAttributes['options'][0]['label'] = preg_replace('#'.$arrAttributes['label'].'#i', '{{link::'.$objDca->disclaimer_page.'}}', $arrAttributes['options'][0]['label']);
      }  
      
      if($arrAttributes['name'] == 'licence_agreement' && $objDca->licence_agreement_page != 0) {
        $arrAttributes['options'][0]['label'] = preg_replace('#'.$arrAttributes['label'].'#i', '{{link::'.$objDca->licence_agreement_page.'}}', $arrAttributes['options'][0]['label']);
      }  
    }  
      
    return $arrAttributes;
  }
  
}
