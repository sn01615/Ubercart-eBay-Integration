<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'ProductSearchType.php';
require_once 'AbstractRequestType.php';

/**
 * Searches for Pre-filled Item Information within one or more characteristic 
 * sets.This kind of search is only applicable in the context of the Sell Your Item 
 * usecase. Use the response to present the seller with a list of products found in 
 * acatalog. (For buy-side searches, use GetSearchResults.)<br><br>See the 
 * Attributes and Catalogs section of the eBay Web Services guide forbackground 
 * information and terminology definitions, as well as information abouthow to use 
 * this call in the Sell Your Item flow.<br><br>You can use this call to search for 
 * different products at the same time. That is,this call can perform batch 
 * searches.<br><br>Given an array of ProductSearch properties that are configured 
 * with a list ofsearch attributes or keywords (and other information), 
 * GetProductSearchResultssearches an eBay catalog for products that match each 
 * query. Some queries can beconfigured to also specify a sort order for the 
 * results.<br><br>To configure a ProductSearch object to search by attributes, you 
 * need a validcombination of search attributes. If you want to use a sort order 
 * other than thedefault order, you also need a valid sort attribute. We offer two 
 * calls thatreturn product search and sort attributes. Use GetCategory2CS to 
 * determine whichone of these calls you can use for a given category. At least one 
 * approach isoffered for each catalog-enabled category, and some cases, both 
 * areoffered.<br><br><b>GetProductSearchPage</b>: Use this call when you want to 
 * configurea simple query that consists of a single search attribute (with a 
 * value). Thisretrieves a single product or a very short list of search results to 
 * choose from.Some products are fairly easy to find based on a single attribute. 
 * For example, inConsumer Electronics categories (Digital Cameras, Cell Phones, 
 * and PDAs), you canspecify a unique (or nearly unique) identifier, like a part 
 * number. In Mediacategories (Books, DVDs & Movies, Music, and Video Games), you 
 * can specify adescriptive name, like a title. <br><br><b>GetProductFinder</b>: 
 * Use this call when you want to configure acomplex query. In the Sell Your Item 
 * flow, this is a complex query against theeBay product catalog. Currently, this 
 * type of search is available in ConsumerElectronics categories only. In this type 
 * of search, you specify values formultiple attributes, like Brand and Resolution 
 * (i.e., number of megapixels). Thisretrieves a list of matching products. This 
 * approach is useful when the user doesnot know the part number, or a product does 
 * not have a single, distinguishingfeature that is easy to search on. For example, 
 * searching for a digital camerabased solely on the brand would likely yield far 
 * too many results to be useful.Searching on the brand, product line, and 
 * resolution will retrieve a much shorterlist of results. <br><br>Alternatively, 
 * you can search on a particular keyword that appears in a product'stitle or Item 
 * Specifics. For this, you use GetProductSearchResults and and pass inone or more 
 * text strings (with optional wildcards) in 
 * ProductSearch.QueryKeywords.<br><br>When you use a keyword query, the search 
 * criteria are not restricted to theresults of a product search page or product 
 * finder, so the criteria are not tiedto a particular characteristic set. This 
 * means you can search across multiplecharacteristic sets using the same query. 
 * This is useful when the user wants tobroaden their search across multiple 
 * categories. For example, a seller who sellsJazz books, Jazz CDs, and Jazz movies 
 * may want to search for "Bird" acrossmultiple categories. Specify the 
 * characteristic set IDs of interest by usingCharacteristicSetIDs. 
 * <br><br>GetProductSearchResults returns a list of matching products, if any. 
 * Each productis represented as a list of attributes (Item Specifics) plus other 
 * identifyinginformation, such as a product ID and a stock photo. <br><br>Once the 
 * user selects a product from the list (this may require a call 
 * toGetProductFamilyMembers to retrieve additional products to choose from), pass 
 * itsID in a GetProductSellingPages request to retrieve more detailed information 
 * abouteach product, including a set of optional Item Specifics that the seller 
 * can usein addition to the pre-filled Item Specifics (see 
 * GetProductSellingPages).<br><br>To use this data in a listing, pass the product 
 * ID and the optional Item Specificsin the seller's listing request (AddItem). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductSearchResultsRequestType.html
 *
 */
class GetProductSearchResultsRequestType extends AbstractRequestType
{
	/**
	 * @var ProductSearchType
	 */
	protected $ProductSearch;

	/**
	 * @return ProductSearchType
	 * @param integer $index 
	 */
	function getProductSearch($index = null)
	{
		if ($index !== null) {
			return $this->ProductSearch[$index];
		} else {
			return $this->ProductSearch;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchType $value 
	 * @param  $index 
	 */
	function setProductSearch($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductSearch[$index] = $value;
		} else {
			$this->ProductSearch = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchType $value 
	 */
	function addProductSearch($value)
	{
		$this->ProductSearch[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductSearchResultsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ProductSearch' =>
				array(
					'required' => false,
					'type' => 'ProductSearchType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
