<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains detailed information about a bid. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BiddingDetailsType.html
 *
 */
class BiddingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $ConvertedMaxBid;
	/**
	 * @var AmountType
	 */
	protected $MaxBid;
	/**
	 * @var int
	 */
	protected $QuantityBid;
	/**
	 * @var int
	 */
	protected $QuantityWon;
	/**
	 * @var boolean
	 */
	protected $Winning;
	/**
	 * @var boolean
	 */
	protected $BidAssistant;

	/**
	 * @return AmountType
	 */
	function getConvertedMaxBid()
	{
		return $this->ConvertedMaxBid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedMaxBid($value)
	{
		$this->ConvertedMaxBid = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMaxBid()
	{
		return $this->MaxBid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMaxBid($value)
	{
		$this->MaxBid = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityBid()
	{
		return $this->QuantityBid;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityBid($value)
	{
		$this->QuantityBid = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityWon()
	{
		return $this->QuantityWon;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityWon($value)
	{
		$this->QuantityWon = $value;
	}
	/**
	 * @return boolean
	 */
	function getWinning()
	{
		return $this->Winning;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setWinning($value)
	{
		$this->Winning = $value;
	}
	/**
	 * @return boolean
	 */
	function getBidAssistant()
	{
		return $this->BidAssistant;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBidAssistant($value)
	{
		$this->BidAssistant = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BiddingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ConvertedMaxBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityBid' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityWon' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Winning' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidAssistant' =>
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
