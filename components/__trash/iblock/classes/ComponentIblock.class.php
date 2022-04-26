<?
class ComponentPage extends Component {
	public $oNode=null;
	public $aParamsDefault=array(
		"template" => array(
			"title" => "Шаблон",
			"type" => "select",
			"values" => array(
				"page.tpl"=>"По умолчанию (page.tpl)",
				"contacts.tpl"=>"Контакты (contacts.tpl)",
			),
			"default" => "page.tpl"
		)
	);
	
	public function Init(){		
		$this->SetDefaultAction('default');
		$this->oNode=Router::GetCurrentNode();
		$this->Template_SetPageTitle($this->oNode->getTitle());
		$this->Template_AddTitle($this->oNode->getTitle());
		//mpr($this->aParamsCurrent);
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddActionPreg('/^(page(\d+))?$/i','ActionDefault');
	}
		
	protected function ActionDefault() {
		$oPage=$this->ComponentPage_Page_GetPageByNode($this->oNode->getId());
		if (!$oPage){
			$this->NotFound();
		}
		$this->Template_Assign("oPage", $oPage);
		$this->SetTemplate("page.tpl");
	}
}	
