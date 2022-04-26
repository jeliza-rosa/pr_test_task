<?
class ComponentCart extends Component {
	public function Init(){		
		$this->SetDefaultAction('default');
		$this->oNode=Router::GetCurrentNode();
		$this->Template_SetPageTitle($this->oNode->getTitle());
		$this->Template_AddTitle($this->oNode->getTitle());
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddAction('add','ActionAdd');
		$this->AddAction('delete','ActionDelete');
		//$this->AddActionPreg('/^(\d+)$/i','ActionDetail');
		//$this->AddActionPreg('/^bad$/i','/^(page(\d+))?$/i','ActionDefault');
	}
		
	
	
	protected function ActionDefault(){
		$aCarts=$this->ComponentCart_Cart_GetCarts();	
		$this->Template_Assign('aCarts', $aCarts);
		foreach($aCarts as $oCart){
			$oCart->setItem0($oItem=$this->ComponentCatalog_Catalog_GetItemById($oCart->getItem()));
		}
		$this->SetTemplate("cart.tpl");
	}
	protected function ActionAdd() {
		$aParams=Router::GetParams();
		$iItemId=intval($aParams[0]);
		$iCount=intval($aParams[1]);
		if (!$iCount) $iCount = 1;
		
		$oItem=$this->ComponentCatalog_Catalog_GetItemById($iItemId);
		$this->ComponentCart_Cart_CartAdd($oItem->getId(), $iCount);
		
		echo $this->ComponentCart_HookCart_Cart(array("template"=>"cart"));
		exit;
	}
	protected function ActionDelete() {
		$aParams=Router::GetParams();
		$iCartId=intval($aParams[0]);
		$this->ComponentCart_Cart_CartDelete($iCartId);
		header("Location: /".Router::GetNodeUrl());
		exit;
	}
}	
