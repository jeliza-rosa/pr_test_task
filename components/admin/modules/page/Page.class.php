<?
class ComponentPage_ModulePage extends Module {
	protected $oDb;
	public function Init() {
		$this->oDb=Engine::GetDb(__CLASS__);
	}
	public function GetPageById($iId) {
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
}