<?
	$this->Template_SetPageTitle("Шаблоны сайта");
	$this->Template_AddJs($this->sTemplatePath."assets/js/templates.js");
	$this->Template_AddCss($this->sTemplatePath."assets/css/templates.css");
	$this->Template_Assign("sPageTitleSmall", "управление шаблонами сайта");
	$this->Template_Assign("sAction", "templates");

	$sEvent=Router::GetParam(0);
	switch ($sEvent){
		
		case "delete":
			if( !$this->AccessCheck("W") ) break;

			$result = array();
			$iId = Router::GetParam(1); 
			
			if( is_numeric($iId) ){
				$this->Template_DeleteCondition( $iId );
				$result['state']="success";
				$result['msg']=0;
			}

			echo json_encode($result);
			exit;
			break;

		case "activate":
			if( !$this->AccessCheck("V") ) break;
			$sId = intval(Router::GetParam(1));
			if( $this->Template_ActivateCondition($sId) ){
				$result['state']="success";
				$result['msg']=1;
			}else $result['state']="error";
			echo json_encode($result);
			exit;
			break;

		case "deactivate":
			if( !$this->AccessCheck("V") ) break;
			$sId = intval(Router::GetParam(1));
			if( $this->Template_DeactivateCondition($sId) ){
				$result['state']="success";
				$result['msg']=0;
			}else $result['state']="error";
			echo json_encode($result);
			exit;
			break;

		case "update":
			if( !$this->AccessCheck("V") ) break;

			$bCheck = true;

			$aIds		= getRequest('id');
			$aTemplates = getRequest('template');
			$aTypes 	= getRequest('type');
			$aVars		= getRequest('var');
			$aValues 	= getRequest('value');
			$aNode 		= getRequest('node');
			$aSort 		= getRequest('sort');
			$aActive	= getRequest('active');

			$aConditions = array();

			foreach ($aIds as $i => $iId){
				if( is_numeric($iId) ) $oCondition = $this->Template_GetConditionById($iId);
				else $oCondition = Engine::GetEntity("Template", null, "Condition");

				$oCondition->setTemplate(	$aTemplates[$i]	);
				$oCondition->setType(		$aTypes[$i]		);
				$oCondition->setVar(		$aVars[$i]		);
				$oCondition->setValue(		$aValues[$i]	);
				$oCondition->setNode(		$aNode[$i]		);
				$oCondition->setSort(		$aSort[$i]		);
				$oCondition->setActive(		$aActive[$i]	);

				$aConditions[] = $oCondition;

				if( !$oCondition->getTemplate() or //валидация
					!$oCondition->getType() or 
					(	$oCondition->getType()=="get" &&
						!$oCondition->getVar() &&
						!$oCondition->getValue()
					) or
					(
						in_array($oCondition->getType(), array("node", "nodetree")) &&
						!is_numeric($oCondition->getNode())
					) or
					!in_array($oCondition->getType(), array("get","node","nodetree"))
				){//если где ошибка, все к чертям
					$bCheck = false;
				}
			}

			if( !$bCheck ){ // если валидация не прошла, отправляем исправлять ошибки
				$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно!");
				$this->Template_Assign("sFormTitle", "Ошибка при сохранении условий");
			}else{ //если все пучком, записываем
				foreach($aConditions as $oCondition){
					if (is_numeric($oCondition->getId())){
						$this->Template_UpdateCondition($oCondition);
					}else{
						$oCondition=$this->Template_AddCondition($oCondition);
					}
				}
				if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/templates/");
				else header("Location: ".Config::Get("host")."admin/");
			}

		default:
			if( !$this->AccessCheck("R") ) break;

			$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
			$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
			
			$aTemplatesAvailable = $this->Template_GetTemplatesAlailable();
			$aConditionTypes = $this->Template_GetConditionTypes();
			$aNodeTree = $this->Node_GetNodesTreeByParent(0);
			if( $sEvent!="update" ) $aConditions = $this->Template_GetConditionsList();

			$sDefaultTemplate = basename( Config::Get("template.path") );
			$oDefaultTemplate = $aTemplatesAvailable[$sDefaultTemplate];

			$this->Template_Assign("oDefaultTemplate", $oDefaultTemplate);
			$this->Template_Assign("aConditions", $aConditions);
			$this->Template_Assign("aTemplatesAvailable", $aTemplatesAvailable);
			$this->Template_Assign("aConditionTypes", $aConditionTypes);
			$this->Template_Assign("aNodeTree", $aNodeTree);
			$this->Template_Assign("sFormAction", "update");
			if( $sEvent!="update" )	$this->Template_Assign("sFormTitle", "Установка шаблонов");
			$this->SetTemplate("templates/form.tpl");
	}