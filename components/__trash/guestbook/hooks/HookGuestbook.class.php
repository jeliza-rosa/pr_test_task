<?
class ComponentNews_HookNews extends Hook {
	public function Init() {
		
	}
	public function News($aParams) {
		$iNode=intval($aParams['node']);
		if (!$iNode) return false;
		
		if (!isset($aParams['count']))
			$count=0;
		else
			$count=$aParams['count'];
			
		if (!isset($aParams['image']))
			$bImage=true;
		else
			$bImage=$aParams['image'];
		
		$aNews=$this->ComponentNews_ModuleNews_GetNewsByNode($iNode, $count);

		$this->Template_Assign('aNews', $aNews);
		$this->Template_Assign('bImage', $bImage);
		
		return $this->Template_Fetch("components/news/templates/hooks/".$aParams['template'].".tpl");
	}
}