<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'BestOfferArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'ItemType.php';

/**
 * All best offers for the item according to the filter or best offerid (or both) 
 * used in the input.For the notification client usage, this response includes 
 * asingle Best Offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetBestOffersResponseType.html
 *
 */
class GetBestOffersResponseType extends AbstractResponseType
{
	/**
	 * @var BestOfferArrayType
	 */
	protected $BestOfferArray;
	/**
	 * @var ItemType
	 */
	protected $Item;

	/**
	 * @return BestOfferArrayType
	 */
	function getBestOfferArray()
	{
		return $this->BestOfferArray;
	}
	/**
	 * @return void
	 * @param BestOfferArrayType $value 
	 */
	function setBestOfferArray($value)
	{
		$this->BestOfferArray = $value;
	}
	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetBestOffersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BestOfferArray' =>
				array(
					'required' => false,
					'type' => 'BestOfferArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
