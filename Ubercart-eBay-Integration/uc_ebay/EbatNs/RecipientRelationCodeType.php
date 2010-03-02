<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A seller can make a Transaction Confirmation Request (TCR) for an item. This 
 * codelist contains values to specify the current relationship between the seller 
 * andthe potential buyer. For a seller to make a Transaction Confirmation Request 
 * (TCR)for an item, the potential buyer must meet one of the criteria in this code 
 * list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RecipientRelationCodeType.html
 *
 * @property string 1
 * @property string 2
 * @property string 3
 * @property string 4
 * @property string CustomCode
 */
class RecipientRelationCodeType extends EbatNs_FacetType
{
	const CodeType_1 = '1';
	const CodeType_2 = '2';
	const CodeType_3 = '3';
	const CodeType_4 = '4';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RecipientRelationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RecipientRelationCodeType = new RecipientRelationCodeType();

?>
