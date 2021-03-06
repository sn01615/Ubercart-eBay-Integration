<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AddMemberMessagesAAQToBidderResponseContainerType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the response information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddMemberMessagesAAQToBidderResponseType.html
 *
 */
class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{
	/**
	 * @var AddMemberMessagesAAQToBidderResponseContainerType
	 */
	protected $AddMemberMessagesAAQToBidderResponseContainer;

	/**
	 * @return AddMemberMessagesAAQToBidderResponseContainerType
	 * @param integer $index 
	 */
	function getAddMemberMessagesAAQToBidderResponseContainer($index = null)
	{
		if ($index !== null) {
			return $this->AddMemberMessagesAAQToBidderResponseContainer[$index];
		} else {
			return $this->AddMemberMessagesAAQToBidderResponseContainer;
		}
	}
	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderResponseContainerType $value 
	 * @param  $index 
	 */
	function setAddMemberMessagesAAQToBidderResponseContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->AddMemberMessagesAAQToBidderResponseContainer[$index] = $value;
		} else {
			$this->AddMemberMessagesAAQToBidderResponseContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderResponseContainerType $value 
	 */
	function addAddMemberMessagesAAQToBidderResponseContainer($value)
	{
		$this->AddMemberMessagesAAQToBidderResponseContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddMemberMessagesAAQToBidderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AddMemberMessagesAAQToBidderResponseContainer' =>
				array(
					'required' => false,
					'type' => 'AddMemberMessagesAAQToBidderResponseContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
