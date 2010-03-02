<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates category support for listing of Local Market items by 
 * sellerssubscribed to Local Market for Specialty Vehicles.Each of the 
 * subscriptions will have following options, which will define"National" vs 
 * "Local" ad format listing."LocalOptional" : This will allow national and local 
 * listing."LocalOnly" : Seller can have Local listings only."NationalOnly" : 
 * Seller can not opt into local only exposure. It has to be national listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SpecialitySubscriptionDefinitionType.html
 *
 */
class SpecialitySubscriptionDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SpecialitySubscriptionDefinitionType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
