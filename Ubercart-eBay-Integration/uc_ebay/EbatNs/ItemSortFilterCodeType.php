<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies how items should be sorted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemSortFilterCodeType.html
 *
 * @property string EndingLast
 * @property string EndingSoonest
 * @property string HighestPrice
 * @property string LowestPrice
 * @property string NewlyListed
 * @property string RandomlySelected
 * @property string CustomCode
 */
class ItemSortFilterCodeType extends EbatNs_FacetType
{
	const CodeType_EndingLast = 'EndingLast';
	const CodeType_EndingSoonest = 'EndingSoonest';
	const CodeType_HighestPrice = 'HighestPrice';
	const CodeType_LowestPrice = 'LowestPrice';
	const CodeType_NewlyListed = 'NewlyListed';
	const CodeType_RandomlySelected = 'RandomlySelected';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemSortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemSortFilterCodeType = new ItemSortFilterCodeType();

?>
