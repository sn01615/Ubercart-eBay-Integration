<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'NotificationEnableArrayType.php';
require_once 'ApplicationDeliveryPreferencesType.php';
require_once 'NotificationUserDataType.php';
require_once 'AbstractRequestType.php';
require_once 'NotificationEventPropertyType.php';

/**
 * Manages a user's notification and alerts preferences. This is part of two eBay 
 * services thatupdate users about events on the eBay site: 1. the eBay Platform 
 * Notifications feature, and 2:the eBay Client Alerts API. Notifications and 
 * alerts are used to update production applicationsabout selected events on the 
 * eBay site, helping reduce the number of times your application needsto retrieve 
 * certain information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetNotificationPreferencesRequestType.html
 *
 */
class SetNotificationPreferencesRequestType extends AbstractRequestType
{
	/**
	 * @var ApplicationDeliveryPreferencesType
	 */
	protected $ApplicationDeliveryPreferences;
	/**
	 * @var NotificationEnableArrayType
	 */
	protected $UserDeliveryPreferenceArray;
	/**
	 * @var NotificationUserDataType
	 */
	protected $UserData;
	/**
	 * @var NotificationEventPropertyType
	 */
	protected $EventProperty;
	/**
	 * @var string
	 */
	protected $DeliveryURLName;

	/**
	 * @return ApplicationDeliveryPreferencesType
	 */
	function getApplicationDeliveryPreferences()
	{
		return $this->ApplicationDeliveryPreferences;
	}
	/**
	 * @return void
	 * @param ApplicationDeliveryPreferencesType $value 
	 */
	function setApplicationDeliveryPreferences($value)
	{
		$this->ApplicationDeliveryPreferences = $value;
	}
	/**
	 * @return NotificationEnableArrayType
	 */
	function getUserDeliveryPreferenceArray()
	{
		return $this->UserDeliveryPreferenceArray;
	}
	/**
	 * @return void
	 * @param NotificationEnableArrayType $value 
	 */
	function setUserDeliveryPreferenceArray($value)
	{
		$this->UserDeliveryPreferenceArray = $value;
	}
	/**
	 * @return NotificationUserDataType
	 */
	function getUserData()
	{
		return $this->UserData;
	}
	/**
	 * @return void
	 * @param NotificationUserDataType $value 
	 */
	function setUserData($value)
	{
		$this->UserData = $value;
	}
	/**
	 * @return NotificationEventPropertyType
	 * @param integer $index 
	 */
	function getEventProperty($index = null)
	{
		if ($index !== null) {
			return $this->EventProperty[$index];
		} else {
			return $this->EventProperty;
		}
	}
	/**
	 * @return void
	 * @param NotificationEventPropertyType $value 
	 * @param  $index 
	 */
	function setEventProperty($value, $index = null)
	{
		if ($index !== null) {
			$this->EventProperty[$index] = $value;
		} else {
			$this->EventProperty = $value;
		}
	}
	/**
	 * @return void
	 * @param NotificationEventPropertyType $value 
	 */
	function addEventProperty($value)
	{
		$this->EventProperty[] = $value;
	}
	/**
	 * @return string
	 */
	function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDeliveryURLName($value)
	{
		$this->DeliveryURLName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetNotificationPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ApplicationDeliveryPreferences' =>
				array(
					'required' => false,
					'type' => 'ApplicationDeliveryPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserDeliveryPreferenceArray' =>
				array(
					'required' => false,
					'type' => 'NotificationEnableArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserData' =>
				array(
					'required' => false,
					'type' => 'NotificationUserDataType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EventProperty' =>
				array(
					'required' => false,
					'type' => 'NotificationEventPropertyType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'DeliveryURLName' =>
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
