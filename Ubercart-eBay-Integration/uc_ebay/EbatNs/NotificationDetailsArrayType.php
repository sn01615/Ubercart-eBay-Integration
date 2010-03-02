<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationDetailsType.php';

/**
 * Returns information about notifications sent to the given applicationfor the 
 * given ItemID. It will only be returned if ItemID was specified in theinput 
 * parameters. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationDetailsArrayType.html
 *
 */
class NotificationDetailsArrayType extends EbatNs_ComplexType
{
	/**
	 * @var NotificationDetailsType
	 */
	protected $NotificationDetails;

	/**
	 * @return NotificationDetailsType
	 * @param integer $index 
	 */
	function getNotificationDetails($index = null)
	{
		if ($index !== null) {
			return $this->NotificationDetails[$index];
		} else {
			return $this->NotificationDetails;
		}
	}
	/**
	 * @return void
	 * @param NotificationDetailsType $value 
	 * @param  $index 
	 */
	function setNotificationDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->NotificationDetails[$index] = $value;
		} else {
			$this->NotificationDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param NotificationDetailsType $value 
	 */
	function addNotificationDetails($value)
	{
		$this->NotificationDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationDetailsArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'NotificationDetails' =>
				array(
					'required' => false,
					'type' => 'NotificationDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
