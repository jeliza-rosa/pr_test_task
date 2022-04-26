<?
class ComponentAdmin extends Component {
	private $sTemplatePath=null;
	public function Init(){		
		$oUserCurrent=$this->User_GetUserCurrent();
		if (!$oUserCurrent && Router::GetAction()!="login"){
			header("Location: ".Config::Get("host")."admin/login/");
			exit;
		}
		
		$this->SetDefaultAction('default');
		$sTemplatePath=$this->Template_GetHost()."components/admin/templates/default/";
		$this->sTemplatePath=$sTemplatePath;
		
		$this->Template_SetCss($sTemplatePath."assets/bootstrap/css/bootstrap.min.css");
		$this->Template_AddCss($sTemplatePath."assets/css/metro.css");
		$this->Template_AddCss($sTemplatePath."assets/bootstrap/css/bootstrap-responsive.min.css");
		$this->Template_AddCss($sTemplatePath."assets/font-awesome/css/font-awesome.css");
		$this->Template_AddCss($sTemplatePath."assets/css/style.css");
		$this->Template_AddCss($sTemplatePath."assets/css/style_responsive.css");
		$this->Template_AddCss($sTemplatePath."assets/css/style_default.css");
		$this->Template_AddCss($sTemplatePath."assets/gritter/css/jquery.gritter.css");
		$this->Template_AddCss($sTemplatePath."assets/uniform/css/uniform.default.css");
		$this->Template_AddCss($sTemplatePath."assets/bootstrap-daterangepicker/daterangepicker.css");
		$this->Template_AddCss($sTemplatePath."assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css");
		$this->Template_AddCss($sTemplatePath."assets/css/admin.css");
		//$this->Template_AddCss($sTemplatePath."assets/jqvmap/jqvmap/jqvmap.css");
		
		$this->Template_SetJs($sTemplatePath."assets/js/jquery-1.8.3.min.js");
		$this->Template_AddJs($sTemplatePath."assets/js/admin.js");
		$this->Template_AddJs($sTemplatePath."assets/breakpoints/breakpoints.js");
		$this->Template_AddJs($sTemplatePath."assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js");
		$this->Template_AddJs($sTemplatePath."assets/jquery-slimscroll/jquery.slimscroll.min.js");
		$this->Template_AddJs($sTemplatePath."assets/fullcalendar/fullcalendar/fullcalendar.min.js");
		$this->Template_AddJs($sTemplatePath."assets/bootstrap/js/bootstrap.min.js");
		$this->Template_AddJs($sTemplatePath."assets/js/jquery.blockui.js");
		$this->Template_AddJs($sTemplatePath."assets/js/jquery.cookie.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/jquery.vmap.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/maps/jquery.vmap.world.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js");
		//$this->Template_AddJs($sTemplatePath."assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js");
		//$this->Template_AddJs($sTemplatePath."assets/flot/jquery.flot.js");
		//$this->Template_AddJs($sTemplatePath."assets/flot/jquery.flot.resize.js");
		$this->Template_AddJs($sTemplatePath."assets/gritter/js/jquery.gritter.js");
		$this->Template_AddJs($sTemplatePath."assets/uniform/jquery.uniform.min.js");
		$this->Template_AddJs($sTemplatePath."assets/js/jquery.pulsate.min.js");
		$this->Template_AddJs($sTemplatePath."assets/bootstrap-daterangepicker/date.js");
		$this->Template_AddJs($sTemplatePath."assets/bootstrap-daterangepicker/daterangepicker.js");
		$this->Template_AddJs($sTemplatePath."assets/ckeditor/ckeditor.js");
		$this->Template_AddJs($sTemplatePath."assets/js/app.js");
		
		$this->Template_SetPath($this->Template_GetHost()."components/admin/templates/default/");
	}
	
	protected function RegisterActions() {
		$this->AddAction('components',	'ActionComponents');
		$this->AddAction('banners',		'ActionBanners');
		$this->AddAction('content',		'ActionContent');
		$this->AddAction('default',		'ActionDefault');
		$this->AddAction('files',		'ActionFiles');
		$this->AddAction('login',		'ActionLogin');
		$this->AddAction('logout',		'ActionLogout');
		$this->AddAction('nodes',		'ActionNodes');
		$this->AddAction('menu',		'ActionMenu');
		$this->AddAction('users',		'ActionUsers');
		$this->AddAction('cache',		'ActionCache');
		$this->AddAction('logs',		'ActionLogs');
		$this->AddAction('hooks',		'ActionHooks');
		$this->AddAction('templates',	'ActionTemplates');
		//$this->AddAction('configs',		'ActionConfigs');
		$this->AddActionPreg('/^new$/i','/^(page(\d+))?$/i','ActionDefault');
	}
		
	/*protected function ActionNodesByParent($iParentId, $aAvailable){
		$aNodes=$this->Node_GetNodesByParent($iParentId);
		$aTree=array();
		foreach($aNodes as $oNode){
				$aTmp=array();
				if( empty($aAvailable) || in_array($oNode->getId(), $aAvailable)  ) {
					$aTmp['node']=$oNode;
				}else{
					$aTmp['node']=Engine::GetEntity("Node", array("node_title"=>"--"));
				}
				$aChilds=$this->ActionNodesByParent($oNode->getId(), $aAvailable);
				if ($aChilds) $aTmp['childs']=$aChilds;
				$aTree[]=$aTmp;
		}
		
		return $aTree;
	}*/
	
	protected function ActionDefault() {
		require("components/admin/classes/ActionDefault.php");
	}
	
	protected function ActionContent() {
		require("components/admin/classes/ActionContent.php");
	}
	
	protected function ActionNodes() {
		require("components/admin/classes/ActionNodes.php");
	}
	
	protected function ActionMenu() {
		require("components/admin/classes/ActionMenu.php");
	}
	
	protected function ActionFiles() {
		require("components/admin/classes/ActionFiles.php");
	}
	
	protected function ActionComponents() {
		require("components/admin/classes/ActionComponents.php");
	}

	protected function ActionBanners() {
		require("components/admin/classes/ActionBanners.php");
	}

	protected function ActionHooks() {
		require("components/admin/classes/ActionHooks.php");
	}

	/*protected function ActionConfigs() {
		require("components/admin/classes/ActionConfigs.php");
	}*/

	protected function ActionTemplates() {
		require("components/admin/classes/ActionTemplates.php");
	}
	
	protected function ActionLogin() {
		if (getRequest("sub")){
			if (getRequest("login") && getRequest("password")){
				if ($oUser=$this->User_GetUserByLogin(getRequest("login"), getRequest("password"))){
					$this->User_SetUserSession($oUser);
					$this->Log_Add(Engine::GetEntity("Log", array("log_user" => $oUser->getId(), "log_type" => "login-success", "log_text" => "Пользователь ".$oUser->getLogin()." авторизировался.")));
					header("Location: ".Config::Get("host")."admin/");
					exit;
				}else{
					$this->Template_AddMessage("Ошибка!","Неверное имя пользователя или пароль.");
				}	
			}else{
				$this->Template_AddMessage("Ошибка!","Неверное имя пользователя или пароль.");
			}
		}
		$this->SetTemplate("login.tpl");
	}
	
	protected function ActionLogout() {
		$this->User_ClearUserSession();
		header("Location: ".Config::Get("host")."admin/login/");
		exit;
	}

	protected function ActionUsers() {
		require("components/admin/classes/ActionUser.php");
	}
	
	protected function ActionLogs() {
		$this->Template_SetPageTitle("Журнал событий");
		$this->Template_Assign("sPageTitleSmall", "активность на сайте");
		$this->Template_Assign("sAction", "logs");
		$aLogs = $this->Log_GetLogs(500);
		$this->Template_Assign("aLogs", $aLogs);
		$this->SetTemplate("logs/logs_list.tpl");
	}
	
	protected function ActionCache() {
		$this->Template_SetPageTitle("Кеширование");
		$this->Template_Assign("sPageTitleSmall", "управление кешированием");
		$this->Template_Assign("sAction", "cache");
		
		$sEvent=Router::GetParam(0);
		switch ($sEvent){
			case "clean":
				$oEngine=Engine::getInstance();
				$oEngine->Cache_Clean();
				if (!$_SERVER['HTTP_REFERER'] || $_SERVER['HTTP_REFERER']==Config::Get("host")."admin/cache/clean/") $_SERVER['HTTP_REFERER']="/admin/";
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit();
				break;
			default:
				
				break;
		}
	}
	/*protected function ActionDenied() {
		$this->Template_SetPageTitle("Доступ запрещен");
		$this->Template_Assign("sPageTitleSmall", "увы...");
		$this->SetTemplate("denied/denied.tpl");
	}*/
}