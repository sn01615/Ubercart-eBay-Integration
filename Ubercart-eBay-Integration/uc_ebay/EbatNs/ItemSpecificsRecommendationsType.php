<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';

/**
 * Contains attribute suggestions returned from the suggested Item Specifics from 
 * theRecommendation engine, An "Item Specific" will be a name/value pair and may 
 * bereturned complete (with name/value) or partial (name only). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemSpecificsRecommendationsType.html
 *
 */
class ItemSpecificsRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;

	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemSpecificsRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemSpecifics' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>