<?
class ComponentInformerAdmin extends Component {
	protected $oNode=null;
	protected $sAction=null;
	protected $aParams=array();
	protected $aLang=array();
	
	public function Init(){		
		$this->SetDefaultAction('default'); // Устанавливает экшн по умолчанию
		$this->oNode=Router::GetCurrentNode(); // Текущий редактируемый раздел
		$this->sAction=Router::GetActionAdmin(); // Текущий экшн
		$this->aParams=Router::getParams(); // Массив параметров
		$sTemplatePath=$this->Template_GetHost()."components/admin/templates/default/";
		$this->sTemplatePath=$sTemplatePath; // Путь до шаблона админки
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddAction('add','ActionAdd');
		$this->AddAction('edit','ActionAdd');
		$this->AddAction('delete','ActionDelete');
	}
		
	protected function ActionDefault() {
		$this->Template_Assign("sFormTitle", $this->oNode->getTitle());
		
		$aItems=$this->Table_Select("com_news");
		
		$aDescribe=$this->Table_Describe("com_news");
		foreach($aDescribe as $i=>$aDesc){
			if ($aDesc['Key']=="PRI") $sKey=$aDesc['Field'];
		}
		$this->Template_Assign("aItems", $aItems);
		$this->Template_Assign("sKey", $sKey);
		$this->SetTemplate("informer_list.tpl");
	}
	protected function ActionAdd(){
		$this->Template_Assign("sFormTitle", "Добавление ".$this->aLang['item_genitive']);
		$this->Template_Assign("sFormAction", "update");
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");		
		
		$aDescribe=$this->Table_Describe("com_news");
		foreach($aDescribe as $i=>$aDesc){
			if (preg_match("/^int.*?/", $aDesc['Type'])) $aDescribe[$i]['Type']="int";
			if (preg_match("/^varchar.*?/", $aDesc['Type'])) $aDescribe[$i]['Type']="varchar";
			
			if ($aDesc['Key']=="PRI") $sKey=$aDesc['Field'];
		}
		
		if (getRequest("sub")){
			if (getRequest($sKey)) $aItem=$this->Table_SelectById("com_news", $sKey, getRequest($sKey));
			else $aItem=array();
			$this->ActionUpdate($aItem, $sKey);
		}else{
			$aItem=$this->Table_SelectById("com_news", $sKey, intval(Router::getParam(0)));
			if ($aItem){
				foreach($aDescribe as $i=>$aDesc){
					$aDescribe[$i]['Value']=$aItem[$aDesc['Field']];
				}
			}else{
				
			}
		}
		$this->Template_Assign("aDescribe", $aDescribe);
		$this->SetTemplate("informer_form.tpl");
	}
	
	protected function ActionUpdate($aItem, $sKey) {
		$aDescribe=$this->Table_Describe("com_news");
		foreach($aDescribe as $i=>$aDesc){
			$aValues[$aDesc['Field']]=getRequest($aDesc['Field']);
		}
		
		if ($aValues[$sKey]) $this->Table_Update("com_news", $sKey, $aValues);
		else $aValues[$sKey]=$this->Table_Add("com_news", $sKey, $aValues);

		if (!getRequest("apply")) header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
		else header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/edit/".$aValues[$sKey]."/");
	}
	
	
	protected function ActionDelete(){
		$aDescribe=$this->Table_Describe("com_news");
		foreach($aDescribe as $i=>$aDesc){
			if ($aDesc['Key']=="PRI") $sKey=$aDesc['Field'];
		}
		$this->Table_Delete("com_news", $sKey, intval(Router::GetParam(0)));
		header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
	}	
}	
