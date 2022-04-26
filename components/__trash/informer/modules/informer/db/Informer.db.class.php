<?
/* 
	Примеры использования запросов! 
	
	$sql = "SELECT * FROM ".Config::Get("db.prefix")."nodes";
	$aResult = array();
	$aRows=$this->oDb->Select($sql);
	foreach ($aRows as $aRow) {
		$aResult[]=Engine::GetEntity('Node',$aRow);
	}
	return $aResult;
	
	$sql = "INSERT INTO ".Config::Get("db.prefix")."nodes (node_id, node_title) VALUES (?, ?)";
	$this->oDb->Query($sql, "1", "Главная");
	
	$sql = "SELECT * FROM ".Config::Get("db.prefix")."nodes WHERE node_url=? AND node_parent=?";
	$aRow=$this->oDb->SelectRow($sql, $sUrl, $iParentId);
	if ($aRow) return Engine::GetEntity('Node',$aRow);
	else return null;
*/

class ComponentNews_ModuleNews_DbNews extends Db {
	public function GetNewsById($iId) {
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."com_news WHERE news_id=?";
		$aRow=$this->oDb->SelectRow($sql, $iId);
		if ($aRow) return Engine::GetEntity('ComponentNews_News', $aRow);
		else return null;
	}
	public function GetNews() {
		$sql = "SELECT news_id FROM ".Config::Get("db.prefix")."com_news ORDER BY news_datetime DESC, news_id DESC";
		return $this->oDb->Select($sql);
	}
	public function GetNewsByNode($iNodeId) {
		$sql = "SELECT news_id FROM ".Config::Get("db.prefix")."com_news WHERE news_node=? ORDER BY news_datetime DESC, news_id DESC";
		return $this->oDb->Select($sql, $iNodeId);
	}
	
	public function Add($oNews){
		$sql = "INSERT INTO ".Config::Get("db.prefix")."com_news (
				news_title,
				news_announcement,
				news_body,
				news_datetime,
				news_node,
				news_image,
				news_active			
			) 
			VALUES(?, ?, ?, ?, ?, ?, ?)
		";
		return $this->oDb->Query($sql, 
			$oNews->getTitle(),
			$oNews->getAnnouncement(),
			$oNews->getBody(),
			date("Y-m-d H:i:s"),
			$oNews->getNode(),
			$oNews->getImage(),
			$oNews->getActive()
		);
	}
	public function Update($oNews){
		$sql = "UPDATE ".Config::Get("db.prefix")."com_news SET 
				news_title=?,
	            news_announcement=?,
	            news_body=?,
	            news_datetime=?,
	            news_node=?,
	            news_image=?,
	            news_active=?
			WHERE news_id=?
		";
		return $this->oDb->Query($sql, 
			$oNews->getTitle(),
			$oNews->getAnnouncement(),
			$oNews->getBody(),
			$oNews->getDatetime(),
			$oNews->getNode(),
			$oNews->getImage(),
			$oNews->getActive(),
			$oNews->getId()
		);
	}
	public function Activate($iNewsId) {
		$sql = "UPDATE ".Config::Get("db.prefix")."com_news SET news_active=1 WHERE news_id=?";
		if ($this->oDb->Query($sql, $iNewsId)) return true;
		else return false;
	}
	
	public function Deactivate($iNewsId) {
		$sql = "UPDATE ".Config::Get("db.prefix")."com_news SET news_active=0 WHERE news_id=?";
		if ($this->oDb->Query($sql, $iNewsId)) return true;
		else return false;
	}
	
	public function Delete($iNewsId) {
		$sql = "DELETE FROM ".Config::Get("db.prefix")."com_news WHERE news_id=?";
		if ($this->oDb->Query($sql, $iNewsId)) return true;
		else return false;
	}
}	