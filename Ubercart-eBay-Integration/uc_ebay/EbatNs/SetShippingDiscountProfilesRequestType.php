<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'CalculatedHandlingDiscountType.php';
require_once 'ModifyActionCodeType.php';
require_once 'CalculatedShippingDiscountType.php';
require_once 'ShippingInsuranceType.php';
require_once 'CurrencyCodeType.php';
require_once 'FlatShippingDiscountType.php';
require_once 'PromotionalShippingDiscountDetailsType.php';
require_once 'AbstractRequestType.php';
require_once 'CombinedPaymentPeriodCodeType.php';

/**
 * Enables a seller to define shipping cost discount profiles and a few 
 * additionalparameters related to combined payment, such as shipping insurance and 
 * packaging handling costs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetShippingDiscountProfilesRequestType.html
 *
 */
class SetShippingDiscountProfilesRequestType extends AbstractRequestType
{
	/**
	 * @var CurrencyCodeType
	 */
	protected $CurrencyID;
	/**
	 * @var CombinedPaymentPeriodCodeType
	 */
	protected $CombinedDuration;
	/**
	 * @var ModifyActionCodeType
	 */
	protected $ModifyActionCode;
	/**
	 * @var FlatShippingDiscountType
	 */
	protected $FlatShippingDiscount;
	/**
	 * @var CalculatedShippingDiscountType
	 */
	protected $CalculatedShippingDiscount;
	/**
	 * @var CalculatedHandlingDiscountType
	 */
	protected $CalculatedHandlingDiscount;
	/**
	 * @var PromotionalShippingDiscountDetailsType
	 */
	protected $PromotionalShippingDiscountDetails;
	/**
	 * @var ShippingInsuranceType
	 */
	protected $ShippingInsurance;
	/**
	 * @var ShippingInsuranceType
	 */
	protected $InternationalShippingInsurance;

	/**
	 * @return CurrencyCodeType
	 */
	function getCurrencyID()
	{
		return $this->CurrencyID;
	}
	/**
	 * @return void
	 * @param CurrencyCodeType $value 
	 */
	function setCurrencyID($value)
	{
		$this->CurrencyID = $value;
	}
	/**
	 * @return CombinedPaymentPeriodCodeType
	 */
	function getCombinedDuration()
	{
		return $this->CombinedDuration;
	}
	/**
	 * @return void
	 * @param CombinedPaymentPeriodCodeType $value 
	 */
	function setCombinedDuration($value)
	{
		$this->CombinedDuration = $value;
	}
	/**
	 * @return ModifyActionCodeType
	 */
	function getModifyActionCode()
	{
		return $this->ModifyActionCode;
	}
	/**
	 * @return void
	 * @param ModifyActionCodeType $value 
	 */
	function setModifyActionCode($value)
	{
		$this->ModifyActionCode = $value;
	}
	/**
	 * @return FlatShippingDiscountType
	 */
	function getFlatShippingDiscount()
	{
		return $this->FlatShippingDiscount;
	}
	/**
	 * @return void
	 * @param FlatShippingDiscountType $value 
	 */
	function setFlatShippingDiscount($value)
	{
		$this->FlatShippingDiscount = $value;
	}
	/**
	 * @return CalculatedShippingDiscountType
	 */
	function getCalculatedShippingDiscount()
	{
		return $this->CalculatedShippingDiscount;
	}
	/**
	 * @return void
	 * @param CalculatedShippingDiscountType $value 
	 */
	function setCalculatedShippingDiscount($value)
	{
		$this->CalculatedShippingDiscount = $value;
	}
	/**
	 * @return CalculatedHandlingDiscountType
	 */
	function getCalculatedHandlingDiscount()
	{
		return $this->CalculatedHandlingDiscount;
	}
	/**
	 * @return void
	 * @param CalculatedHandlingDiscountType $value 
	 */
	function setCalculatedHandlingDiscount($value)
	{
		$this->CalculatedHandlingDiscount = $value;
	}
	/**
	 * @return PromotionalShippingDiscountDetailsType
	 */
	function getPromotionalShippingDiscountDetails()
	{
		return $this->PromotionalShippingDiscountDetails;
	}
	/**
	 * @return void
	 * @param PromotionalShippingDiscountDetailsType $value 
	 */
	function setPromotionalShippingDiscountDetails($value)
	{
		$this->PromotionalShippingDiscountDetails = $value;
	}
	/**
	 * @return ShippingInsuranceType
	 */
	function getShippingInsurance()
	{
		return $this->ShippingInsurance;
	}
	/**
	 * @return void
	 * @param ShippingInsuranceType $value 
	 */
	function setShippingInsurance($value)
	{
		$this->ShippingInsurance = $value;
	}
	/**
	 * @return ShippingInsuranceType
	 */
	function getInternationalShippingInsurance()
	{
		return $this->InternationalShippingInsurance;
	}
	/**
	 * @return void
	 * @param ShippingInsuranceType $value 
	 */
	function setInternationalShippingInsurance($value)
	{
		$this->InternationalShippingInsurance = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetShippingDiscountProfilesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CurrencyID' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedDuration' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentPeriodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModifyActionCode' =>
				array(
					'required' => false,
					'type' => 'ModifyActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'FlatShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedHandlingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedHandlingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalShippingDiscountDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionalShippingDiscountDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingInsurance' =>
				array(
					'required' => false,
					'type' => 'ShippingInsuranceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalShippingInsurance' =>
				array(
					'required' => false,
					'type' => 'ShippingInsuranceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
