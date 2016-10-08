<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_backpic
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * Form Rule class for the Joomla Framework.
 */
class JFormRuleGreeting extends JFormRule
{
	/**
	 * The regular expression.
	 *
	 * @access	protected
	 * @var		string
	 * @since	2.5
	 */
	//protected $regex = '^[^0-9]+$';
	public function test(SimpleXMLElement $element, $value, $group = null, JRegistry $input = null, JForm $form = null) {
		// mb_strlen for utf8  counter
	        if (mb_strlen($value, 'UTF-8') > 20) {
	            return false;
	        }else {
	        	return true;
	        }        		
    	}
}
