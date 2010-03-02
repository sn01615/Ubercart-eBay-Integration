<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * List of available options for how items are sorted in an eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreItemListSortOrderCodeType.html
 *
 * @property string EndingFirst
 * @property string NewlyListed
 * @property string LowestPriced
 * @property string HighestPriced
 * @property string CustomCode
 */
class StoreItemListSortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_EndingFirst = 'EndingFirst';
	const CodeType_NewlyListed = 'NewlyListed';
	const CodeType_LowestPriced = 'LowestPriced';
	const CodeType_HighestPriced = 'HighestPriced';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreItemListSortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreItemListSortOrderCodeType = new StoreItemListSortOrderCodeType();

?>