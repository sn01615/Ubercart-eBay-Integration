<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'StringMatchCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Searches for nonprofit charity organizations that meet the criteria specified in 
 * the request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCharitiesRequestType.html
 *
 */
class GetCharitiesRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CharityID;
	/**
	 * @var string
	 */
	protected $CharityName;
	/**
	 * @var string
	 */
	protected $Query;
	/**
	 * @var int
	 */
	protected $CharityRegion;
	/**
	 * @var int
	 */
	protected $CharityDomain;
	/**
	 * @var boolean
	 */
	protected $IncludeDescription;
	/**
	 * @var StringMatchCodeType
	 */
	protected $MatchType;
	/**
	 * @var boolean
	 */
	protected $Featured;

	/**
	 * @return string
	 */
	function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}
	/**
	 * @return string
	 */
	function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCharityName($value)
	{
		$this->CharityName = $value;
	}
	/**
	 * @return string
	 */
	function getQuery()
	{
		return $this->Query;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setQuery($value)
	{
		$this->Query = $value;
	}
	/**
	 * @return int
	 */
	function getCharityRegion()
	{
		return $this->CharityRegion;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCharityRegion($value)
	{
		$this->CharityRegion = $value;
	}
	/**
	 * @return int
	 */
	function getCharityDomain()
	{
		return $this->CharityDomain;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCharityDomain($value)
	{
		$this->CharityDomain = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeDescription()
	{
		return $this->IncludeDescription;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeDescription($value)
	{
		$this->IncludeDescription = $value;
	}
	/**
	 * @return StringMatchCodeType
	 */
	function getMatchType()
	{
		return $this->MatchType;
	}
	/**
	 * @return void
	 * @param StringMatchCodeType $value 
	 */
	function setMatchType($value)
	{
		$this->MatchType = $value;
	}
	/**
	 * @return boolean
	 */
	function getFeatured()
	{
		return $this->Featured;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFeatured($value)
	{
		$this->Featured = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCharitiesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CharityID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Query' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityRegion' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityDomain' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeDescription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MatchType' =>
				array(
					'required' => false,
					'type' => 'StringMatchCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Featured' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
