<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * CategoryListingsSearchCodeType - Type declaration to be used byother schema. 
 * Used to filter returned item listings to just thosethat are featured or 
 * super-featured. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryListingsSearchCodeType.html
 *
 * @property string Featured
 * @property string SuperFeatured
 * @property string CustomCode
 */
class CategoryListingsSearchCodeType extends EbatNs_FacetType
{
	const CodeType_Featured = 'Featured';
	const CodeType_SuperFeatured = 'SuperFeatured';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryListingsSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CategoryListingsSearchCodeType = new CategoryListingsSearchCodeType();

?>