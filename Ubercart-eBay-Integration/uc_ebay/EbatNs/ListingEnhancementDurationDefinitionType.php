<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the Listing Enhancement Duration feature.If the field is present, the 
 * corresponding feature applies to the category.The field is returned as an empty 
 * element (i.e., a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingEnhancementDurationDefinitionType.html
 *
 */
class ListingEnhancementDurationDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingEnhancementDurationDefinitionType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
