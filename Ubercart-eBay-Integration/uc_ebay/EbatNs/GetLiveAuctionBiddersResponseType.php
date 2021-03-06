<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'BidderDetailArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';

/**
 * Includes the list of bidders for the requested catalog. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetLiveAuctionBiddersResponseType.html
 *
 */
class GetLiveAuctionBiddersResponseType extends AbstractResponseType
{
	/**
	 * @var BidderDetailArrayType
	 */
	protected $BidderDetails;
	/**
	 * @var int
	 */
	protected $TotalPending;
	/**
	 * @var int
	 */
	protected $TotalApproved;
	/**
	 * @var int
	 */
	protected $TotalDenied;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;

	/**
	 * @return BidderDetailArrayType
	 */
	function getBidderDetails()
	{
		return $this->BidderDetails;
	}
	/**
	 * @return void
	 * @param BidderDetailArrayType $value 
	 */
	function setBidderDetails($value)
	{
		$this->BidderDetails = $value;
	}
	/**
	 * @return int
	 */
	function getTotalPending()
	{
		return $this->TotalPending;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalPending($value)
	{
		$this->TotalPending = $value;
	}
	/**
	 * @return int
	 */
	function getTotalApproved()
	{
		return $this->TotalApproved;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalApproved($value)
	{
		$this->TotalApproved = $value;
	}
	/**
	 * @return int
	 */
	function getTotalDenied()
	{
		return $this->TotalDenied;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalDenied($value)
	{
		$this->TotalDenied = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetLiveAuctionBiddersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidderDetails' =>
				array(
					'required' => false,
					'type' => 'BidderDetailArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalPending' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalApproved' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalDenied' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
