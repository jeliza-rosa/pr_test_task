<?
class ModuleConfig extends Module {
	protected $oDb;
	public function Init() {
		$this->oDb=Engine::GetDb(__CLASS__);
		$this->oDb->Install();
	}
	public function Add(ModuleConfig_EntityConfig $oConfig) {
		if ($iId=$this->oDb->Add($oConfig)){
			$oConfig->setId($iId);
		}
		return $oConfig;
	}
	public function Update(ModuleConfig_EntityConfig $oBanner) {
		$this->Cache_Delete("config_{$oConfig->getId()}");
		$this->Cache_Delete("configs");
		return $this->oDb->Update($oConfig);
	}
	public function Delete($iId) {
		$this->Cache_Delete("config_{$iId}");
		$this->Cache_Delete("configs");
		return $this->oDb->Delete($iId);
	}
	public function GetConfigById($iId) {
		if (false === ($data = $this->Cache_Get("config_{$iId}"))) {
			$data=$this->oDb->GetConfigById($iId);
			$this->Cache_Set("config_{$iId}", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
	public function GetConfigByName($sName) {
		$iId = $this->oDb->GetConfigByName($sName);
		return $this->GetConfigById($iId);
	}
	public function GetConfigs(){
		if (false === ($data = $this->Cache_Get("configs"))) {
			$aIds=$this->oDb->GetConfigs();
			$data = array();
			foreach ($aRows as $iId) {
				$oConfig = $this->GetConfigById($iId);
				$data[$oConfig->getName()] = $oConfig;
			}
			$this->Cache_Set("configs", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
}