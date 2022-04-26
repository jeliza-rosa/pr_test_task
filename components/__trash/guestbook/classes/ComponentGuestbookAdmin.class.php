<?
class ComponentGuestbookAdmin extends Component {
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
		
		$this->aLang=array(
			"Items"=>"Вопрос-ответы", //Множественное число
			"items"=>"вопрос-ответы",
			"Item"=>"Вопрос-ответ", //Единственное число
			"item"=>"вопрос-ответ",
			"item_genitive"=>"вопрос-ответа", //Родительный падеж
			"Item_genitive"=>"Вопрос-ответа" 
		);
		
		$this->Template_Assign("aLang", $this->aLang);
	}
	
	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddAction('add','ActionAdd');
		//$this->AddAction('update','ActionUpdate');
		$this->AddAction('edit','ActionAdd');
		$this->AddAction('activate','ActionActivate');
		$this->AddAction('deactivate','ActionDeactivate');
		$this->AddAction('delete','ActionDelete');
	}
		
	protected function ActionDefault() {
		$aGuestbook=$this->ComponentGuestbook_Guestbook_GetGuestbookByNode($this->oNode->getId());
		$this->Template_Assign("aGuestbook", $aGuestbook);
		$this->Template_Assign("sFormTitle", $this->oNode->getTitle());
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");			
		$this->SetTemplate("guestbook_list.tpl");	
		if (getRequest("sub")){
			$oNodeBody=$this->ComponentPage_Page_GetPageByNode($this->oNode->getId());
			if ($oNodeBody) {
				$oNodeBody->setBody(getRequest("text"));
				$this->ComponentPage_Page_Update($oNodeBody);
			}
			else {
				$oNodeBody=Engine::GetEntity('ComponentPage_Page');
				$oNodeBody->setNode($this->oNode->getId());
				$oNodeBody->setBody(getRequest("text"));
				$this->ComponentPage_Page_Add($oNodeBody);
			}

		}
		$oNodeBody=$this->ComponentPage_Page_GetPageByNode($this->oNode->getId());
		$sNodeBody='';
		if ($oNodeBody)
			$sNodeBody=$oNodeBody->getBody();			
		$_REQUEST['text']=$sNodeBody;
	}
	protected function ActionAdd(){
		$this->Template_Assign("sFormTitle", "Изменение ".$this->aLang['item_genitive']);
		$this->Template_Assign("sFormAction", "update");
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");		
		$aAuthors=$this->ComponentNews_News_GetNewsByNode(98);
		$this->Template_Assign("aAuthors", $aAuthors);
		if (getRequest("sub")){
			if (getRequest('id')) $oGuestbook=$this->ComponentGuestbook_Guestbook_GetGuestbookById(getRequest('id'));
			else $oGuestbook=Engine::GetEntity('ComponentGuestbook_Guestbook');
			
			$this->ActionUpdate($oGuestbook);
		}else{
			$oGuestbook=$this->ComponentGuestbook_Guestbook_GetGuestbookById(intval(Router::getParam(0)));
			if ($oGuestbook){
				$_REQUEST['id']=$oGuestbook->getId();
				$_REQUEST['author']=$oGuestbook->getAuthor();
				$_REQUEST['phone']=$oGuestbook->getPhone();
				$_REQUEST['question']=$oGuestbook->getQuestion();
				$_REQUEST['datecreate']=$oGuestbook->getDatecreate();
				$_REQUEST['timecreate']=$oGuestbook->getTimecreate();
				$_REQUEST['answer']=$oGuestbook->getAnswer();
				$_REQUEST['answerauthor']=$oGuestbook->getAnswerauthor();
				$_REQUEST['active']=$oGuestbook->getActive();
				if (empty($_REQUEST['answer'])) {
					$_REQUEST['dateanswer']=date("Y-m-d");
					$_REQUEST['timeanswer']=date("H:i");
				}
				else {
					$_REQUEST['dateanswer']=$oGuestbook->getDateanswer();
					$_REQUEST['timeanswer']=$oGuestbook->getTimeanswer();
				}
			}
		}
		$this->SetTemplate("guestbook_form.tpl");
	}
	
	protected function ActionUpdate(ComponentGuestbook_ModuleGuestbook_EntityGuestbook $oGuestbook) {

		$oGuestbook->setAuthor(getRequest('author'));
		$oGuestbook->setQuestion(getRequest('question'));
		$oGuestbook->setDatecreate(getRequest('datecreate'), getRequest('timecreate'));
		$oGuestbook->setAnswer(getRequest('answer'));
		$oGuestbook->setAnswerauthor(getRequest('answerauthor'));
		$oGuestbook->setDateanswer(getRequest('dateanswer'), getRequest('timeanswer'));
		$oGuestbook->setActive(getRequest('active'));
		$oGuestbook->setNode($this->oNode->getId());
	
		if ($oGuestbook->getId()) $this->ComponentGuestbook_Guestbook_Update($oGuestbook);
		else $oGuestbook=$this->ComponentGuestbook_Guestbook_Add($oGuestbook);

		if (!getRequest("apply")) header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
		else header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/edit/".$oGuestbook->getId()."/");
	}
	
	
	protected function ActionDelete(){
		$this->ComponentGuestbook_Guestbook_Delete(intval(Router::GetParam(0)));
		header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
	}
	protected function ActionDeactivate(){
		$iId=intval(Router::GetParam(0));
		if ($this->ComponentGuestbook_Guestbook_Deactivate($iId)){ 
			$result['state']="success";
			$result['msg']=0;
		}
		else $result['state']="error";
		echo json_encode($result);
		exit;
	}
	protected function ActionActivate(){
		$iId=intval(Router::GetParam(0));
		if ($this->ComponentGuestbook_Guestbook_Activate($iId)){ 
			$result['state']="success";
			$result['msg']=1;
		}
		else $result['state']="error";
		echo json_encode($result);
		exit;
	}	
}	
