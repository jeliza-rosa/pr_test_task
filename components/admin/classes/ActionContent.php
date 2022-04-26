<?
if( !$this->AccessCheck("R") ) return;
$this->Template_SetPageTitle("Дерево разделов");
$this->Template_Assign("sPageTitleSmall", "структура сайта");
$this->Template_Assign("sAction", "nodes");
$this->Template_AddJs($this->Template_GetHost()."components/admin/templates/default/assets/js/getParams.js");

$iNodeId=intval(Router::GetParam(0));

$oNode = $this->Node_GetNodeById($iNodeId);
if( !$oNode ) return $this->NotFound();
if( !$oNode->getComponentObject() )	return $this->NotFound();

$sClassAdmin="Component".ucfirst($oNode->getComponentObject()->getName())."Admin";
include_once("components/".$oNode->getComponentObject()->getName()."/classes/".$sClassAdmin.".class.php");
$this->oComponentAdmin = new $sClassAdmin();
$this->oComponentAdmin->Exec($sClassAdmin);

$this->Template_Assign("oContentNode", $oNode);

$aParams = getRequest("params");
if(is_array($aParams) && !empty($aParams) ) $this->Component_SaveNodeParamsFromArray($oNode, $aParams);

/*$aParams = $oNode->getComponentObject()->getParams();
while( list($sParam, $aParam) = each($aParams) ){
	if( $oParam = $oNode->getCurrentParam($sParam) )
		$aParams[$sParam]["selected"] = $oParam->getVal();
}

$this->Template_Assign("aParams", $aParams);

$this->Template_Assign("iContentNodeId", $iNodeId);
*/