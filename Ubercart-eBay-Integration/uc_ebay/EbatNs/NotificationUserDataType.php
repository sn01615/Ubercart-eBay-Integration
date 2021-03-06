<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'SummaryEventScheduleType.php';
require_once 'SMSSubscriptionType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * User data related to notifications. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationUserDataType.html
 *
 */
class NotificationUserDataType extends EbatNs_ComplexType
{
	/**
	 * @var SMSSubscriptionType
	 */
	protected $SMSSubscription;
	/**
	 * @var SummaryEventScheduleType
	 */
	protected $SummarySchedule;

	/**
	 * @return SMSSubscriptionType
	 */
	function getSMSSubscription()
	{
		return $this->SMSSubscription;
	}
	/**
	 * @return void
	 * @param SMSSubscriptionType $value 
	 */
	function setSMSSubscription($value)
	{
		$this->SMSSubscription = $value;
	}
	/**
	 * @return SummaryEventScheduleType
	 * @param integer $index 
	 */
	function getSummarySchedule($index = null)
	{
		if ($index !== null) {
			return $this->SummarySchedule[$index];
		} else {
			return $this->SummarySchedule;
		}
	}
	/**
	 * @return void
	 * @param SummaryEventScheduleType $value 
	 * @param  $index 
	 */
	function setSummarySchedule($value, $index = null)
	{
		if ($index !== null) {
			$this->SummarySchedule[$index] = $value;
		} else {
			$this->SummarySchedule = $value;
		}
	}
	/**
	 * @return void
	 * @param SummaryEventScheduleType $value 
	 */
	function addSummarySchedule($value)
	{
		$this->SummarySchedule[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationUserDataType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SMSSubscription' =>
				array(
					'required' => false,
					'type' => 'SMSSubscriptionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SummarySchedule' =>
				array(
					'required' => false,
					'type' => 'SummaryEventScheduleType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
