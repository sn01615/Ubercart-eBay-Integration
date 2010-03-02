<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Requests current status of user token. The full set of developer keys is 
 * required forthe GetTokenStatus call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetTokenStatusRequestType.html
 *
 */
class GetTokenStatusRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetTokenStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
