<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves a brief summary of the requester's status as an eBay seller. (The 
 * requester is the user identified by the user token you pass in the 
 * request.)<br><br>This status information can help an eBay seller monitor their 
 * selling performance andkeep their account in good standing.<br><br>To be 
 * eligible to view their Seller Dashboard, the user needs 10 or more Detailed 
 * Seller Ratings (across any of the four rating categories) within the last 12 
 * months. If the user is not eligible, the call returns an error. <br><br>The 
 * Seller Dashboard does not return the correct data in the Sandbox. Test this 
 * callin production to get useful results. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerDashboardRequestType.html
 *
 */
class GetSellerDashboardRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerDashboardRequestType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
