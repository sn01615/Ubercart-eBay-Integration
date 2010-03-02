<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'BidderNoticePreferencesType.php';
require_once 'SellerFavoriteItemPreferencesType.php';
require_once 'ExpressPreferencesType.php';
require_once 'CrossPromotionPreferencesType.php';
require_once 'SellerPaymentPreferencesType.php';
require_once 'CombinedPaymentPreferencesType.php';
require_once 'EndOfAuctionEmailPreferencesType.php';
require_once 'AbstractRequestType.php';

/**
 * Sets the user's preferences to those specified in the request. Asa general rule, 
 * once you set a preference, GetUserPreferencesand the user's preferences 
 * displayed on the eBay Web site shouldreflect the new setting immediately. 
 * However, it could take up to7 days for the change to have any logical or 
 * functional effect.For example, if you change your combined payment preferences, 
 * itcould take up to 7 days for eBay to apply the updated combinedpayment settings 
 * to your listings. Also, once you set apreference, you cannot change its setting 
 * again within 7 days. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetUserPreferencesRequestType.html
 *
 */
class SetUserPreferencesRequestType extends AbstractRequestType
{
	/**
	 * @var BidderNoticePreferencesType
	 */
	protected $BidderNoticePreferences;
	/**
	 * @var CombinedPaymentPreferencesType
	 */
	protected $CombinedPaymentPreferences;
	/**
	 * @var CrossPromotionPreferencesType
	 */
	protected $CrossPromotionPreferences;
	/**
	 * @var SellerPaymentPreferencesType
	 */
	protected $SellerPaymentPreferences;
	/**
	 * @var SellerFavoriteItemPreferencesType
	 */
	protected $SellerFavoriteItemPreferences;
	/**
	 * @var EndOfAuctionEmailPreferencesType
	 */
	protected $EndOfAuctionEmailPreferences;
	/**
	 * @var ExpressPreferencesType
	 */
	protected $ExpressPreferences;
	/**
	 * @var boolean
	 */
	protected $EmailShipmentTrackingNumberPreference;

	/**
	 * @return BidderNoticePreferencesType
	 */
	function getBidderNoticePreferences()
	{
		return $this->BidderNoticePreferences;
	}
	/**
	 * @return void
	 * @param BidderNoticePreferencesType $value 
	 */
	function setBidderNoticePreferences($value)
	{
		$this->BidderNoticePreferences = $value;
	}
	/**
	 * @return CombinedPaymentPreferencesType
	 */
	function getCombinedPaymentPreferences()
	{
		return $this->CombinedPaymentPreferences;
	}
	/**
	 * @return void
	 * @param CombinedPaymentPreferencesType $value 
	 */
	function setCombinedPaymentPreferences($value)
	{
		$this->CombinedPaymentPreferences = $value;
	}
	/**
	 * @return CrossPromotionPreferencesType
	 */
	function getCrossPromotionPreferences()
	{
		return $this->CrossPromotionPreferences;
	}
	/**
	 * @return void
	 * @param CrossPromotionPreferencesType $value 
	 */
	function setCrossPromotionPreferences($value)
	{
		$this->CrossPromotionPreferences = $value;
	}
	/**
	 * @return SellerPaymentPreferencesType
	 */
	function getSellerPaymentPreferences()
	{
		return $this->SellerPaymentPreferences;
	}
	/**
	 * @return void
	 * @param SellerPaymentPreferencesType $value 
	 */
	function setSellerPaymentPreferences($value)
	{
		$this->SellerPaymentPreferences = $value;
	}
	/**
	 * @return SellerFavoriteItemPreferencesType
	 */
	function getSellerFavoriteItemPreferences()
	{
		return $this->SellerFavoriteItemPreferences;
	}
	/**
	 * @return void
	 * @param SellerFavoriteItemPreferencesType $value 
	 */
	function setSellerFavoriteItemPreferences($value)
	{
		$this->SellerFavoriteItemPreferences = $value;
	}
	/**
	 * @return EndOfAuctionEmailPreferencesType
	 */
	function getEndOfAuctionEmailPreferences()
	{
		return $this->EndOfAuctionEmailPreferences;
	}
	/**
	 * @return void
	 * @param EndOfAuctionEmailPreferencesType $value 
	 */
	function setEndOfAuctionEmailPreferences($value)
	{
		$this->EndOfAuctionEmailPreferences = $value;
	}
	/**
	 * @return ExpressPreferencesType
	 */
	function getExpressPreferences()
	{
		return $this->ExpressPreferences;
	}
	/**
	 * @return void
	 * @param ExpressPreferencesType $value 
	 */
	function setExpressPreferences($value)
	{
		$this->ExpressPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getEmailShipmentTrackingNumberPreference()
	{
		return $this->EmailShipmentTrackingNumberPreference;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEmailShipmentTrackingNumberPreference($value)
	{
		$this->EmailShipmentTrackingNumberPreference = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetUserPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidderNoticePreferences' =>
				array(
					'required' => false,
					'type' => 'BidderNoticePreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedPaymentPreferences' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossPromotionPreferences' =>
				array(
					'required' => false,
					'type' => 'CrossPromotionPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentPreferences' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerFavoriteItemPreferences' =>
				array(
					'required' => false,
					'type' => 'SellerFavoriteItemPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndOfAuctionEmailPreferences' =>
				array(
					'required' => false,
					'type' => 'EndOfAuctionEmailPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressPreferences' =>
				array(
					'required' => false,
					'type' => 'ExpressPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EmailShipmentTrackingNumberPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
