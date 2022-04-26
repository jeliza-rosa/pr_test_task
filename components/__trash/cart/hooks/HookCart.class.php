<?
class ComponentCart_HookCart extends Hook {
	public function Init() {

	}
	public function Cart($aParams) {
		/*
$aCatalogs=$this->ComponentCatalog_Catalog_GetCatalogByNode($aParams['id']);

		foreach($aCatalogs as $i=>$oCatalog){
			$oCatalog->setItems($this->ComponentCatalog_Catalog_GetItemsByCatalog($oCatalog->getId()));
			//mpr();
			$oCatalog->setCatalogs($this->ComponentCatalog_Catalog_GetCatalogsByParent($oCatalog->getId()));

		}
		// die('stoop');
		$this->Template_Assign('aCatalogs', $aCatalogs);
*/
		$aCarts=$this->ComponentCart_Cart_GetCarts();	
		$this->Template_Assign('aCarts', $aCarts);
		return $this->Template_Fetch("components/cart/templates/hooks/".$aParams['template'].".tpl");
	}
}

