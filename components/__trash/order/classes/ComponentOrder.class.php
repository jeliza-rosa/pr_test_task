<?
class ComponentOrder extends Component {
	public function Init(){		
		$this->oUserCurrent=$this->User_GetUserCurrent();
		$this->SetDefaultAction('default');
		$this->oNode=Router::GetCurrentNode();
		$this->Template_SetPageTitle($this->oNode->getTitle());
		$this->Template_AddTitle($this->oNode->getTitle());
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		//$this->AddAction('add','ActionAdd');
		//$this->AddAction('delete','ActionDelete');
		//$this->AddActionPreg('/^(\d+)$/i','ActionDetail');
		//$this->AddActionPreg('/^bad$/i','/^(page(\d+))?$/i','ActionDefault');
	}
		
	
	
	protected function ActionDefault(){
		if (!$this->oUserCurrent){
			$this->SetTemplate("auth.tpl");
		}else{
			$this->SetTemplate("order.tpl");
		}
	}
	
}	
