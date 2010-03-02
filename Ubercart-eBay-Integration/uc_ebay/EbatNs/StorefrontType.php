<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains information related to the item in the context ofa seller's eBay Store. 
 * Applicable for auction format, Basic Fixed Price,and Store Inventory format 
 * items listed by eBay Stores sellers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StorefrontType.html
 *
 */
class StorefrontType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $StoreCategoryID;
	/**
	 * @var long
	 */
	protected $StoreCategory2ID;
	/**
	 * @var anyURI
	 */
	protected $StoreURL;
	/**
	 * @var string
	 */
	protected $StoreName;

	/**
	 * @return long
	 */
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}
	/**
	 * @return long
	 */
	function getStoreCategory2ID()
	{
		return $this->StoreCategory2ID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setStoreCategory2ID($value)
	{
		$this->StoreCategory2ID = $value;
	}
	/**
	 * @return anyURI
	 */
	function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStoreURL($value)
	{
		$this->StoreURL = $value;
	}
	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StorefrontType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'StoreCategoryID' =>
				array(
					'required' => true,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'StoreCategory2ID' =>
				array(
					'required' => true,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'StoreURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
