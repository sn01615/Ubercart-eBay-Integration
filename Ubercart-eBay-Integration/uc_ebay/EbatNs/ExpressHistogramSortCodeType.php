<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Sort options for the Express histogram. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpressHistogramSortCodeType.html
 *
 * @property string ItemCount
 * @property string ProductCount
 * @property string Alphabetical
 * @property string CustomCode
 */
class ExpressHistogramSortCodeType extends EbatNs_FacetType
{
	const CodeType_ItemCount = 'ItemCount';
	const CodeType_ProductCount = 'ProductCount';
	const CodeType_Alphabetical = 'Alphabetical';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpressHistogramSortCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ExpressHistogramSortCodeType = new ExpressHistogramSortCodeType();

?>
