<?
$aNodesAvailable = array();
if( $this->User_GetUserCurrent()->getAccess("nodes") == "D" ) $aNodesAvailable = $this->User_GetNodesAvailable("R");
$aNodes=$this->Node_GetNodesTreeByParent(0, $aNodesAvailable);

$this->Template_AddJs($this->sTemplatePath."assets/js/nodes.js");
$this->Template_SetPageTitle("Дерево разделов");
$this->Template_Assign("sPageTitleSmall", "структура сайта");
$this->Template_Assign("sAction", "nodes");
		
$sEvent=Router::GetParam(0);
switch ($sEvent){
	case "update":
		if( !$this->AccessCheck("V") ) break;
		if ( getRequest("id", null, 'id') ) 
			$oNode=$this->Node_GetNodeById(getRequest("id", null, 'id'));
		else{
			$oNode=Engine::GetEntity('Node');
			$oNode->setCreatedate( date("Y-m-d H:i:s") );
			$oNode->setImage("");
		}
		
		$oNode->setParent(getRequest('parent'));
		$oNode->setTitle(getRequest('title'));
		$oNode->setUrl(getRequest('url'));
		$oNode->setComponent(getRequest('component'), null, "id");
		$oNode->setSort(getRequest('sort'));
		$oNode->setActive(getRequest('active'));
		$oNode->setDescription(getRequest('description'));
		$oNode->setSeoTitle(getRequest('seo_title'));
		$oNode->setSeoKeywords(getRequest('seo_keywords'));
		$oNode->setSeoDescription(getRequest('seo_description'));
		$oNode->setModifieddate( date("Y-m-d H:i:s") );
		if( !$oNode->setUploadedImg() ) $this->Template_AddMessage("Ошибка!","Не получилось загрузить фото!");

		if( getRequest('url')!==false && getRequest("title")!==false ){
			if( $oNode->getId() ){
				$this->Node_Update( $oNode );
			}else{
				$oNode=$this->Node_Add( $oNode );
			}
			$iId=$oNode->getId();
			
			/*----PARAMS ----*/
			$this->Component_SaveNodeParamsFromArray($oNode, getRequest("params"));

			if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/nodes/edit/".$iId."/");
			else header("Location: ".Config::Get("host")."admin/nodes/");
			break;
		}else{
			//$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно");
			$this->Template_AddMessage("Ошибка!","Некоторые поля были заполнены не верно!");
			$this->Template_Assign("sFormTitle", "Ошибка при сохранении пользователя");
		}
	case "edit":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="edit" ) $this->Template_Assign("sFormTitle", "Редактирование раздела");
		if( !$oNode ) $oNode=$this->Node_GetNodeById(intval( Router::GetParam(1) ));
	case "add":
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление раздела");
		$this->Template_Assign("sFormAction", "update");

		if( !$oNode ){ 
			$oNode = Engine::GetEntity('Node', null);
			$oNode->setActive(1);
			$oNode->setSort(500);
			$oDefaultComponent = $this->Component_GetComponentByName("page");
			$oNode->setComponent($oDefaultComponent?$oDefaultComponent->getId():2);
			$oNode->setParent(intval(Router::GetParam(1)));
		}

		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");

		$aComponents=$this->Component_GetComponents();
		$this->Template_Assign("aComponents", $aComponents);
		$this->Template_Assign("oNode", $oNode);
		$this->SetTemplate("nodes/nodes_form.tpl");
	
		break;

	case "delete":
		if( !$this->AccessCheck("W") ) break;
		$this->Node_Delete(intval(Router::GetParam(1)));
		header("Location: ".Config::Get("host")."admin/nodes/");
		break;
	case "deleteall":
		if( !$this->AccessCheck("W") ) break;
		$checked=explode(',', Router::GetParam(1));
		foreach($checked as $iNodeId){
			$this->Node_Delete(intval($iNodeId));
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;
	case "removeimage":
		if( is_numeric(Router::GetParam(1)) ){
			$iNodeId = intval(Router::GetParam(1));
			$oNode = $this->Node_GetNodeById( $iNodeId );
			$this->Image_Delete($oNode->getImage());
			$oNode->setImage("");
			$this->Node_Update($oNode);
			exit;
		}
		break;
	case "deactivate":
		if( !$this->AccessCheck("V") ) break;
		$sNodeId=intval(Router::GetParam(1));
		if ($this->Node_Deactivate($sNodeId)){ 
			$result['state']="success";
			$result['msg']=0;
		}
		else $result['state']="error";
		echo json_encode($result);
		exit;
		break;
	case "activate":
		if( !$this->AccessCheck("V") ) break;
		$sNodeId=intval(Router::GetParam(1));
		if ($this->Node_Activate($sNodeId)){ 
			$result['state']="success";
			$result['msg']=1;
		}
		else $result['state']="error";
		echo json_encode($result);
		exit;
		break;
	case "sort":
		if( !$this->AccessCheck("V") ) break;
		$iNodeId=intval(Router::GetParam(1));
		$sSortAction=Router::GetParam(2);
		$this->Node_Sort($iNodeId, $sSortAction);
		$aNodes=$this->Node_GetNodesTreeByParent(0, $aNodesAvailable);
		$this->SetTemplate("nodes/nodes_list_portlet.tpl");
		break;
	default:
		if(!$this->AccessCheck("R"))break;
		$this->SetTemplate("nodes/nodes_list.tpl");
		break;
}
$this->Template_Assign("aNodes", $aNodes);