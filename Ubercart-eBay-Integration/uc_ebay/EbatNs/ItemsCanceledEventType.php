<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'AbstractResponseType.php';
require_once 'ItemIDArrayType.php';

/**
 * Return the canceled items along with the seller info 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemsCanceledEventType.html
 *
 */
class ItemsCanceledEventType extends AbstractResponseType
{
	/**
	 * @var ItemIDArrayType
	 */
	protected $CanceledItemIDArray;
	/**
	 * @var boolean
	 */
	protected $EligibleForRelist;
	/**
	 * @var UserIDType
	 */
	protected $SellerID;

	/**
	 * @return ItemIDArrayType
	 */
	function getCanceledItemIDArray()
	{
		return $this->CanceledItemIDArray;
	}
	/**
	 * @return void
	 * @param ItemIDArrayType $value 
	 */
	function setCanceledItemIDArray($value)
	{
		$this->CanceledItemIDArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getEligibleForRelist()
	{
		return $this->EligibleForRelist;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEligibleForRelist($value)
	{
		$this->EligibleForRelist = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemsCanceledEventType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CanceledItemIDArray' =>
				array(
					'required' => false,
					'type' => 'ItemIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleForRelist' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
