<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'RemindersType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns totals of various reminder types from the user's My eBay account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMyeBayRemindersResponseType.html
 *
 */
class GetMyeBayRemindersResponseType extends AbstractResponseType
{
	/**
	 * @var RemindersType
	 */
	protected $BuyingReminders;
	/**
	 * @var RemindersType
	 */
	protected $SellingReminders;

	/**
	 * @return RemindersType
	 */
	function getBuyingReminders()
	{
		return $this->BuyingReminders;
	}
	/**
	 * @return void
	 * @param RemindersType $value 
	 */
	function setBuyingReminders($value)
	{
		$this->BuyingReminders = $value;
	}
	/**
	 * @return RemindersType
	 */
	function getSellingReminders()
	{
		return $this->SellingReminders;
	}
	/**
	 * @return void
	 * @param RemindersType $value 
	 */
	function setSellingReminders($value)
	{
		$this->SellingReminders = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMyeBayRemindersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BuyingReminders' =>
				array(
					'required' => false,
					'type' => 'RemindersType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingReminders' =>
				array(
					'required' => false,
					'type' => 'RemindersType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
