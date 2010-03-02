<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemRatingDetailsType.php';

/**
 * Container for a set of detailed seller ratings about a transaction.If a seller 
 * has detailed ratings, they are displayedin the Feedback Profile of the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemRatingDetailArrayType.html
 *
 */
class ItemRatingDetailArrayType extends EbatNs_ComplexType
{
	/**
	 * @var ItemRatingDetailsType
	 */
	protected $ItemRatingDetails;

	/**
	 * @return ItemRatingDetailsType
	 * @param integer $index 
	 */
	function getItemRatingDetails($index = null)
	{
		if ($index !== null) {
			return $this->ItemRatingDetails[$index];
		} else {
			return $this->ItemRatingDetails;
		}
	}
	/**
	 * @return void
	 * @param ItemRatingDetailsType $value 
	 * @param  $index 
	 */
	function setItemRatingDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemRatingDetails[$index] = $value;
		} else {
			$this->ItemRatingDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemRatingDetailsType $value 
	 */
	function addItemRatingDetails($value)
	{
		$this->ItemRatingDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemRatingDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemRatingDetails' =>
				array(
					'required' => false,
					'type' => 'ItemRatingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
