<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The status of a set of items (packet) reported for infringement. Packet states 
 * are based on the states of the reported items within the packet. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROReportPacketStatusCodeType.html
 *
 * @property string Received
 * @property string InProcess
 * @property string Processed
 * @property string CustomCode
 */
class VeROReportPacketStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Received = 'Received';
	const CodeType_InProcess = 'InProcess';
	const CodeType_Processed = 'Processed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROReportPacketStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VeROReportPacketStatusCodeType = new VeROReportPacketStatusCodeType();

?>
