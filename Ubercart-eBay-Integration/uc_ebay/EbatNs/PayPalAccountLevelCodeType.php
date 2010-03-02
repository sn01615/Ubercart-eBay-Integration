<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * PayPal account level. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PayPalAccountLevelCodeType.html
 *
 * @property string Unverified
 * @property string InternationalUnverified
 * @property string Verified
 * @property string InternationalVerified
 * @property string Trusted
 * @property string Unknown
 * @property string Invalid
 * @property string CustomCode
 */
class PayPalAccountLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Unverified = 'Unverified';
	const CodeType_InternationalUnverified = 'InternationalUnverified';
	const CodeType_Verified = 'Verified';
	const CodeType_InternationalVerified = 'InternationalVerified';
	const CodeType_Trusted = 'Trusted';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PayPalAccountLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PayPalAccountLevelCodeType = new PayPalAccountLevelCodeType();

?>