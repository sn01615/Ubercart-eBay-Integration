<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SearchAttributesType.php';

/**
 * Specifies a query consisting of attributes. Only attributes that are 
 * returnedfrom GetProductFinder can be used. See the Developer's Guide for more 
 * information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchRequestType.html
 *
 */
class SearchRequestType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ProductFinderID;
	/**
	 * @var SearchAttributesType
	 */
	protected $SearchAttributes;

	/**
	 * @return int
	 */
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
	}
	/**
	 * @return SearchAttributesType
	 * @param integer $index 
	 */
	function getSearchAttributes($index = null)
	{
		if ($index !== null) {
			return $this->SearchAttributes[$index];
		} else {
			return $this->SearchAttributes;
		}
	}
	/**
	 * @return void
	 * @param SearchAttributesType $value 
	 * @param  $index 
	 */
	function setSearchAttributes($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchAttributes[$index] = $value;
		} else {
			$this->SearchAttributes = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchAttributesType $value 
	 */
	function addSearchAttributes($value)
	{
		$this->SearchAttributes[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ProductFinderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchAttributes' =>
				array(
					'required' => false,
					'type' => 'SearchAttributesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>