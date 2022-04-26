<?
class ComponentCsv_HookCsv extends Hook {
	public function Init() {
		
	}
	public function Csv($aParams) {
		$iNode=intval($aParams['node']);
		if (!$iNode) return false;
		
		$aCsv=$this->ComponentCsv_ModuleCsv_GetCsvByNode($iNode);
		for($i=$aParams['limit']; $i<=count($aCsv); $i++) unset($aCsv[$i]);
		$this->Template_Assign('aCsv', $aCsv);
		
		if(!$aParams['template']) $aParams['template']="default";
		return $this->Template_Fetch("components/csv/templates/hooks/".$aParams['template']."/default.tpl");
	}
}