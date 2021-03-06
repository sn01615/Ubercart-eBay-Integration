<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves a token required for the GetUserAlerts call in the Client Alerts 
 * API.Required input is a valid user token, which is the same user token used 
 * forauthentication and authorization in the Trading API. Client Alerts token 
 * alsorequired for Client Alerts API calls Login and Logout. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetClientAlertsAuthTokenRequestType.html
 *
 */
class GetClientAlertsAuthTokenRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetClientAlertsAuthTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
