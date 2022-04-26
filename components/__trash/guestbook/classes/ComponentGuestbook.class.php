<?
class ComponentGuestbook extends Component {

	public function Init(){		
		$this->SetDefaultAction('default');
		$this->oNode=Router::GetCurrentNode();
		$this->Template_SetPageTitle($this->oNode->getTitle());
		$this->Template_AddTitle($this->oNode->getTitle());
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddActionPreg('/^bad$/i','/^(page(\d+))?$/i','ActionDefault');
	}
		
	protected function ActionDefault() {
	
		if (getRequest("submit")){
			if (getRequest("author") && getRequest("question")) {
				$oGuestbook=Engine::GetEntity('ComponentGuestbook_Guestbook');
				$oGuestbook->setNode($this->oNode->getId());
				$oGuestbook->setAuthor(getRequest("author"));
				$oGuestbook->setPhone(getRequest("phone"));
				$oGuestbook->setQuestion(getRequest("question"));
				$oGuestbook->setDatecreate(date("Y-m-d H:i:s"));
				if ($this->ComponentGuestbook_Guestbook_Add($oGuestbook)) {
					$this->Template_Assign("sSubmit", "new");
					}
			}
			else {
				$this->Template_Assign("sSubmit", "error");
			}
		}
		$aGuestbook=$this->ComponentGuestbook_Guestbook_GetGuestbookByNode($this->oNode->getId(), 0, true);
		$oNodeBody=$this->ComponentPage_ModulePage_GetPageByNode($this->oNode->getId());
		$sText=$oNodeBody->getBody();
		$this->Template_Assign("sText", $sText);		
		$this->Template_Assign("aGuestbook", $aGuestbook);
		$this->SetTemplate("default.tpl");
	}
	

}	
