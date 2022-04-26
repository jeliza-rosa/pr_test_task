<?
class ComponentIblock_ModuleIblock extends Module {
	protected $oDb;
	public function Init() {
		// $this->oDb=Engine::GetDb(__CLASS__);
	}
/*	public function GetPageById($iId) {
		if (false === ($data = $this->Cache_Get("page_{$iId}"))) {
			$data=$this->oDb->GetPageById($iId);
			$this->Cache_Set("page_{$iId}", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
	public function GetPageByNode($iNodeId) {
		if (false === ($data = $this->Cache_Get("page_node_{$iNodeId}"))) {
			$data=$this->oDb->GetPageByNode($iNodeId);
			$this->Cache_Set("page_node_{$iNodeId}", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
	public function Add(ComponentPage_ModulePage_EntityPage $oPage) {
		$this->Cache_Delete("page_node_{$oPage->getNode()}");
		if ($iId=$this->oDb->Add($oPage)){
			$oPage->setId($iId);
		}
		return $oPage;
	}
	public function Update(ComponentPage_ModulePage_EntityPage $oPage) {
		$this->Cache_Delete("page_node_{$oPage->getNode()}");
		$this->Cache_Delete("page_{$oPage->getId()}");
		return $this->oDb->Update($oPage);
	}
	*/
	public function Search(){
		return array();
	}
}