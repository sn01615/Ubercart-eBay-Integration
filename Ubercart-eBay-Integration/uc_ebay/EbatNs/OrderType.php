<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AddressType.php';
require_once 'CheckoutStatusType.php';
require_once 'TradingRoleCodeType.php';
require_once 'OrderStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'OrderIDType.php';
require_once 'AmountType.php';
require_once 'TransactionArrayType.php';
require_once 'ExternalTransactionType.php';
require_once 'ShippingDetailsType.php';
require_once 'UserIDType.php';

/**
 * A combination of two or more transactions that can be paid for with asingle 
 * payment.<br><br>We strongly recommend that you avoid mixing digital and 
 * non-digital listings inthe same order. (In the future, AddOrder may enforce this 
 * recommendation. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderType.html
 *
 */
class OrderType extends EbatNs_ComplexType
{
	/**
	 * @var OrderIDType
	 */
	protected $OrderID;
	/**
	 * @var OrderStatusCodeType
	 */
	protected $OrderStatus;
	/**
	 * @var AmountType
	 */
	protected $AdjustmentAmount;
	/**
	 * @var AmountType
	 */
	protected $AmountPaid;
	/**
	 * @var AmountType
	 */
	protected $AmountSaved;
	/**
	 * @var CheckoutStatusType
	 */
	protected $CheckoutStatus;
	/**
	 * @var ShippingDetailsType
	 */
	protected $ShippingDetails;
	/**
	 * @var TradingRoleCodeType
	 */
	protected $CreatingUserRole;
	/**
	 * @var dateTime
	 */
	protected $CreatedTime;
	/**
	 * @var BuyerPaymentMethodCodeType
	 */
	protected $PaymentMethods;
	/**
	 * @var string
	 */
	protected $SellerEmail;
	/**
	 * @var AddressType
	 */
	protected $ShippingAddress;
	/**
	 * @var ShippingServiceOptionsType
	 */
	protected $ShippingServiceSelected;
	/**
	 * @var AmountType
	 */
	protected $Subtotal;
	/**
	 * @var AmountType
	 */
	protected $Total;
	/**
	 * @var ExternalTransactionType
	 */
	protected $ExternalTransaction;
	/**
	 * @var boolean
	 */
	protected $DigitalDelivery;
	/**
	 * @var TransactionArrayType
	 */
	protected $TransactionArray;
	/**
	 * @var UserIDType
	 */
	protected $BuyerUserID;
	/**
	 * @var dateTime
	 */
	protected $PaidTime;
	/**
	 * @var dateTime
	 */
	protected $ShippedTime;

	/**
	 * @return OrderIDType
	 */
	function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * @return void
	 * @param OrderIDType $value 
	 */
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}
	/**
	 * @return OrderStatusCodeType
	 */
	function getOrderStatus()
	{
		return $this->OrderStatus;
	}
	/**
	 * @return void
	 * @param OrderStatusCodeType $value 
	 */
	function setOrderStatus($value)
	{
		$this->OrderStatus = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAdjustmentAmount($value)
	{
		$this->AdjustmentAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmountPaid($value)
	{
		$this->AmountPaid = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAmountSaved()
	{
		return $this->AmountSaved;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmountSaved($value)
	{
		$this->AmountSaved = $value;
	}
	/**
	 * @return CheckoutStatusType
	 */
	function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * @return void
	 * @param CheckoutStatusType $value 
	 */
	function setCheckoutStatus($value)
	{
		$this->CheckoutStatus = $value;
	}
	/**
	 * @return ShippingDetailsType
	 */
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * @return void
	 * @param ShippingDetailsType $value 
	 */
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}
	/**
	 * @return TradingRoleCodeType
	 */
	function getCreatingUserRole()
	{
		return $this->CreatingUserRole;
	}
	/**
	 * @return void
	 * @param TradingRoleCodeType $value 
	 */
	function setCreatingUserRole($value)
	{
		$this->CreatingUserRole = $value;
	}
	/**
	 * @return dateTime
	 */
	function getCreatedTime()
	{
		return $this->CreatedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setCreatedTime($value)
	{
		$this->CreatedTime = $value;
	}
	/**
	 * @return BuyerPaymentMethodCodeType
	 * @param integer $index 
	 */
	function getPaymentMethods($index = null)
	{
		if ($index !== null) {
			return $this->PaymentMethods[$index];
		} else {
			return $this->PaymentMethods;
		}
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 * @param  $index 
	 */
	function setPaymentMethods($value, $index = null)
	{
		if ($index !== null) {
			$this->PaymentMethods[$index] = $value;
		} else {
			$this->PaymentMethods = $value;
		}
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 */
	function addPaymentMethods($value)
	{
		$this->PaymentMethods[] = $value;
	}
	/**
	 * @return string
	 */
	function getSellerEmail()
	{
		return $this->SellerEmail;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerEmail($value)
	{
		$this->SellerEmail = $value;
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
	 * @return ShippingServiceOptionsType
	 */
	function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}
	/**
	 * @return void
	 * @param ShippingServiceOptionsType $value 
	 */
	function setShippingServiceSelected($value)
	{
		$this->ShippingServiceSelected = $value;
	}
	/**
	 * @return AmountType
	 */
	function getSubtotal()
	{
		return $this->Subtotal;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setSubtotal($value)
	{
		$this->Subtotal = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotal()
	{
		return $this->Total;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotal($value)
	{
		$this->Total = $value;
	}
	/**
	 * @return ExternalTransactionType
	 * @param integer $index 
	 */
	function getExternalTransaction($index = null)
	{
		if ($index !== null) {
			return $this->ExternalTransaction[$index];
		} else {
			return $this->ExternalTransaction;
		}
	}
	/**
	 * @return void
	 * @param ExternalTransactionType $value 
	 * @param  $index 
	 */
	function setExternalTransaction($value, $index = null)
	{
		if ($index !== null) {
			$this->ExternalTransaction[$index] = $value;
		} else {
			$this->ExternalTransaction = $value;
		}
	}
	/**
	 * @return void
	 * @param ExternalTransactionType $value 
	 */
	function addExternalTransaction($value)
	{
		$this->ExternalTransaction[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getDigitalDelivery()
	{
		return $this->DigitalDelivery;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDigitalDelivery($value)
	{
		$this->DigitalDelivery = $value;
	}
	/**
	 * @return TransactionArrayType
	 */
	function getTransactionArray()
	{
		return $this->TransactionArray;
	}
	/**
	 * @return void
	 * @param TransactionArrayType $value 
	 */
	function setTransactionArray($value)
	{
		$this->TransactionArray = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getBuyerUserID()
	{
		return $this->BuyerUserID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setBuyerUserID($value)
	{
		$this->BuyerUserID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getPaidTime()
	{
		return $this->PaidTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setPaidTime($value)
	{
		$this->PaidTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setShippedTime($value)
	{
		$this->ShippedTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'OrderID' =>
				array(
					'required' => false,
					'type' => 'OrderIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderStatus' =>
				array(
					'required' => false,
					'type' => 'OrderStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AmountSaved' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutStatus' =>
				array(
					'required' => false,
					'type' => 'CheckoutStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatingUserRole' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethods' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellerEmail' =>
				array(
					'required' => false,
					'type' => 'string',
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
				'ShippingServiceSelected' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceOptionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Subtotal' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Total' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransaction' =>
				array(
					'required' => false,
					'type' => 'ExternalTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'DigitalDelivery' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionArray' =>
				array(
					'required' => false,
					'type' => 'TransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaidTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
