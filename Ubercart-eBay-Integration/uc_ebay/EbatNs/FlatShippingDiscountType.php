<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DiscountNameCodeType.php';
require_once 'DiscountProfileType.php';

/**
 * Details of an individual discount profile defined by theuser for flat rate 
 * shipping. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FlatShippingDiscountType.html
 *
 */
class FlatShippingDiscountType extends EbatNs_ComplexType
{
	/**
	 * @var DiscountNameCodeType
	 */
	protected $DiscountName;
	/**
	 * @var DiscountProfileType
	 */
	protected $DiscountProfile;

	/**
	 * @return DiscountNameCodeType
	 */
	function getDiscountName()
	{
		return $this->DiscountName;
	}
	/**
	 * @return void
	 * @param DiscountNameCodeType $value 
	 */
	function setDiscountName($value)
	{
		$this->DiscountName = $value;
	}
	/**
	 * @return DiscountProfileType
	 * @param integer $index 
	 */
	function getDiscountProfile($index = null)
	{
		if ($index !== null) {
			return $this->DiscountProfile[$index];
		} else {
			return $this->DiscountProfile;
		}
	}
	/**
	 * @return void
	 * @param DiscountProfileType $value 
	 * @param  $index 
	 */
	function setDiscountProfile($value, $index = null)
	{
		if ($index !== null) {
			$this->DiscountProfile[$index] = $value;
		} else {
			$this->DiscountProfile = $value;
		}
	}
	/**
	 * @return void
	 * @param DiscountProfileType $value 
	 */
	function addDiscountProfile($value)
	{
		$this->DiscountProfile[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FlatShippingDiscountType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DiscountName' =>
				array(
					'required' => false,
					'type' => 'DiscountNameCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountProfile' =>
				array(
					'required' => false,
					'type' => 'DiscountProfileType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
