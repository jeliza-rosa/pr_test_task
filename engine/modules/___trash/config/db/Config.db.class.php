<?
class ModuleConfig_DbConfig extends Db {
	public function Install(){
		$sql = "CREATE TABLE IF NOT EXISTS `pr_configs` (
			`config_id` int(11) NOT NULL AUTO_INCREMENT,
			`config_title` varchar(250) NOT NULL,
			`config_name` varchar(250) NOT NULL,
			`config_value` varchar(250) NOT NULL,
			PRIMARY KEY (`config_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
		$this->oDb->Query($sql);
	}
	public function Add($oConfig){
		$sql = "INSERT INTO ".Config::Get("db.prefix")."configs (
				config_title,
				config_name,
				config_value
			) 
			VALUES (?, ?, ?)";
		return $this->oDb->Query($sql, 
			$oConfig->getTitle(),
			$oConfig->getName(),
			$oConfig->getValue()
		);
	}
	public function Update($oConfig){
		$sql = "UPDATE ".Config::Get("db.prefix")."configs SET 
				config_title=?,
				config_name=?,
				config_value=?
			WHERE config_id=?";
		return $this->oDb->Query($sql, 
			$oConfig->getTitle(),
			$oConfig->getName(),
			$oConfig->getValue(),
			$oConfig->getId()
		);
	}
	public function Delete($iId) {
		$sql = "DELETE FROM ".Config::Get("db.prefix")."configs WHERE config_id=?";
		if ($this->oDb->Query($sql, $iId)) return true;
		else return false;
	}
	public function GetConfigById($iId) {
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."configs WHERE config_id=?";
		$aRow=$this->oDb->SelectRow($sql, $iId);
		if ($aRow) return Engine::GetEntity('Config', $aRow);
		else return null;
	}
	public function GetConfigByName($sName) {
		$sql = "SELECT config_id FROM ".Config::Get("db.prefix")."configs WHERE config_name = ? ORDER BY config_id";
		$aRow = $this->oDb->SelectRow($sql, $sName);
		return $aRow["config_id"];
	}
	public function GetConfigs() {
		$sql = "SELECT config_id FROM ".Config::Get("db.prefix")."configs";
		$aRows=$this->oDb->Select($sql);
		return array_map(function($aRow){return $aRow["config_id"];}, $aRows);
	}
}	