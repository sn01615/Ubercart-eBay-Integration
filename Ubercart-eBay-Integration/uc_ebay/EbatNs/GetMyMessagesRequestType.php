<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'MyMessagesAlertIDArrayType.php';
require_once 'MyMessagesMessageIDArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Used to retrieve information about the messages and alerts sentto a given user. 
 * Depending on the detail level, this informationcan include message and alert 
 * counts, resolution and flaggedstatus, message and/or alert headers, and message 
 * and/or alertbody text.<br /><br />Note that this call requires a DetailLevel in 
 * therequest. Omitting the Detail Level returns an error.<br /><br />ItemID is not 
 * returned with this call. Use GetMemberMessages instead. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMyMessagesRequestType.html
 *
 */
class GetMyMessagesRequestType extends AbstractRequestType
{
	/**
	 * @var MyMessagesAlertIDArrayType
	 */
	protected $AlertIDs;
	/**
	 * @var MyMessagesMessageIDArrayType
	 */
	protected $MessageIDs;
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var dateTime
	 */
	protected $StartTime;
	/**
	 * @var dateTime
	 */
	protected $EndTime;

	/**
	 * @return MyMessagesAlertIDArrayType
	 */
	function getAlertIDs()
	{
		return $this->AlertIDs;
	}
	/**
	 * @return void
	 * @param MyMessagesAlertIDArrayType $value 
	 */
	function setAlertIDs($value)
	{
		$this->AlertIDs = $value;
	}
	/**
	 * @return MyMessagesMessageIDArrayType
	 */
	function getMessageIDs()
	{
		return $this->MessageIDs;
	}
	/**
	 * @return void
	 * @param MyMessagesMessageIDArrayType $value 
	 */
	function setMessageIDs($value)
	{
		$this->MessageIDs = $value;
	}
	/**
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMyMessagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AlertIDs' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageIDs' =>
				array(
					'required' => false,
					'type' => 'MyMessagesMessageIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTime' =>
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
