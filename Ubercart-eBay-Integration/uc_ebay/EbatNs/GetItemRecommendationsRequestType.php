<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'GetRecommendationsRequestContainerType.php';
require_once 'AbstractRequestType.php';

/**
 * Examines potential item data that a sellerhas specified and returns recommended 
 * changes or opportunities forimprovement. The types of recommendations returned 
 * for a givenitem can be configured by choosing one or more recommendationengines 
 * in the request. This call supports batch requests. Thatis, you can retrieve 
 * recommendations for multiple items at once. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemRecommendationsRequestType.html
 *
 */
class GetItemRecommendationsRequestType extends AbstractRequestType
{
	/**
	 * @var GetRecommendationsRequestContainerType
	 */
	protected $GetRecommendationsRequestContainer;

	/**
	 * @return GetRecommendationsRequestContainerType
	 * @param integer $index 
	 */
	function getGetRecommendationsRequestContainer($index = null)
	{
		if ($index !== null) {
			return $this->GetRecommendationsRequestContainer[$index];
		} else {
			return $this->GetRecommendationsRequestContainer;
		}
	}
	/**
	 * @return void
	 * @param GetRecommendationsRequestContainerType $value 
	 * @param  $index 
	 */
	function setGetRecommendationsRequestContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->GetRecommendationsRequestContainer[$index] = $value;
		} else {
			$this->GetRecommendationsRequestContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param GetRecommendationsRequestContainerType $value 
	 */
	function addGetRecommendationsRequestContainer($value)
	{
		$this->GetRecommendationsRequestContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemRecommendationsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'GetRecommendationsRequestContainer' =>
				array(
					'required' => false,
					'type' => 'GetRecommendationsRequestContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
