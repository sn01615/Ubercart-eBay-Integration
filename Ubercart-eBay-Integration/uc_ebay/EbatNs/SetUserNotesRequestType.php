<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'SetUserNotesActionCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables users to add, replace, and delete My eBay notes foritems that are being 
 * tracked in the My eBay All Selling andAll Buying areas. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetUserNotesRequestType.html
 *
 */
class SetUserNotesRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var SetUserNotesActionCodeType
	 */
	protected $Action;
	/**
	 * @var string
	 */
	protected $NoteText;
	/**
	 * @var string
	 */
	protected $TransactionID;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return SetUserNotesActionCodeType
	 */
	function getAction()
	{
		return $this->Action;
	}
	/**
	 * @return void
	 * @param SetUserNotesActionCodeType $value 
	 */
	function setAction($value)
	{
		$this->Action = $value;
	}
	/**
	 * @return string
	 */
	function getNoteText()
	{
		return $this->NoteText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNoteText($value)
	{
		$this->NoteText = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetUserNotesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'SetUserNotesActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoteText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
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