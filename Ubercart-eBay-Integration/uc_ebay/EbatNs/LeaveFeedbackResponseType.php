<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * LeaveFeedback response message includes an acknowledgement if the feedback was 
 * successfully left. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LeaveFeedbackResponseType.html
 *
 */
class LeaveFeedbackResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $FeedbackID;

	/**
	 * @return string
	 */
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LeaveFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'FeedbackID' =>
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
