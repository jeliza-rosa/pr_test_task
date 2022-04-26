<?
	$this->Template_SetPageTitle("Компоненты");
	$this->Template_Assign("sPageTitleSmall", "управление компонентами");
	$this->Template_Assign("sAction", "components");
	
	$sEvent=Router::GetParam(0);
	switch ($sEvent){
		case "update":
			if( !$this->AccessCheck("V") ) break;
			if (getRequest("id")) $oComponent=$this->Component_GetComponentById(intval(getRequest("id")));
			if (!$oComponent) {
				$oComponent=Engine::GetEntity('Component');
			}
			
			$oComponent->setTitle(getRequest('title'));
			$oComponent->setName(getRequest('name'));
			$oComponent->setActive(getRequest('active'));

			//Validation
			if(	getRequest('title') && getRequest('name')){
				if (getRequest("id", null, 'id')){
					$this->Component_Update($oComponent);
				}else{
					$oComponent=$this->Component_Add($oComponent);
				}
				$iId=$oComponent->getId();

				if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/components/edit/".$iId."/");
				else header("Location: ".Config::Get("host")."admin/components/");
				break;
			}else{
				$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно");
				$this->Template_Assign("sFormTitle", "Ошибка при сохранении");
			}
		case "edit":
			if( !$this->AccessCheck("V") ) break;
			if( $sEvent=="edit" ) $this->Template_Assign("sFormTitle", "Редактирование компонента");
			if( !$oComponent ) $oComponent=$this->Component_GetComponentById(intval( Router::GetParam(1) ));
			$oComponent->getAccess("components");
		case "add":
			if( !$this->AccessCheck("V") ) break;
			if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление компонента");

			if( !$oComponent ) $oComponent = Engine::GetEntity('Component');
			if( !is_numeric($oComponent->getActive()) ) $oComponent->setActive(1);

			$this->Template_Assign("oComponent", $oComponent);

			$this->Template_Assign("sFormAction", "update");
			$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
			$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
			$this->SetTemplate("components/component_form.tpl");
			break;
		case "delete":
			if( !$this->AccessCheck("W") ) break;
			if( is_numeric( Router::GetParam(1) ) ){
				$this->Component_Delete( Router::GetParam(1) );
			}
			header("Location: ".Config::Get("host")."admin/components/");
			exit;
			break;
		case "deleteall":
			if( !$this->AccessCheck("W") ) break;
			if( $aIds = explode(',', Router::GetParam(1)) ){
				foreach ($aIds as $iId){
					$this->Component_Delete( intval($iId) );
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
			if ($this->Component_Activate($sId)){ 
				$result['state']="success";
				$result['msg']=1;
			}else $result['state']="error";
			echo json_encode($result);
			exit;
			break;

		case "deactivate":
			if( !$this->AccessCheck("V") ) break;
			$sId = intval(Router::GetParam(1));
			if ($this->Component_Deactivate($sId)){
				$result['state']="success";
				$result['msg']=0;
			}else $result['state']="error";
			echo json_encode($result);
			exit;
			break;

		case "params":
			if( !$this->AccessCheck("V") ) break;
			$iComponentId 	= intval(Router::GetParam(1));
			$iNodeId 		= intval(Router::GetParam(2));
			$oComponent = $this->Component_GetComponentById( $iComponentId );

			$aNodeParams = $this->Component_GetParamsByNodeComponent($iNodeId, $iComponentId);
			$aParams = $this->Component_GetConfig($oComponent->getName()); //$oComponent->getParams();
			//var_dump($aParams);
			while( list($sParam, $aParam) = each($aParams) ){
				if( !( $oParam = $aNodeParams[$sParam] ) ) continue;
				$aParams[$sParam]["default"] = $oParam->getVal();
			}
			$this->Template_Assign("aParams", $aParams);
			$this->Template_SetJs($this->sTemplatePath."assets/js/params.js");
			$this->SetTemplate("params_form.tpl");
			break;

		default:
			if( !$this->AccessCheck("R") ) break;
			$aComponents=$this->Component_GetComponents();
			$this->Template_Assign("aComponents", $aComponents);
			$this->SetTemplate("components/components_list.tpl");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
			break;
	}