<?
$this->Template_SetPageTitle("Баннерный барабан");
// $this->Template_AddJs($this->sTemplatePath."assets/js/banners.js");
$this->Template_Assign("sPageTitleSmall", "управление баннерами");
$this->Template_Assign("sAction", "banners");

$sEvent=Router::GetParam(0);

switch ($sEvent){
	case "update":
		if( !$this->AccessCheck("V") ) break;
		if (getRequest("id")) $oBanner=$this->Banner_GetBannerById(intval(getRequest("id")));
		if (!$oBanner) $oBanner=Engine::GetEntity('Banner');
		
		$oBanner->setTitle(getRequest('title'));
		$oBanner->setDesc(getRequest('desc'));
		$oBanner->setUrl(getRequest('url'));
		$oBanner->setPriority(getRequest('priority'));
		$oBanner->setGroup(getRequest('group'));
		$oBanner->setActive(getRequest('active'));
		
		if( !$oBanner->setUploadedImg() ) $this->Template_AddMessage("Ошибка!","Не получилось загрузить фото!");
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
	case "edit":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="edit" ) $this->Template_Assign("sFormTitle", "Редактирование баннера");
		if( !$oBanner ) $oBanner = $this->Banner_GetBannerById( intval(Router::GetParam(1)) );

	case "add":
		
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление баннера");
		$this->Template_Assign("sFormAction", "update");

		if( !$oBanner ){
			$iGroupId = intval(Router::GetParam(1));
			$oBanner = Engine::GetEntity('Banner', null);
			$oBanner->setGroup($iGroupId);
			$oBanner->setPriority(50);
			$oBanner->setActive(1);
		}

		$aGroups = $this->Banner_GetGroups();

		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");

		$this->Template_Assign("oBanner", $oBanner);
		$this->Template_Assign("aGroups", $aGroups);
		$this->SetTemplate("banners/banner_form.tpl");
	
		break;

	case "delete":
		if( !$this->AccessCheck("W") ) break;
		if( is_numeric( Router::GetParam(1) ) ){
			$oBanner = $this->Banner_GetBannerById( intval(Router::GetParam(1)) );
			$iGroupId = $oBanner->getGroup();
			$this->Banner_Delete( $oBanner->getId() );
		}
		header("Location: ".Config::Get("host")."admin/banners/list/".$iGroupId."/");
		exit;
		break;

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

	case "list":
		if( !$this->AccessCheck("R") ) break;
		
		$iGroupId = intval(Router::GetParam(1));
		$oGroup = $this->Banner_GetGroupById($iGroupId);
		$aBanners=$this->Banner_GetBannersByGroup($iGroupId);
		$this->Template_Assign("aBanners", $aBanners);
		$this->Template_Assign("iGroupId", $iGroupId);
		$this->Template_Assign("sFormTitle", "Список баннеров (группа: ".$oGroup->getTitle().")");
		$this->SetTemplate("banners/banners_list.tpl");
		break;

	case "activate":
		if( !$this->AccessCheck("V") ) break;
		$sId = intval(Router::GetParam(1));
		if( $this->Banner_Activate($sId) ){
			$result['state']="success";
			$result['msg']=1;
		}else $result['state']="error";
		echo json_encode($result);
		exit;
		break;

	case "deactivate":
		if( !$this->AccessCheck("V") ) break;
		$sId = intval(Router::GetParam(1));
		if( $this->Banner_Deactivate($sId) ){
			$result['state']="success";
			$result['msg']=0;
		}else $result['state']="error";
		echo json_encode($result);
		exit;
		break;

	case "removeimage":
		if( is_numeric(Router::GetParam(1)) ){
			$iBannerId = intval(Router::GetParam(1));
			$oBanner = $this->Banner_GetBannerById( $iBannerId );
			$this->Image_Delete($oBanner->getImg());
			$oBanner->setImg("");
			$this->Banner_Update($oBanner);
			exit;
		}
		break;


	case "updategroup":
		if( !$this->AccessCheck("V") ) break;
		if( getRequest("id", null, "id") ) $oGroup=$this->Banner_GetGroupById( getRequest("id") );
		if( !$oGroup ){
			$oGroup=Engine::GetEntity('Banner', array(), "Group");
		}
		
		$oGroup->setTitle(	getRequest('title')	);
		$oGroup->setDesc(	getRequest('desc')	);
		
		//Validation
		if(	$oGroup->getTitle() ){ 
			if( $oGroup->getId() ){
				$this->Banner_UpdateGroup($oGroup);
			}else{
				$oGroup=$this->Banner_AddGroup($oGroup);
			}
			$iId=$oGroup->getId();

			if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/banners/editgroup/".$iId."/");
			else header("Location: ".Config::Get("host")."admin/banners/");
			break;
		}else{
			$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно");
			$this->Template_Assign("sFormTitle", "Ошибка при группы баннеров");
		}
	
	case "editgroup":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="editgroup" ) $this->Template_Assign("sFormTitle", "Редактирование группы баннеров");
		if( !$oGroup ) $oGroup = $this->Banner_GetGroupById(intval( Router::GetParam(1) ));
	
	case "addgroup":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="addgroup" ) $this->Template_Assign("sFormTitle", "Добавление группы баннеров");

		if( !$oGroup ) $oGroup = Engine::GetEntity('Banner', array(), "Group");

		$this->Template_Assign("oGroup", $oGroup);
		

		$this->Template_Assign("sFormAction", "updategroup");
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");
		$this->SetTemplate("banners/group_form.tpl");
		break; 

	case "deletegroup":
		if( !$this->AccessCheck("W") ) break;
		if( is_numeric( Router::GetParam(1) ) ){
			$iGroupId = $this->Banner_DeleteGroup( intval(Router::GetParam(1)) );
		}
		header("Location: ".Config::Get("host")."admin/banners/");
		exit;
		break;
	
	case "deleteallgroup":
		if( !$this->AccessCheck("W") ) break;
		if( $aGroupIds = explode(',', Router::GetParam(1)) ){
			foreach ($aGroupIds as $iId){
				$this->Banner_DeleteGroup( intval($iId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;

	default:
		if( !$this->AccessCheck("W") ) break;
		$aGroups=$this->Banner_GetGroups();
		$this->Template_Assign("aGroups", $aGroups);
		$this->SetTemplate("banners/groups_list.tpl");
}
