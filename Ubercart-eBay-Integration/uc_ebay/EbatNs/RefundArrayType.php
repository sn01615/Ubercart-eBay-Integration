<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'RefundType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains an array of refunds. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundArrayType.html
 *
 */
class RefundArrayType extends EbatNs_ComplexType
{
	/**
	 * @var RefundType
	 */
	protected $Refund;

	/**
	 * @return RefundType
	 * @param integer $index 
	 */
	function getRefund($index = null)
	{
		if ($index !== null) {
			return $this->Refund[$index];
		} else {
			return $this->Refund;
		}
	}
	/**
	 * @return void
	 * @param RefundType $value 
	 * @param  $index 
	 */
	function setRefund($value, $index = null)
	{
		if ($index !== null) {
			$this->Refund[$index] = $value;
		} else {
			$this->Refund = $value;
		}
	}
	/**
	 * @return void
	 * @param RefundType $value 
	 */
	function addRefund($value)
	{
		$this->Refund[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Refund' =>
				array(
					'required' => false,
					'type' => 'RefundType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
