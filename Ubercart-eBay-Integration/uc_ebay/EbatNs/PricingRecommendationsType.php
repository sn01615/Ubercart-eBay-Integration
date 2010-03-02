<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductInfoType.php';

/**
 * Pricing data returned from the Product Pricing engine. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PricingRecommendationsType.html
 *
 */
class PricingRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var ProductInfoType
	 */
	protected $ProductInfo;

	/**
	 * @return ProductInfoType
	 */
	function getProductInfo()
	{
		return $this->ProductInfo;
	}
	/**
	 * @return void
	 * @param ProductInfoType $value 
	 */
	function setProductInfo($value)
	{
		$this->ProductInfo = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PricingRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ProductInfo' =>
				array(
					'required' => false,
					'type' => 'ProductInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
