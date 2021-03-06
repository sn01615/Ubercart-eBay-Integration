<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container for items bid. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaximumItemRequirementsType.html
 *
 */
class MaximumItemRequirementsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaximumItemCount;
	/**
	 * @var int
	 */
	protected $MinimumFeedbackScore;

	/**
	 * @return int
	 */
	function getMaximumItemCount()
	{
		return $this->MaximumItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaximumItemCount($value)
	{
		$this->MaximumItemCount = $value;
	}
	/**
	 * @return int
	 */
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaximumItemRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MaximumItemCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
