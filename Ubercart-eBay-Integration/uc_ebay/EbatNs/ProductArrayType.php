<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ExpressProductType.php';

/**
 * Container for a list of eBay Express products. Can contain zero, one, or 
 * multipleExpressProductType objects, each of which conveys the data for one 
 * product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductArrayType.html
 *
 */
class ProductArrayType extends EbatNs_ComplexType
{
	/**
	 * @var ExpressProductType
	 */
	protected $Product;

	/**
	 * @return ExpressProductType
	 * @param integer $index 
	 */
	function getProduct($index = null)
	{
		if ($index !== null) {
			return $this->Product[$index];
		} else {
			return $this->Product;
		}
	}
	/**
	 * @return void
	 * @param ExpressProductType $value 
	 * @param  $index 
	 */
	function setProduct($value, $index = null)
	{
		if ($index !== null) {
			$this->Product[$index] = $value;
		} else {
			$this->Product = $value;
		}
	}
	/**
	 * @return void
	 * @param ExpressProductType $value 
	 */
	function addProduct($value)
	{
		$this->Product[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Product' =>
				array(
					'required' => false,
					'type' => 'ExpressProductType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
