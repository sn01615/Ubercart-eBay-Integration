<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'PromotionRuleArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns all promotion rules associated with the specified item or store 
 * category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPromotionRulesResponseType.html
 *
 */
class GetPromotionRulesResponseType extends AbstractResponseType
{
	/**
	 * @var PromotionRuleArrayType
	 */
	protected $PromotionRuleArray;

	/**
	 * @return PromotionRuleArrayType
	 */
	function getPromotionRuleArray()
	{
		return $this->PromotionRuleArray;
	}
	/**
	 * @return void
	 * @param PromotionRuleArrayType $value 
	 */
	function setPromotionRuleArray($value)
	{
		$this->PromotionRuleArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPromotionRulesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotionRuleArray' =>
				array(
					'required' => false,
					'type' => 'PromotionRuleArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
