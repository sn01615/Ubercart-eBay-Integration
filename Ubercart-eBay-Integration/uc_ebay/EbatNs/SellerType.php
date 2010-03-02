<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'SellerPaymentMethodCodeType.php';
require_once 'AddressType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'MerchandizingPrefCodeType.php';
require_once 'CharityAffiliationDetailsType.php';
require_once 'CurrencyCodeType.php';
require_once 'SellerLevelCodeType.php';
require_once 'ProStoresCheckoutPreferenceType.php';
require_once 'ExpressSellerRequirementsType.php';
require_once 'SchedulingInfoType.php';
require_once 'SellerGuaranteeLevelCodeType.php';

/**
 * Information about a user returned in the context of an item's seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerType.html
 *
 */
class SellerType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $PaisaPayStatus;
	/**
	 * @var boolean
	 */
	protected $AllowPaymentEdit;
	/**
	 * @var CurrencyCodeType
	 */
	protected $BillingCurrency;
	/**
	 * @var boolean
	 */
	protected $CheckoutEnabled;
	/**
	 * @var boolean
	 */
	protected $CIPBankAccountStored;
	/**
	 * @var boolean
	 */
	protected $GoodStanding;
	/**
	 * @var boolean
	 */
	protected $LiveAuctionAuthorized;
	/**
	 * @var MerchandizingPrefCodeType
	 */
	protected $MerchandizingPref;
	/**
	 * @var boolean
	 */
	protected $QualifiesForB2BVAT;
	/**
	 * @var SellerGuaranteeLevelCodeType
	 */
	protected $SellerGuaranteeLevel;
	/**
	 * @var SellerLevelCodeType
	 */
	protected $SellerLevel;
	/**
	 * @var AddressType
	 */
	protected $SellerPaymentAddress;
	/**
	 * @var SchedulingInfoType
	 */
	protected $SchedulingInfo;
	/**
	 * @var boolean
	 */
	protected $StoreOwner;
	/**
	 * @var anyURI
	 */
	protected $StoreURL;
	/**
	 * @var SellerBusinessCodeType
	 */
	protected $SellerBusinessType;
	/**
	 * @var boolean
	 */
	protected $RegisteredBusinessSeller;
	/**
	 * @var boolean
	 */
	protected $ExpressEligible;
	/**
	 * @var SellerPaymentMethodCodeType
	 */
	protected $PaymentMethod;
	/**
	 * @var ProStoresCheckoutPreferenceType
	 */
	protected $ProStoresPreference;
	/**
	 * @var boolean
	 */
	protected $ExpressWallet;
	/**
	 * @var ExpressSellerRequirementsType
	 */
	protected $ExpressSellerRequirements;
	/**
	 * @var boolean
	 */
	protected $CharityRegistered;
	/**
	 * @var boolean
	 */
	protected $SafePaymentExempt;
	/**
	 * @var int
	 */
	protected $PaisaPayEscrowEMIStatus;
	/**
	 * @var CharityAffiliationDetailsType
	 */
	protected $CharityAffiliationDetails;
	/**
	 * @var float
	 */
	protected $TransactionPercent;

	/**
	 * @return int
	 */
	function getPaisaPayStatus()
	{
		return $this->PaisaPayStatus;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPaisaPayStatus($value)
	{
		$this->PaisaPayStatus = $value;
	}
	/**
	 * @return boolean
	 */
	function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAllowPaymentEdit($value)
	{
		$this->AllowPaymentEdit = $value;
	}
	/**
	 * @return CurrencyCodeType
	 */
	function getBillingCurrency()
	{
		return $this->BillingCurrency;
	}
	/**
	 * @return void
	 * @param CurrencyCodeType $value 
	 */
	function setBillingCurrency($value)
	{
		$this->BillingCurrency = $value;
	}
	/**
	 * @return boolean
	 */
	function getCheckoutEnabled()
	{
		return $this->CheckoutEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCheckoutEnabled($value)
	{
		$this->CheckoutEnabled = $value;
	}
	/**
	 * @return boolean
	 */
	function getCIPBankAccountStored()
	{
		return $this->CIPBankAccountStored;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCIPBankAccountStored($value)
	{
		$this->CIPBankAccountStored = $value;
	}
	/**
	 * @return boolean
	 */
	function getGoodStanding()
	{
		return $this->GoodStanding;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGoodStanding($value)
	{
		$this->GoodStanding = $value;
	}
	/**
	 * @return boolean
	 */
	function getLiveAuctionAuthorized()
	{
		return $this->LiveAuctionAuthorized;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLiveAuctionAuthorized($value)
	{
		$this->LiveAuctionAuthorized = $value;
	}
	/**
	 * @return MerchandizingPrefCodeType
	 */
	function getMerchandizingPref()
	{
		return $this->MerchandizingPref;
	}
	/**
	 * @return void
	 * @param MerchandizingPrefCodeType $value 
	 */
	function setMerchandizingPref($value)
	{
		$this->MerchandizingPref = $value;
	}
	/**
	 * @return boolean
	 */
	function getQualifiesForB2BVAT()
	{
		return $this->QualifiesForB2BVAT;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setQualifiesForB2BVAT($value)
	{
		$this->QualifiesForB2BVAT = $value;
	}
	/**
	 * @return SellerGuaranteeLevelCodeType
	 */
	function getSellerGuaranteeLevel()
	{
		return $this->SellerGuaranteeLevel;
	}
	/**
	 * @return void
	 * @param SellerGuaranteeLevelCodeType $value 
	 */
	function setSellerGuaranteeLevel($value)
	{
		$this->SellerGuaranteeLevel = $value;
	}
	/**
	 * @return SellerLevelCodeType
	 */
	function getSellerLevel()
	{
		return $this->SellerLevel;
	}
	/**
	 * @return void
	 * @param SellerLevelCodeType $value 
	 */
	function setSellerLevel($value)
	{
		$this->SellerLevel = $value;
	}
	/**
	 * @return AddressType
	 */
	function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setSellerPaymentAddress($value)
	{
		$this->SellerPaymentAddress = $value;
	}
	/**
	 * @return SchedulingInfoType
	 */
	function getSchedulingInfo()
	{
		return $this->SchedulingInfo;
	}
	/**
	 * @return void
	 * @param SchedulingInfoType $value 
	 */
	function setSchedulingInfo($value)
	{
		$this->SchedulingInfo = $value;
	}
	/**
	 * @return boolean
	 */
	function getStoreOwner()
	{
		return $this->StoreOwner;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setStoreOwner($value)
	{
		$this->StoreOwner = $value;
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
	 * @return SellerBusinessCodeType
	 */
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * @return void
	 * @param SellerBusinessCodeType $value 
	 */
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}
	/**
	 * @return boolean
	 */
	function getRegisteredBusinessSeller()
	{
		return $this->RegisteredBusinessSeller;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRegisteredBusinessSeller($value)
	{
		$this->RegisteredBusinessSeller = $value;
	}
	/**
	 * @return boolean
	 */
	function getExpressEligible()
	{
		return $this->ExpressEligible;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExpressEligible($value)
	{
		$this->ExpressEligible = $value;
	}
	/**
	 * @return SellerPaymentMethodCodeType
	 */
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * @return void
	 * @param SellerPaymentMethodCodeType $value 
	 */
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}
	/**
	 * @return ProStoresCheckoutPreferenceType
	 */
	function getProStoresPreference()
	{
		return $this->ProStoresPreference;
	}
	/**
	 * @return void
	 * @param ProStoresCheckoutPreferenceType $value 
	 */
	function setProStoresPreference($value)
	{
		$this->ProStoresPreference = $value;
	}
	/**
	 * @return boolean
	 */
	function getExpressWallet()
	{
		return $this->ExpressWallet;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExpressWallet($value)
	{
		$this->ExpressWallet = $value;
	}
	/**
	 * @return ExpressSellerRequirementsType
	 */
	function getExpressSellerRequirements()
	{
		return $this->ExpressSellerRequirements;
	}
	/**
	 * @return void
	 * @param ExpressSellerRequirementsType $value 
	 */
	function setExpressSellerRequirements($value)
	{
		$this->ExpressSellerRequirements = $value;
	}
	/**
	 * @return boolean
	 */
	function getCharityRegistered()
	{
		return $this->CharityRegistered;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCharityRegistered($value)
	{
		$this->CharityRegistered = $value;
	}
	/**
	 * @return boolean
	 */
	function getSafePaymentExempt()
	{
		return $this->SafePaymentExempt;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSafePaymentExempt($value)
	{
		$this->SafePaymentExempt = $value;
	}
	/**
	 * @return int
	 */
	function getPaisaPayEscrowEMIStatus()
	{
		return $this->PaisaPayEscrowEMIStatus;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPaisaPayEscrowEMIStatus($value)
	{
		$this->PaisaPayEscrowEMIStatus = $value;
	}
	/**
	 * @return CharityAffiliationDetailsType
	 */
	function getCharityAffiliationDetails()
	{
		return $this->CharityAffiliationDetails;
	}
	/**
	 * @return void
	 * @param CharityAffiliationDetailsType $value 
	 */
	function setCharityAffiliationDetails($value)
	{
		$this->CharityAffiliationDetails = $value;
	}
	/**
	 * @return float
	 */
	function getTransactionPercent()
	{
		return $this->TransactionPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setTransactionPercent($value)
	{
		$this->TransactionPercent = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PaisaPayStatus' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AllowPaymentEdit' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'BillingCurrency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutEnabled' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'CIPBankAccountStored' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'GoodStanding' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'LiveAuctionAuthorized' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MerchandizingPref' =>
				array(
					'required' => false,
					'type' => 'MerchandizingPrefCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QualifiesForB2BVAT' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'SellerGuaranteeLevel' =>
				array(
					'required' => false,
					'type' => 'SellerGuaranteeLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerLevel' =>
				array(
					'required' => false,
					'type' => 'SellerLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SchedulingInfo' =>
				array(
					'required' => false,
					'type' => 'SchedulingInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreOwner' =>
				array(
					'required' => true,
					'type' => 'boolean',
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
				'SellerBusinessType' =>
				array(
					'required' => false,
					'type' => 'SellerBusinessCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegisteredBusinessSeller' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethod' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProStoresPreference' =>
				array(
					'required' => false,
					'type' => 'ProStoresCheckoutPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressWallet' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressSellerRequirements' =>
				array(
					'required' => false,
					'type' => 'ExpressSellerRequirementsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityRegistered' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SafePaymentExempt' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaisaPayEscrowEMIStatus' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityAffiliationDetails' =>
				array(
					'required' => false,
					'type' => 'CharityAffiliationDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>