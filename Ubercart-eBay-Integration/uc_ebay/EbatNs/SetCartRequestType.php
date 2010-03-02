<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'CartItemArrayType.php';
require_once 'AddressType.php';
require_once 'CheckoutCompleteRedirectType.php';
require_once 'AbstractRequestType.php';
require_once 'AffiliateTrackingDetailsType.php';

/**
 * Enables a third party developer to create a new shopping cart in the eBay 
 * Expressdomain or to modify the contents of an existing shopping cart by adding 
 * orremoving items or changing item quantity. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetCartRequestType.html
 *
 */
class SetCartRequestType extends AbstractRequestType
{
	/**
	 * @var AffiliateTrackingDetailsType
	 */
	protected $AffiliateTrackingDetails;
	/**
	 * @var long
	 */
	protected $CartID;
	/**
	 * @var AddressType
	 */
	protected $ShippingAddress;
	/**
	 * @var CheckoutCompleteRedirectType
	 */
	protected $CheckoutCompleteRedirect;
	/**
	 * @var CartItemArrayType
	 */
	protected $CartItemArray;

	/**
	 * @return AffiliateTrackingDetailsType
	 */
	function getAffiliateTrackingDetails()
	{
		return $this->AffiliateTrackingDetails;
	}
	/**
	 * @return void
	 * @param AffiliateTrackingDetailsType $value 
	 */
	function setAffiliateTrackingDetails($value)
	{
		$this->AffiliateTrackingDetails = $value;
	}
	/**
	 * @return long
	 */
	function getCartID()
	{
		return $this->CartID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setCartID($value)
	{
		$this->CartID = $value;
	}
	/**
	 * @return AddressType
	 */
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
	}
	/**
	 * @return CheckoutCompleteRedirectType
	 */
	function getCheckoutCompleteRedirect()
	{
		return $this->CheckoutCompleteRedirect;
	}
	/**
	 * @return void
	 * @param CheckoutCompleteRedirectType $value 
	 */
	function setCheckoutCompleteRedirect($value)
	{
		$this->CheckoutCompleteRedirect = $value;
	}
	/**
	 * @return CartItemArrayType
	 */
	function getCartItemArray()
	{
		return $this->CartItemArray;
	}
	/**
	 * @return void
	 * @param CartItemArrayType $value 
	 */
	function setCartItemArray($value)
	{
		$this->CartItemArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetCartRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AffiliateTrackingDetails' =>
				array(
					'required' => false,
					'type' => 'AffiliateTrackingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CartID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutCompleteRedirect' =>
				array(
					'required' => false,
					'type' => 'CheckoutCompleteRedirectType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CartItemArray' =>
				array(
					'required' => false,
					'type' => 'CartItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>