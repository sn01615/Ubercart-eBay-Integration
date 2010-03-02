<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreSubscriptionLevelCodeType.php';
require_once 'AmountType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreSubscriptionType.html
 *
 */
class StoreSubscriptionType extends EbatNs_ComplexType
{
	/**
	 * @var StoreSubscriptionLevelCodeType
	 */
	protected $Level;
	/**
	 * @var AmountType
	 */
	protected $Fee;

	/**
	 * @return StoreSubscriptionLevelCodeType
	 */
	function getLevel()
	{
		return $this->Level;
	}
	/**
	 * @return void
	 * @param StoreSubscriptionLevelCodeType $value 
	 */
	function setLevel($value)
	{
		$this->Level = $value;
	}
	/**
	 * @return AmountType
	 */
	function getFee()
	{
		return $this->Fee;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setFee($value)
	{
		$this->Fee = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreSubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Level' =>
				array(
					'required' => false,
					'type' => 'StoreSubscriptionLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>