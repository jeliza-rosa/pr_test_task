<?
class ComponentInformer_ModuleInformer extends Module {
	protected $oDb;
	public function Init() {
		//$this->oDb=Engine::GetDb(__CLASS__);
	}
	/*
	public function GetNews() {
		if (false === ($data = $this->Cache_Get("news_ids"))) {
			$data=$this->oDb->GetNews();
			$this->Cache_Set("news_ids", $data, Config::Get("app.cache.expire"));
		}
		foreach($data as $i=>$iId){
			$data[$i]['news_id']=$this->oDb->GetNewsById($iId);
		}
		return $data;
	}
	public function GetNewsByNode($iNodeId) {
		if (false === ($data = $this->Cache_Get("news_node_{$iNodeId}"))) {
			$data=$this->oDb->GetNewsByNode($iNodeId);
			$this->Cache_Set("news_node_{$iNodeId}", $data, Config::Get("app.cache.expire"));
		}
		foreach($data as $i=>$iId){
			$data[$i]=$this->oDb->GetNewsById($iId['news_id']);
		}
		return $data;
	}
	
	public function GetNewsById($iId) {
		if (false === ($data = $this->Cache_Get("news_{$iId}"))) {
			$data=$this->oDb->GetNewsById($iId);
			$this->Cache_Set("news_{$iId}", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
	public function Add(ComponentNews_ModuleNews_EntityNews $oNews) {
		$this->Cache_Delete("news_ids");
		$this->Cache_Delete("news_node_{$oNews->getNode()}");
		if ($iId=$this->oDb->Add($oNews)){
			$oNews->setId($iId);
		}
		return $oNews;
	}
	public function Update(ComponentNews_ModuleNews_EntityNews $oNews) {
		$this->Cache_Delete("news_{$oNews->getId()}");
		return $this->oDb->Update($oNews);
	}
	
	public function Delete($iId) {
		$oNews=$this->GetNewsById($iId);
		$this->Cache_Delete("news_{$oNews->getId()}");
		$this->Cache_Delete("news_ids");
		$this->Cache_Delete("news_node_{$oNews->getNode()}");
		return $this->oDb->Delete($iId);
	}
	
	public function Activate($iId) {
		$this->Cache_Delete("news_{$iId}");
		return $this->oDb->Activate($iId);
	}
	
	public function Deactivate($iId) {
		$this->Cache_Delete("news_{$iId}");
		return $this->oDb->Deactivate($iId);
	}*/

	public function Search(){
		return array();
	}
}