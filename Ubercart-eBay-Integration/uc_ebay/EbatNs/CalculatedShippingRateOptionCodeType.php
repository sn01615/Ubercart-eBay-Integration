<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Calculated Shipping Rate Options. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CalculatedShippingRateOptionCodeType.html
 *
 * @property string CombinedItemWeight
 * @property string IndividualItemWeight
 * @property string CustomCode
 */
class CalculatedShippingRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_CombinedItemWeight = 'CombinedItemWeight';
	const CodeType_IndividualItemWeight = 'IndividualItemWeight';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CalculatedShippingRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CalculatedShippingRateOptionCodeType = new CalculatedShippingRateOptionCodeType();

?>
