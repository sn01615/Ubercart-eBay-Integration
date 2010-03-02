<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Describes the status of the dispute, which supplements the DisputeState.Some 
 * values apply to Unpaid Item disputes and some to Item Not Received 
 * disputes.Disputes can be sorted by DisputeStatus. Ascending order is:<br> 1 - 
 * WaitingForSellerResponse<br> 2 - WaitingForBuyerResponse<br> 3 - 
 * ClosedFVFCreditStrike<br> 4 - ClosedNoFVFCreditStrike<br> 5 - 
 * ClosedFVFCreditNoStrike<br> 6 - ClosedNoFVFCreditNoStrike<br> 7 - Closed<br> 8 - 
 * StrikeAppealedAfterClosing<br> 9- FVFCreditReversedAfterClosing<br> 10 - 
 * StrikeAppealedAndFVFCreditReversed<br>Descending order is the reverse. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeStatusCodeType.html
 *
 * @property string Closed
 * @property string WaitingForSellerResponse
 * @property string WaitingForBuyerResponse
 * @property string ClosedFVFCreditStrike
 * @property string ClosedNoFVFCreditStrike
 * @property string ClosedFVFCreditNoStrike
 * @property string ClosedNoFVFCreditNoStrike
 * @property string StrikeAppealedAfterClosing
 * @property string FVFCreditReversedAfterClosing
 * @property string StrikeAppealedAndFVFCreditReversed
 * @property string ClaimOpened
 * @property string NoDocumentation
 * @property string ClaimClosed
 * @property string ClaimDenied
 * @property string ClaimInProcess
 * @property string ClaimApproved
 * @property string ClaimPaid
 * @property string ClaimResolved
 * @property string ClaimSubmitted
 * @property string CustomCode
 */
class DisputeStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Closed = 'Closed';
	const CodeType_WaitingForSellerResponse = 'WaitingForSellerResponse';
	const CodeType_WaitingForBuyerResponse = 'WaitingForBuyerResponse';
	const CodeType_ClosedFVFCreditStrike = 'ClosedFVFCreditStrike';
	const CodeType_ClosedNoFVFCreditStrike = 'ClosedNoFVFCreditStrike';
	const CodeType_ClosedFVFCreditNoStrike = 'ClosedFVFCreditNoStrike';
	const CodeType_ClosedNoFVFCreditNoStrike = 'ClosedNoFVFCreditNoStrike';
	const CodeType_StrikeAppealedAfterClosing = 'StrikeAppealedAfterClosing';
	const CodeType_FVFCreditReversedAfterClosing = 'FVFCreditReversedAfterClosing';
	const CodeType_StrikeAppealedAndFVFCreditReversed = 'StrikeAppealedAndFVFCreditReversed';
	const CodeType_ClaimOpened = 'ClaimOpened';
	const CodeType_NoDocumentation = 'NoDocumentation';
	const CodeType_ClaimClosed = 'ClaimClosed';
	const CodeType_ClaimDenied = 'ClaimDenied';
	const CodeType_ClaimInProcess = 'ClaimInProcess';
	const CodeType_ClaimApproved = 'ClaimApproved';
	const CodeType_ClaimPaid = 'ClaimPaid';
	const CodeType_ClaimResolved = 'ClaimResolved';
	const CodeType_ClaimSubmitted = 'ClaimSubmitted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeStatusCodeType = new DisputeStatusCodeType();

?>