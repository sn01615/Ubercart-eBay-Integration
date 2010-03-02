<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerSatisfactionStatusCodeType.php';
require_once 'SellerDashboardAlertType.php';

/**
 * Container for fields related to buyer satisfaction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyerSatisfactionDashboardType.html
 *
 */
class BuyerSatisfactionDashboardType extends EbatNs_ComplexType
{
	/**
	 * @var BuyerSatisfactionStatusCodeType
	 */
	protected $Status;
	/**
	 * @var SellerDashboardAlertType
	 */
	protected $Alert;

	/**
	 * @return BuyerSatisfactionStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param BuyerSatisfactionStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return SellerDashboardAlertType
	 * @param integer $index 
	 */
	function getAlert($index = null)
	{
		if ($index !== null) {
			return $this->Alert[$index];
		} else {
			return $this->Alert;
		}
	}
	/**
	 * @return void
	 * @param SellerDashboardAlertType $value 
	 * @param  $index 
	 */
	function setAlert($value, $index = null)
	{
		if ($index !== null) {
			$this->Alert[$index] = $value;
		} else {
			$this->Alert = $value;
		}
	}
	/**
	 * @return void
	 * @param SellerDashboardAlertType $value 
	 */
	function addAlert($value)
	{
		$this->Alert[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyerSatisfactionDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'BuyerSatisfactionStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Alert' =>
				array(
					'required' => false,
					'type' => 'SellerDashboardAlertType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
