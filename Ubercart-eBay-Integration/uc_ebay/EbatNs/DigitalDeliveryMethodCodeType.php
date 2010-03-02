<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DigitalDeliveryMethodCodeType.html
 *
 * @property string None
 * @property string DownloadURL
 * @property string AlternateDeliveryInstructions
 * @property string CustomCode
 */
class DigitalDeliveryMethodCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_DownloadURL = 'DownloadURL';
	const CodeType_AlternateDeliveryInstructions = 'AlternateDeliveryInstructions';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DigitalDeliveryMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DigitalDeliveryMethodCodeType = new DigitalDeliveryMethodCodeType();

?>
