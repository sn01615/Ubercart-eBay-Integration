<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'GetRecommendationsResponseContainerType.php';

/**
 * GetItemRecommendations returns recommended changes or opportunities for 
 * improvementrelated to listing data that was passed in the request.This call 
 * supports batch requests. That is, it can retrieve recommendations for 
 * multipleitems at once. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemRecommendationsResponseType.html
 *
 */
class GetItemRecommendationsResponseType extends AbstractResponseType
{
	/**
	 * @var GetRecommendationsResponseContainerType
	 */
	protected $GetRecommendationsResponseContainer;

	/**
	 * @return GetRecommendationsResponseContainerType
	 * @param integer $index 
	 */
	function getGetRecommendationsResponseContainer($index = null)
	{
		if ($index !== null) {
			return $this->GetRecommendationsResponseContainer[$index];
		} else {
			return $this->GetRecommendationsResponseContainer;
		}
	}
	/**
	 * @return void
	 * @param GetRecommendationsResponseContainerType $value 
	 * @param  $index 
	 */
	function setGetRecommendationsResponseContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->GetRecommendationsResponseContainer[$index] = $value;
		} else {
			$this->GetRecommendationsResponseContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param GetRecommendationsResponseContainerType $value 
	 */
	function addGetRecommendationsResponseContainer($value)
	{
		$this->GetRecommendationsResponseContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemRecommendationsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'GetRecommendationsResponseContainer' =>
				array(
					'required' => false,
					'type' => 'GetRecommendationsResponseContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
