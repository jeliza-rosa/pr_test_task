<?
$this->Template_SetPageTitle("Настройки сайта");
// $this->Template_AddJs($this->sTemplatePath."assets/js/banners.js");
$this->Template_Assign("sPageTitleSmall", "управление конфигурацией");
$this->Template_Assign("sAction", "configs");

$sEvent=Router::GetParam(0);

switch ($sEvent){

	case "deleteall":
		if( !$this->AccessCheck("W") ) break;
		if( $aBannerIds = explode(',', Router::GetParam(1)) ){
			foreach ($aBannerIds as $iBannerId){
				$this->Banner_Delete( intval($iBannerId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;

	case "update":
		if( !$this->AccessCheck("V") ) break;
		

		// if (getRequest("id")) $oBanner=$this->Banner_GetBannerById(intval(getRequest("id")));
		// if (!$oBanner) $oBanner=Engine::GetEntity('Banner');
		
		// $oBanner->setTitle(getRequest('title'));
		// $oBanner->setDesc(getRequest('desc'));
		// $oBanner->setUrl(getRequest('url'));
		// $oBanner->setPriority(getRequest('priority'));
		// $oBanner->setGroup(getRequest('group'));
		// $oBanner->setActive(getRequest('active'));
		
		if( $oBanner->getGroup() ){
			if (getRequest("id")){
				$this->Banner_Update($oBanner);
			}else{
				$oBanner=$this->Banner_Add($oBanner);
			}
			$iId=$oBanner->getId();
			
			if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/banners/edit/".$iId."/");
			else header("Location: ".Config::Get("host")."admin/banners/list/".$oBanner->getGroup()."/");
			break;
		}else{
			$this->Template_AddMessage("Ошибка!","Некоторые поля были заполнены не верно!");
			$this->Template_Assign("sFormTitle", "Ошибка при сохранении баннера");
		}

	default:		
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление баннера");
		$this->Template_Assign("sFormAction", "update");

		/*$aConfigDefault = array(
			"title" => array(
				"title"=>"Заголовок сайта",
				"type"=>"text",
				"default"=>"PRcms 3.0"
			)
		);*/
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");

		
		$aConfigs=$this->Config_GetConfigs();
		// $aTemplates = $this->Template_GetTemplatesAvailable();
		$this->Template_Assign("aConfigs", $aConfigs);
		// $this->Template_Assign("aTemplates", $aTemplates);
		$this->Template_Assign("sFormAction", "update");
		$this->SetTemplate("configs/config_form.tpl");
}
		break;

