<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returned after calling SellerReverseDisputeRequest. Contains the status of the 
 * call and any errors or warnings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerReverseDisputeResponseType.html
 *
 */
class SellerReverseDisputeResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerReverseDisputeResponseType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>