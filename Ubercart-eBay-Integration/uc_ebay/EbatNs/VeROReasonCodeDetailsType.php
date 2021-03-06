<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'VeROSiteDetailType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Container for reason code details for all sites. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROReasonCodeDetailsType.html
 *
 */
class VeROReasonCodeDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var VeROSiteDetailType
	 */
	protected $VeROSiteDetail;

	/**
	 * @return VeROSiteDetailType
	 * @param integer $index 
	 */
	function getVeROSiteDetail($index = null)
	{
		if ($index !== null) {
			return $this->VeROSiteDetail[$index];
		} else {
			return $this->VeROSiteDetail;
		}
	}
	/**
	 * @return void
	 * @param VeROSiteDetailType $value 
	 * @param  $index 
	 */
	function setVeROSiteDetail($value, $index = null)
	{
		if ($index !== null) {
			$this->VeROSiteDetail[$index] = $value;
		} else {
			$this->VeROSiteDetail = $value;
		}
	}
	/**
	 * @return void
	 * @param VeROSiteDetailType $value 
	 */
	function addVeROSiteDetail($value)
	{
		$this->VeROSiteDetail[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROReasonCodeDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'VeROSiteDetail' =>
				array(
					'required' => false,
					'type' => 'VeROSiteDetailType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
