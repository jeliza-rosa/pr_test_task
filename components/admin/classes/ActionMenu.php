<?
$this->Template_SetPageTitle("Меню");
$this->Template_AddJs($this->sTemplatePath."assets/js/menu.js");
$this->Template_Assign("sPageTitleSmall", "управление меню сайта");
$this->Template_Assign("sAction", "menu");

$sEvent=Router::GetParam(0);

// function RemoveImage($sFileName){
// 	return unlink($_SERVER["DOCUMENT_ROOT"].$sFileName);
	
// } 

switch ($sEvent){
	/*Editing menu*/
	case "edit":
		if( !$this->AccessCheck("V") ) break;
		$this->Template_Assign("sFormTitle", "Редактирование меню");
						
		$iMenuId=intval(Router::GetParam(1));
		$oMenu=$this->Menu_GetMenuById($iMenuId);
	case "add":
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление меню");
		$this->Template_Assign("sFormAction", "update");
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		
		if( !$oMenu ) $oMenu = Engine::GetEntity('Menu');
		if( !is_numeric($oMenu->getActive()) ) $oMenu->setActive(1);
		
		$this->Template_Assign("oMenu", $oMenu);
		
		$this->SetTemplate("menu/menu_form.tpl");
		break;
	case "update":
		if( !$this->AccessCheck("V") ) break;
		if (getRequest("id")) $oMenu=$this->Menu_GetMenuById(intval(getRequest("id")));
		if (!$oMenu) $oMenu=Engine::GetEntity('Menu');
		
		$oMenu->setTitle(getRequest('title'));
		$oMenu->setName(getRequest('name'));
		$oMenu->setActive(getRequest('active'));
		
		if (getRequest("id")){
			$this->Menu_Update($oMenu);
		}else{
			$oMenu=$this->Menu_Add($oMenu);
		}
		$iId=$oMenu->getId();
		
		if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/menu/edit/".$iId."/");
		else header("Location: ".Config::Get("host")."admin/menu/");
		break;
	case "delete":
		if( !$this->AccessCheck("W") ) break;
		if( is_numeric( Router::GetParam(1) ) ){
			$this->Menu_Delete( intval(Router::GetParam(1)) );
			$this->Menu_DeleteItemsByMenu( intval(Router::GetParam(1)) );
		}
		header("Location: ".Config::Get("host")."admin/menu/");
		exit;
		break;

	case "deleteall":
		if( !$this->AccessCheck("W") ) break;
		if( $aMenus = explode(',', Router::GetParam(1)) ){
			foreach ($aMenus as $iMenuId){
				$this->Menu_Delete( intval($iMenuId) );
				$this->Menu_DeleteItemsByMenu( intval($iMenuId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;
	/*Editing menu Items*/
	case "items":
		if( !$this->AccessCheck("R") ) break;
		$this->Template_Assign("sFormTitle", "Структура меню");

		$iMenuId=intval(Router::GetParam(1));
		$aItems=$this->Menu_GetMenuStructure($iMenuId);
		$this->Template_Assign("aItems", $aItems);
		$this->Template_Assign("iMenuId", $iMenuId);
		$this->SetTemplate("menu/item_list.tpl");
		break;
	case "updateitem":
		if( !$this->AccessCheck("V") ) break;
		if( getRequest("id") ) $oItem=$this->Menu_GetItemById(intval(getRequest("id")));
		if( !$oItem ){
			$oItem=Engine::GetEntity('Menu', array(), "Item");
			$oItem->setSort(500);
		}
		
		$oItem->setTitle(	getRequest('title')	);
		$oItem->setNode(	getRequest('node')	);
		$oItem->setUrl(		getRequest('url')	);
		$oItem->setParent(	getRequest('parent'));
		$oItem->setMenu(	getRequest('menu')	);
		$oItem->setActive(	getRequest('active'));
		
		if( !$oItem->setUploadedImg() ) $this->Template_AddMessage("Ошибка!","Не получилось загрузить фото!");
		
		//Validation
		if(	getRequest('title', null, 'text')!==false && 
			getRequest('parent', null, 'id')!==false &&
			getRequest('menu', null, 'id')!==false
		){ 
			if (getRequest("id", null, 'id')){
				$this->Menu_UpdateItem($oItem);
			}else{
				$oItem=$this->Menu_AddItem($oItem);
			}
			$iId=$oItem->getId();

			if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/menu/edititem/".$iId."/");
			else header("Location: ".Config::Get("host")."admin/menu/items/".$oItem->getMenu()."/");
			break;
		}else{
			$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно");
			$this->Template_Assign("sFormTitle", "Ошибка при сохранении пункта меню");
			$iMenuId=$oItem->getMenu();
		}
	case "edititem":
		if( !$this->AccessCheck("V") ) break;
		if( $sEvent=="edititem" ) $this->Template_Assign("sFormTitle", "Редактирование пункта меню");
		if( !$oItem )   $oItem=$this->Menu_GetItemById(intval( Router::GetParam(1) ));
		if( !$iMenuId ) $iMenuId=$oItem->getMenu();
	case "additem":
		if( !$this->AccessCheck("V") ) break;
		if($sEvent=="additem") $this->Template_Assign("sFormTitle", "Добавление пункта меню");

		if( !$oItem )   $oItem = Engine::GetEntity('Menu', array(), "Item");
		if( !$iMenuId ) $iMenuId = intval(Router::GetParam(1));
		$aItems=$this->Menu_GetMenuStructure($iMenuId);

		if( !is_numeric($oItem->getActive()) ) $oItem->setActive(1);

		$aNodes=$this->Node_GetNodesTreeByParent(0);
		$this->Template_Assign("aNodes", $aNodes);
		$this->Template_Assign("iParentItem", intval(Router::GetParam(2)));
		$this->Template_Assign("iMenuId", $iMenuId);
		$this->Template_Assign("aItems", $aItems);
		$this->Template_Assign("oItem", $oItem);
		

		$this->Template_Assign("sFormAction", "updateitem");
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->SetTemplate("menu/item_form.tpl");
		break;
	case "deleteitem":
		if( !$this->AccessCheck("W") ) break;
		if( is_numeric( Router::GetParam(1) ) ){
			$iMenuId = $this->Menu_DeleteItem( intval(Router::GetParam(1)) );
		}
		header("Location: ".Config::Get("host")."admin/menu/items/".$iMenuId."/");
		exit;
		break;
	case "deleteallitem":
		if( !$this->AccessCheck("W") ) break;
		if( $aItems = explode(',', Router::GetParam(1)) ){
			foreach ($aItems as $iItemId){
				$this->Menu_DeleteItem( intval($iItemId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
		break;

	case "removeimage":
		if( is_numeric(Router::GetParam(1)) ){
			$iItemId = intval(Router::GetParam(1));
			$oItem = $this->Menu_GetItemById( $iItemId );
			$this->Image_Delete($oItem->getImg());
			$oItem->setImg("");
			$this->Menu_UpdateItem($oItem);
			exit;
		}
		break;

	case "sort":
		if( !$this->AccessCheck("V") ) break;
		$oItem = $this->Menu_GetItemById(intval(Router::GetParam(1)));
		$sSortAction=Router::GetParam(2);
		
		$this->Menu_SortItem($oItem, $sSortAction);
		
		$iMenuId=intval($oItem->getMenu());
		$aItems=$this->Menu_GetMenuStructure($iMenuId);
		$this->Template_Assign("aItems", $aItems);
		$this->Template_Assign("iMenuId", $iMenuId);

		$this->SetTemplate("menu/items_list_portlet.tpl");
		break;

	case "itemactivation":
		if( !$this->AccessCheck("V") ) break;
		$sMode = Router::GetParam(1);
		$sId = intval(Router::GetParam(2));
		$oItem = $this->Menu_GetItemById($sId);
		//передается именно объект, чтоб можно было очистить кэш списка пунктов меню
		if($sMode=="activate"){
			if( $this->Menu_ActivateItem($oItem) ){
				$result['state']="success";
				$result['msg']=1;
			}else $result['state']="error";
		}elseif($sMode=="deactivate"){
			if ($this->Menu_DeactivateItem($oItem)){ 
				$result['state']="success";
				$result['msg']=0;
			}else $result['state']="error";
		}else{
			$result['state']="error";	
		}
		echo json_encode($result);
		exit;
		break;

	case "activate":
		if( !$this->AccessCheck("V") ) break;
		$sId = intval(Router::GetParam(1));
		if( $this->Menu_Activate($sId) ){
			$result['state']="success";
			$result['msg']=1;
		}else $result['state']="error";
		echo json_encode($result);
		exit;
		break;

	case "deactivate":
		if( !$this->AccessCheck("V") ) break;
		$sId = intval(Router::GetParam(1));
		if( $this->Menu_Deactivate($sId) ){
			$result['state']="success";
			$result['msg']=0;
		}else $result['state']="error";
		echo json_encode($result);
		exit;
		break;

	default:
		if( !$this->AccessCheck("W") ) break;
		$aMenu=$this->Menu_GetMenu();
		$this->Template_Assign("aMenu", $aMenu);
		$this->SetTemplate("menu/menu_list.tpl");
}
