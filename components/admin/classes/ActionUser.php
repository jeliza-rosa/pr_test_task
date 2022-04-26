<?
	$this->Template_SetPageTitle("Пользователи");
	$this->Template_AddJs($this->sTemplatePath."assets/js/users.js");
	$this->Template_Assign("sPageTitleSmall", "управление доступами к админпанели сайта");
	$this->Template_Assign("sAction", "users");

	$sEvent=Router::GetParam(0);
	switch ($sEvent){
		case "update":
			if( !$this->AccessCheck("V") ) break;
			
			if (getRequest("id")) $oUser=$this->User_GetUserById(intval(getRequest("id")));
			if (!$oUser) {
				$oUser=Engine::GetEntity('User');
				$oUser->setRegdate( date("Y-m-d H:i:s") );
			}
			
			$oUser->setLogin(getRequest('login'));
			$oUser->setGroup(getRequest('group'));
			$oUser->setEmail(getRequest('email'));
			$oUser->setName(getRequest('name'));
			$oUser->setActive(getRequest('active'));
			
			if( getRequest('changepass') ) $oUser->setPassword( getRequest('password-first', null, 'password'), getRequest('password-second', null, 'password') );

			//Validation
			if(	getRequest('login', null, 'login')!==false && 
				$oUser->getPassword()
			){
				if (getRequest("id", null, 'id')){
					$this->User_Update($oUser);
				}else{
					$oUser=$this->User_Add($oUser);
				}
				$iId=$oUser->getId();

				if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/users/edit/".$iId."/");
				else header("Location: ".Config::Get("host")."admin/users/");
				break;
			}else{
				if( !$oUser->getPassword() )
					$this->Template_Assign("sErrorMsg", "Парль введен некорректно!");
				else 
					$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно");
				$this->Template_Assign("sFormTitle", "Ошибка при сохранении пользователя");
			}
		case "edit":
			if( !$this->AccessCheck("V") ) break;

			if( $sEvent=="edit" ) $this->Template_Assign("sFormTitle", "Редактирование пользователя");
			if( !$oUser ) $oUser=$this->User_GetUserById(intval( Router::GetParam(1) ));
		case "add":
			if( !$this->AccessCheck("V") ) break;

			if( $sEvent=="add" ) $this->Template_Assign("sFormTitle", "Добавление пользователя");

			if( !$oUser ) $oUser = Engine::GetEntity('User');
			if( !is_numeric($oUser->getActive()) ) $oUser->setActive(1);

			$aGroups=$this->User_GetGroups();

			$this->Template_Assign("aGroups", $aGroups);
			$this->Template_Assign("oUser", $oUser);

			$this->Template_Assign("sFormAction", "update");
			$this->Template_Assign("iPassCheck", ($oUser->getPassword()?1:0) );
			$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
			$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
			$this->SetTemplate("users/user_form.tpl");
			break;

		case "delete":
			if( !$this->AccessCheck("W") ) break;

			if( is_numeric( Router::GetParam(1) ) ){
				$this->User_Delete( intval(Router::GetParam(1)) );
			}
			header("Location: ".Config::Get("host")."admin/users/");
			exit;
			break;

		case "deleteall":
			if( !$this->AccessCheck("W") ) break;
			
			if( $aUsers = $checked=explode(',', Router::GetParam(1)) ){
				foreach ($aUsers as $iUserId){
					$this->User_Delete( intval($iUserId) );
				}
			}
			$result['state']="success";
			$result['msg']=0;
			echo json_encode($result);
			exit;
			break;

		case "activate":
			if( !$this->AccessCheck("V") ) break;
			$sId = intval(Router::GetParam(1));//1
			if ($this->User_Activate($sId)){ 
				$result['state']="success";
				$result['msg']=1;
			}else $result['state']="error";
			echo json_encode($result);
			exit;
			break;
		case "deactivate":
			if( !$this->AccessCheck("V") ) break;
			$sId = intval(Router::GetParam(1));
			if ($this->User_Deactivate($sId)){
				$result['state']="success";
				$result['msg']=0;
			}else $result['state']="error";
			echo json_encode($result);
			exit;
			break;


		case "groups":
			if( !$this->AccessCheck("R") ) break;
			
			$aGroups = $this->User_GetGroups();
			$this->Template_Assign("aGroups", $aGroups);
			$this->SetTemplate("users/groups_list.tpl");
			break;

		case "updategroup":
			if( !$this->AccessCheck("V") ) break;

			if (getRequest("id")) $oGroup=$this->User_GetGroupById(intval(getRequest("id")));
			if (!$oGroup) {
				$oGroup=Engine::GetEntity('User', null, "Group");
			}

			$aAccesses = getRequest('accesses');
			$aValues = getRequest('value');
			foreach ( getRequest('node') as $iKey => $sValue) {
				if( $sValue ){
					$aAccesses["node".$sValue] = $aValues[$iKey];
				}
			}
	
			$oGroup->setName( getRequest('name') );
			$oGroup->setAccesses( $aAccesses );
			$oGroup->setDesc( getRequest('desc') );
			
			//Validation
			if(	getRequest('name', null, 'text')!==false or !count( $oGroup->getAccesses() ) ){ 
				if( getRequest("id", null, 'id') ){
					$this->User_UpdateGroup( $oGroup );
				}else{
					$oGroup=$this->User_AddGroup( $oGroup );
				}
				$iId=$oGroup->getId();

				if (getRequest("apply")) header("Location: ".Config::Get("host")."admin/users/editgroup/".$iId."/");
				else header("Location: ".Config::Get("host")."admin/users/groups/");
				break;
			}else{
				$this->Template_Assign("sErrorMsg", "Некоторые поля были заполнены не верно");
				$this->Template_Assign("sFormTitle", "Ошибка при сохранении группы");
			}
		case "editgroup":
			if( !$this->AccessCheck("V") ) break;
			if( $sEvent=="edit" ) $this->Template_Assign("sFormTitle", "Редактирование группы");
			if( !$oGroup ) $oGroup=$this->User_GetGroupById(intval( Router::GetParam(1) ));
		case "addgroup":
			if( !$this->AccessCheck("V") ) break;
			if($sEvent=="add") $this->Template_Assign("sFormTitle", "Добавление группы");

			if( !$oGroup ){ 
				$oGroup = Engine::GetEntity('User', null, "Group");
				$oGroup->setAccesses( $this->User_GetBlankAccesses() );
			}
			
			$aNodes=$this->Node_GetNodesTreeByParent(0);
			$this->Template_Assign("aNodes", $aNodes);
			$this->Template_Assign("oGroup", $oGroup);
			$this->Template_Assign("aAccesses", $this->User_GetAccessTitles() );
			$this->Template_Assign("aValues", $this->User_GetAccessValues() );

			$this->Template_Assign("sFormAction", "updategroup");
			$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
			$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
			$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
			$this->SetTemplate("users/group_form.tpl");
			break;

		case "deletegroup":
			if( !$this->AccessCheck("W") ) break;
			if( is_numeric( Router::GetParam(1) ) ){
				$this->User_DeleteGroup( intval(Router::GetParam(1)) );
			}
			header("Location: ".Config::Get("host")."admin/users/groups/");
			exit;
			break;

		case "deletegroupall":
			if( !$this->AccessCheck("W") ) break;
			if( $aGroups = $checked = explode(',', Router::GetParam(1)) ){
				foreach ($aGroups as $iGroupId){
					$this->User_DeleteGroup( intval($iGroupId) );
				}
			}
			$result['state']="success";
			$result['msg']=0;
			echo json_encode($result);
			exit;
			break;

		default:
			if( !$this->AccessCheck("R") ) break;
			$aUsers=$this->User_GetUsers();
			$this->Template_Assign("aUsers", $aUsers);
			$this->SetTemplate("users/users_list.tpl");
			$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
	}