<?
class ComponentGuestbook_ModuleGuestbook extends Module {
	protected $oDb;
	public function Init() {
		$this->oDb=Engine::GetDb(__CLASS__);
	}
	public function GetNews() {
		if (false === ($data = $this->Cache_Get("news_ids"))) {
			$data=$this->oDb->GetNews();
			$this->Cache_Set("news_ids", $data, Config::Get("app.cache.expire"));
		}
		foreach($data as $i=>$iId){
			$data[$i]=$this->oDb->GetNewsById($iId['news_id']);
		}
		return $data;
	}
	public function GetGuestbookByNode($iNodeId, $count=0, $bActive=false) {
		if (false === ($data = $this->Cache_Get("guestbook_node_{$iNodeId}"))) {
			$data=$this->oDb->GetGuestbookByNode($iNodeId, $count, $bActive);
			$this->Cache_Set("guestbook_node_{$iNodeId}", $data, Config::Get("app.cache.expire"));
		}
		foreach($data as $i=>$iId){
			$data[$i]=$this->oDb->GetGuestbookById($iId['guestbook_id']);
		}
		return $data;
	}

	// public function getAnswerhtml(){
	// 	return $this->oDb->getAnswerhtml();
	// }
	
	
	public function GetGuestbookById($iId) {
		if (false === ($data = $this->Cache_Get("guestbook_{$iId}"))) {
			$data=$this->oDb->GetGuestbookById($iId);
			$this->Cache_Set("guestbook_{$iId}", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
	public function Add(ComponentGuestbook_ModuleGuestbook_EntityGuestbook $oGuestbook) {
		if ($iId=$this->oDb->Add($oGuestbook)){
			$oGuestbook->setId($iId);
		}
		return $oGuestbook;
	}
	public function Update(ComponentGuestbook_ModuleGuestbook_EntityGuestbook $oGuestbook) {
		$this->Cache_Delete("guestbook_{$oGuestbook->getId()}");
		return $this->oDb->Update($oGuestbook);
	}
	
	public function Delete($iId) {
		$oGuestbook=$this->GetGuestbookById($iId);
		$this->Cache_Delete("guestbook_{$oGuestbook->getId()}");
		$this->Cache_Delete("guestbook_ids");
		$this->Cache_Delete("guestbook_node_{$oGuestbook->getNode()}");
		return $this->oDb->Delete($iId);
	}
	
	public function Activate($iId) {
		$this->Cache_Delete("news_{$iId}");
		return $this->oDb->Activate($iId);
	}
	
	public function Deactivate($iId) {
		$this->Cache_Delete("news_{$iId}");
		return $this->oDb->Deactivate($iId);
	}

	public function Search(){
		return array();
	}
}