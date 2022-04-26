<?
$this->Template_SetPageTitle("Hooks");
// $this->Template_AddJs($this->sTemplatePath."assets/js/banners.js");
$this->Template_Assign("sPageTitleSmall", "управление Hook");
$this->Template_Assign("sAction", "hooks");

$sEvent=Router::GetParam(0);
switch ($sEvent){
	case "update":
		if( !$this->AccessCheck("V") ) break;
		if (getRequest("id")) $oHook=$this->Hook_GetHookById(intval(getRequest("id")));
		if (!$oHook) $oHook=Engine::GetEntity('Hook');
		
		//$sType = 

		$oHook->setTitle(getRequest('title'));
		$oHook->setDesc(getRequest('desc'));
		$oHook->setType(getRequest('type'));
		$oHook->setGroup(getRequest('group'));
		$oHook->setSort(getRequest('sort', null, "id"));
		$oHook->setActive(getRequest('active', null, "id"));
		
		if( $oHook->getType() && $oHook->getGroup() ){
			if (getRequest("id")){
				$this->Hook_Update($oHook);
			}else{
				$oHook=$this->Hook_Add($oHook);
			}
			$iId=$oHook->getId();

			$aNodes = getRequest("nodes");
			$this->Hook_DeleteNodesByHook($iId);
			$this->Hook_AddNodesToHook($aNodes, $iId);

			$this->Hook_SaveHookParamsFromArray($oHook, getRequest("params"));
			
			if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/hooks/edit/".$iId."/");
			else header("Location: ".Config::Get("host")."admin/hooks/");
			break;
		}else{
			$this->Template_AddMessage("Ошибка!","Некоторые поля были заполнены не верно!");
			$this->Template_Assign("sFormTitle", "Ошибка при сохранении хука");
		}
	case "edit":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="edit" ) $this->Template_Assign("sFormTitle", "Редактирование Hook");
		if( !$oHook ) $oHook = $this->Hook_GetHookById( intval(Router::GetParam(1)) );
		$aNodesChosen = $this->Hook_GetNodesByHook($oHook->getId());
		$this->Template_Assign("aNodesChosen", $aNodesChosen);

	case "add":
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление Hook");
		$this->Template_Assign("sFormAction", "update");

		if( !$oHook ){
			$oHook = Engine::GetEntity('Hook');
			$oHook->setSort(500);
			$oHook->setActive(1);
		}
		$aHooksAvailable = $this->Hook_GetAvailableHookList();
		$aGroups = $this->Hook_GetGroups();
		$aNodes = $this->Node_GetNodesTreeByParent(0, $this->User_GetNodesAvailable());

		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddCss($this->sTemplatePath."assets/css/hooks.css");
		
		//$this->Template_AddJs($this->sTemplatePath."assets/uniform/jquery.uniform.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");
		$this->Template_AddJs($this->sTemplatePath."assets/js/hooks.js");

		$this->Template_Assign("oHook", $oHook);
		$this->Template_Assign("aGroups", $aGroups);
		$this->Template_Assign("aNodes", $aNodes);
		$this->Template_Assign("aHooksAvailable", $aHooksAvailable);
		$this->SetTemplate("hooks/hook_form.tpl");
	
		break;

	case "delete":
		if( !$this->AccessCheck("W") ) break;
		if( is_numeric( Router::GetParam(1) ) ){
			$this->Hook_Delete( Router::GetParam(1) );
		}
		header("Location: ".Config::Get("host")."admin/hooks/");
		exit;
		break;

	case "deleteall":
		if( !$this->AccessCheck("W") ) break;
		if( $aHookIds = explode(',', Router::GetParam(1)) ){
			foreach ($aHookIds as $iHookId){
				$this->Hook_Delete( intval($iHookId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;

	case "activate":
		if( !$this->AccessCheck("V") ) break;
		$sId = intval(Router::GetParam(1));
		if( $this->Hook_Activate($sId) ){
			$result['state']="success";
			$result['msg']=1;
		}else $result['state']="error";
		echo json_encode($result);
		exit;
		break;

	case "deactivate":
		if( !$this->AccessCheck("V") ) break;
		$sId = intval(Router::GetParam(1));
		if( $this->Hook_Deactivate($sId) ){
			$result['state']="success";
			$result['msg']=0;
		}else $result['state']="error";
		echo json_encode($result);
		exit;
		break;

	case "sort":
		if( !$this->AccessCheck("V") ) break;
		$oHook = $this->Hook_GetHookById(intval(Router::GetParam(1)));
		$sSortAction=Router::GetParam(2);
		
		$this->Hook_Sort($oHook, $sSortAction);
		$aHooks=$this->Hook_GetList();
		$this->Template_Assign("aHooks", $aHooks);
		$this->SetTemplate("hooks/hook_list_portlet.tpl");
		break;

	case "params":
		if( !$this->AccessCheck("V") ) break;
		$iHookId 	= intval(Router::GetParam(2));
		if($iHookId) $oHook = $this->Hook_GetHookById($iHookId);
		else $oHook = Engine::GetEntity("Hook");

		$sType = Router::GetParam(1);

		$oAbstractHook = Engine::GetEntity("Hook");
		$oAbstractHook->setType($sType);
		$sName = $oAbstractHook->getName();
		$sComponent = $oAbstractHook->getComponent();
		unset($oAbstractHook);

		$aParams = $this->Hook_GetConfig($sName, $sComponent);
		if( $oHook->getType() == $sType ){
			while( list($sParam, $aParam) = each($aParams) ){
				$sValue = $oHook->getParam($sParam);
				if( isset($sValue) ) $aParams[$sParam]["default"] = $sValue;
			}
		}
		$this->Template_Assign("aParams", $aParams);
		$this->Template_SetJs($this->sTemplatePath."assets/js/params.js");
		$this->SetTemplate("params_form.tpl");
		break;

	/*GROUPS*/
	case "groups":
		if( !$this->AccessCheck("R") ) break;
		$aGroups = $this->Hook_GetGroups();
		$this->Template_Assign("aGroups", $aGroups);
		$this->Template_Assign("sFormTitle", "Список групп хуков");
		$this->Template_AddJs($this->sTemplatePath."assets/js/hooks.js");
		$this->SetTemplate("hooks/group_list.tpl");
		break;

	case "groupupdate":
		if( !$this->AccessCheck("V") ) break;
		if (getRequest("id", null, "id")) $oGroup=$this->Hook_GetGroupById(intval(getRequest("id")));
		if (!$oGroup) $oGroup=Engine::GetEntity('Hook', null, "Group");
		
		$oGroup->setName(getRequest('name'));
		$oGroup->setDesc(getRequest('desc'));

		if( $oGroup->getName() ){
			if (getRequest("id")){
				$this->Hook_UpdateGroup($oGroup);
			}else{
				$oGroup=$this->Hook_AddGroup($oGroup);
			}
			$iId=$oGroup->getId();

			if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/hooks/groupedit/".$iId."/");
			else header("Location: ".Config::Get("host")."admin/hooks/groups/");
			break;
		}else{
			$this->Template_AddMessage("Ошибка!","Некоторые поля были заполнены не верно!");
			$this->Template_Assign("sFormTitle", "Ошибка при сохранении группы");
		}
	case "groupedit":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="groupedit" ) $this->Template_Assign("sFormTitle", "Редактирование Группы Hook");
		if( !$oGroup ) $oGroup = $this->Hook_GetGroupById( intval(Router::GetParam(1)) );

	case "groupadd":
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление Группы Hook");
		$this->Template_Assign("sFormAction", "groupupdate");

		if( !$oGroup ){
			$oGroup = Engine::GetEntity('Hook', null, 'Group');
		}

		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/css/hooks.css");
		
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/js/hooks.js");

		$this->Template_Assign("oGroup", $oGroup);
		$this->SetTemplate("hooks/group_form.tpl");
	
		break;

	case "groupdelete":
		if( !$this->AccessCheck("W") ) break;
		if( is_numeric( Router::GetParam(1) ) ){
			$this->Hook_DeleteGroup( Router::GetParam(1) );
		}
		header("Location: ".Config::Get("host")."admin/hooks/groups/");
		exit;
		break;

	case "groupdeleteall":
		if( !$this->AccessCheck("W") ) break;
		if( $aGroupIds = explode(',', Router::GetParam(1)) ){
			foreach ($aGroupIds as $iGroupId){
				$this->Hook_DeleteGroup( intval($iGroupId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;

	default:
		if( !$this->AccessCheck("R") ) break;
		$aHooks = $this->Hook_GetList();
		$this->Template_Assign("aHooks", $aHooks);
		$this->Template_Assign("sFormTitle", "Список хуков");
		$this->Template_AddJs($this->sTemplatePath."assets/js/hooks.js");
		$this->SetTemplate("hooks/hook_list.tpl");
		break;
}
