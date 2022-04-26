<?
class ComponentNews extends Component {
	public function Init(){		
		$this->SetDefaultAction('default');
		$this->oNode=Router::GetCurrentNode();
		$this->Template_SetPageTitle($this->oNode->getTitle());
		$this->Template_AddTitle($this->oNode->getTitle());
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddActionPreg('/^(\d+)$/i','ActionDetail');
		$this->AddActionPreg('/^bad$/i','/^(page(\d+))?$/i','ActionDefault');
	}
		
	protected function ActionDefault() {
		$aNews=$this->ComponentNews_News_GetNewsByNode($this->oNode->getId());
		$this->Template_Assign("aNews", $aNews);
		$this->SetTemplate("default.tpl");
	}
	
	protected function ActionDetail() {
		$iId=intval(Router::GetAction());
		$oNews=$this->ComponentNews_News_GetNewsById($iId);
		$this->Template_SetPageTitle("");
		$this->Template_AddTitle($oNews->getTitle());
		$this->Template_Assign("oNews", $oNews);
		$this->SetTemplate("detail.tpl");
	}
}	
