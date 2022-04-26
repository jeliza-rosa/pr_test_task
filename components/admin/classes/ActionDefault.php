<?
$sTemplatePath=$this->Template_GetHost()."components/admin/templates/default/";
$this->sTemplatePath=$sTemplatePath;
$this->Template_AddJs($sTemplatePath."assets/flot/jquery.flot.js");
$this->Template_AddJs($sTemplatePath."assets/flot/jquery.flot.resize.js");

$this->Template_SetPageTitle("Рабочий стол");
$this->Template_Assign("sPageTitleSmall", "статистика и другое");
$this->Template_Assign("sAction", "dashboard");

$aViews = $this->Stat_GetViewsByDates(date("Y-m-d", time()-60*60*24*30), date("Y-m-d"));
$aUniqViews = $this->Stat_GetUniqViewsByDates(date("Y-m-d", time()-60*60*24*30), date("Y-m-d"));
$iViews = $this->Stat_GetViewsByDate(date("Y-m-d"));

$aNodes=$this->Node_GetNodes();
$iDirSize = $this->Dashboard_GetFilesSize();
$iDbSize = $this->Dashboard_GetDbSize();
$aLogs = $this->Log_GetLogs(100);
$aUsers = $this->User_GetUsers();
$aMenu=$this->Menu_GetMenu();
$aBanners=$this->Banner_GetGroups();
$aHooks=$this->Hook_GetList();

$this->Template_Assign("iNodesCount", count($aNodes));
$this->Template_Assign("iDirSize", $iDirSize);
$this->Template_Assign("iDbSize", $iDbSize);
$this->Template_Assign("aViewsStat", $aViews);
$this->Template_Assign("aUniqViewsStat", $aUniqViews);
$this->Template_Assign("iViews", $iViews);
$this->Template_Assign("aLogs", $aLogs);
$this->Template_Assign("aUsers", $aUsers);
$this->Template_Assign("iMenuCount", count($aMenu));
$this->Template_Assign("iBannerCount", count($aBanners));
$this->Template_Assign("iHookCount", count($aHooks));

$this->SetTemplate("dashboard.tpl");