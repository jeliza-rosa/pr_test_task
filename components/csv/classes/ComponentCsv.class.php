<?
class ComponentCsv extends Component {
	public $oNode=null;

	public function Init(){		
		$this->SetDefaultAction('default');
		$this->oNode=Router::GetCurrentNode();
		$this->Template_SetPageTitle($this->oNode->getTitle());
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddActionPreg('/^(\d+)$/i','ActionDetail');
		$this->AddActionPreg('/^bad$/i','/^(page(\d+))?$/i','ActionDefault');
		$this->AddAction('page','ActionDefault');
	}
		
	protected function ActionDefault() {
		$iOnPage = $this->oNode->getParam("onpage");

		$iPage = Router::GetParam(0);
		if(!$iPage) $iPage=1;

		$iCount = $this->ComponentCsv_Csv_GetActiveCsvCountByNode($this->oNode->getId());
		$aCsv  = $this->ComponentCsv_Csv_GetActiveCsvByNode($this->oNode->getId(), $iOnPage, $iPage);

		$this->Template_Assign("iCount", $iCount);
		$this->Template_Assign("iPage", $iPage);
		$this->Template_Assign("iOnPage", $iOnPage);
		$this->Template_Assign("aCsv", $aCsv);
		$this->SetTemplate("default.tpl");
	}
	
	protected function ActionDetail() {
		$iId=intval(Router::GetAction());
		$oCsv=$this->ComponentCsv_Csv_GetCsvById($iId);
		if(!$oCsv) return $this->NotFound();

		$this->Template_AddBreadCrumb(
			$this->oNode->getFullUrl()."/".$oCsv->getId()."/", 
			$oCsv->getTitle()
		);

		$this->Template_SetPageTitle("");
		$this->Template_AddTitle($oCsv->getTitle());
		$this->Template_Assign("oCsv", $oCsv);
		$this->SetTemplate("detail.tpl");
	}
}