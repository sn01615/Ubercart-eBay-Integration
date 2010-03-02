<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'WishListEntryType.php';

/**
 * This type contains the data for one eBay Express wish list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/WishListType.html
 *
 */
class WishListType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $WishListID;
	/**
	 * @var anyURI
	 */
	protected $WishListURL;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var string
	 */
	protected $FirstName;
	/**
	 * @var string
	 */
	protected $LastName;
	/**
	 * @var string
	 */
	protected $UserLocation;
	/**
	 * @var WishListEntryType
	 */
	protected $WishListEntry;

	/**
	 * @return string
	 */
	function getWishListID()
	{
		return $this->WishListID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setWishListID($value)
	{
		$this->WishListID = $value;
	}
	/**
	 * @return anyURI
	 */
	function getWishListURL()
	{
		return $this->WishListURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setWishListURL($value)
	{
		$this->WishListURL = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return string
	 */
	function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFirstName($value)
	{
		$this->FirstName = $value;
	}
	/**
	 * @return string
	 */
	function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLastName($value)
	{
		$this->LastName = $value;
	}
	/**
	 * @return string
	 */
	function getUserLocation()
	{
		return $this->UserLocation;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserLocation($value)
	{
		$this->UserLocation = $value;
	}
	/**
	 * @return WishListEntryType
	 * @param integer $index 
	 */
	function getWishListEntry($index = null)
	{
		if ($index !== null) {
			return $this->WishListEntry[$index];
		} else {
			return $this->WishListEntry;
		}
	}
	/**
	 * @return void
	 * @param WishListEntryType $value 
	 * @param  $index 
	 */
	function setWishListEntry($value, $index = null)
	{
		if ($index !== null) {
			$this->WishListEntry[$index] = $value;
		} else {
			$this->WishListEntry = $value;
		}
	}
	/**
	 * @return void
	 * @param WishListEntryType $value 
	 */
	function addWishListEntry($value)
	{
		$this->WishListEntry[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('WishListType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'WishListID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WishListURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FirstName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserLocation' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WishListEntry' =>
				array(
					'required' => false,
					'type' => 'WishListEntryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>