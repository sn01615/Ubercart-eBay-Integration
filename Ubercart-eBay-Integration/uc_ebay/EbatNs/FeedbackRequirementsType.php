<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackRequirementsType.html
 *
 */
class FeedbackRequirementsType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackRequirementsType', 'http://www.w3.org/2001/XMLSchema');
	$this->_attributes = array_merge($this->_attributes,
		array(
			'minimum' =>
			array(
				'name' => 'minimum',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
