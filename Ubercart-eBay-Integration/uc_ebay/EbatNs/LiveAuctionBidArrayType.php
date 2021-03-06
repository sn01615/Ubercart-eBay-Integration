<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'LiveAuctionBidType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Container for a list of Live Auction Bidders, such as returned 
 * byGetLiveAuctionBidders. Will contain zero, one, or multipleLiveAuctionBidType 
 * bidders, each of which represents one bidder's request listingthat was found by 
 * the search. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LiveAuctionBidArrayType.html
 *
 */
class LiveAuctionBidArrayType extends EbatNs_ComplexType
{
	/**
	 * @var LiveAuctionBidType
	 */
	protected $LiveAuctionBid;

	/**
	 * @return LiveAuctionBidType
	 * @param integer $index 
	 */
	function getLiveAuctionBid($index = null)
	{
		if ($index !== null) {
			return $this->LiveAuctionBid[$index];
		} else {
			return $this->LiveAuctionBid;
		}
	}
	/**
	 * @return void
	 * @param LiveAuctionBidType $value 
	 * @param  $index 
	 */
	function setLiveAuctionBid($value, $index = null)
	{
		if ($index !== null) {
			$this->LiveAuctionBid[$index] = $value;
		} else {
			$this->LiveAuctionBid = $value;
		}
	}
	/**
	 * @return void
	 * @param LiveAuctionBidType $value 
	 */
	function addLiveAuctionBid($value)
	{
		$this->LiveAuctionBid[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LiveAuctionBidArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'LiveAuctionBid' =>
				array(
					'required' => false,
					'type' => 'LiveAuctionBidType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
