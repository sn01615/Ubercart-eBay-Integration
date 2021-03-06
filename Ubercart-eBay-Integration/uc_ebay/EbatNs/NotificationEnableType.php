<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';
require_once 'EnableCodeType.php';

/**
 * Specifies a notification event and whether thenotification is enabled or 
 * disabled. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationEnableType.html
 *
 */
class NotificationEnableType extends EbatNs_ComplexType
{
	/**
	 * @var NotificationEventTypeCodeType
	 */
	protected $EventType;
	/**
	 * @var EnableCodeType
	 */
	protected $EventEnable;

	/**
	 * @return NotificationEventTypeCodeType
	 */
	function getEventType()
	{
		return $this->EventType;
	}
	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value 
	 */
	function setEventType($value)
	{
		$this->EventType = $value;
	}
	/**
	 * @return EnableCodeType
	 */
	function getEventEnable()
	{
		return $this->EventEnable;
	}
	/**
	 * @return void
	 * @param EnableCodeType $value 
	 */
	function setEventEnable($value)
	{
		$this->EventEnable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationEnableType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'EventType' =>
				array(
					'required' => false,
					'type' => 'NotificationEventTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EventEnable' =>
				array(
					'required' => false,
					'type' => 'EnableCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
