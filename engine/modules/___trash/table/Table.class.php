<?
class ModuleTable extends Module {
	protected $oDb;
	protected $oComponent;
	public function Init() {
		$this->oDb=Engine::GetDb(__CLASS__);
	}
	
	public function AddByTableName($sTableName, $aFields) {
		$oResult=Engine::GetEntity('Table');
		if ($iId=$this->oDb->AddByTableName($sTableName, $aFields)){
			$oResult->setId($iId);
		}
		return $oResult;
	}
	
	public function Select($sTableName) {
		return $this->oDb->Select($sTableName);
	}
	
	public function SelectById($sTableName, $sKey, $iId) {
		return $this->oDb->SelectById($sTableName, $sKey, $iId);
	}
	
	public function Truncate($sTableName) {
		return $this->oDb->Truncate($sTableName);
	}
	
	public function Describe($sTableName) {
		return $this->oDb->Describe($sTableName);
	}
	
	public function Add($sTableName, $sKey, $aValues) {
		return $this->oDb->Add($sTableName, $sKey, $aValues);
	}
	
	public function Update($sTableName, $sKey, $aValues) {
		return $this->oDb->Update($sTableName, $sKey, $aValues);
	}
	
	public function Delete($sTableName, $sKey, $iId) {
		return $this->oDb->Delete($sTableName, $sKey, $iId);
	}	
}