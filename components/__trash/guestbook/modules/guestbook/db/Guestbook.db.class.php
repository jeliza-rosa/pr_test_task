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

class ComponentGuestbook_ModuleGuestbook_DbGuestbook extends Db {
	public function GetGuestbookById($iId) {
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."com_guestbook WHERE guestbook_id=?";
		$aRow=$this->oDb->SelectRow($sql, $iId);
		if ($aRow) return Engine::GetEntity('ComponentGuestbook_Guestbook', $aRow);
		else return null;
	}
	public function GetGuestbook() {
		$sql = "SELECT guestbook_id FROM ".Config::Get("db.prefix")."com_guestbook ORDER BY guestbook_datecreate DESC";
		return $this->oDb->Select($sql);
	}
	public function GetGuestbookByNode($iNodeId, $iCount=0, $bActive=false) {
		$sLimit='';
		if ($iCount>0)
			$sLimit=" limit 0,".$iCount;
		$sCondition='';
		if ($bActive===true)
			$sCondition="and guestbook_active=1";
		$sql = "SELECT guestbook_id FROM ".Config::Get("db.prefix")."com_guestbook WHERE guestbook_node=? ".$sCondition." ORDER BY guestbook_datecreate DESC". $sLimit;
		return $this->oDb->Select($sql, $iNodeId);
	}
	
	public function Add($oGuestbook){
		$sql = "INSERT INTO ".Config::Get("db.prefix")."com_guestbook (
				guestbook_node,
				guestbook_author,
				guestbook_phone,
				guestbook_question,
				guestbook_datecreate
			) 
			VALUES(?,?,?,?,?)
		";
		return $this->oDb->Query($sql, 
			$oGuestbook->getNode(),
			$oGuestbook->getAuthor(),
			$oGuestbook->getPhone(),
			$oGuestbook->getQuestion(),
			$oGuestbook->getDatecreate()
		);
	}
	public function Update($oGuestbook){

		$sql = "UPDATE ".Config::Get("db.prefix")."com_guestbook SET 
				guestbook_author=?,
	            guestbook_question=?,
	            guestbook_datecreate=?,
	            guestbook_answer=?,
	            guestbook_answerauthor=?,
	            guestbook_dateanswer=?,
	            guestbook_active=?
			WHERE guestbook_id=?
		";
		return $this->oDb->Query($sql, 
			$oGuestbook->getAuthor(),
			$oGuestbook->getQuestion(),
			$oGuestbook->getDatefullcreate(),
			$oGuestbook->getAnswer(),
			$oGuestbook->getAnswerauthor(),
			$oGuestbook->getDatefullanswer(),
			$oGuestbook->getActive(),
			$oGuestbook->getId()
		);
	}
	public function Activate($iGuestbookId) {
		$sql = "UPDATE ".Config::Get("db.prefix")."com_guestbook SET guestbook_active=1 WHERE guestbook_id=?";
		if ($this->oDb->Query($sql, $iGuestbookId)) return true;
		else return false;
	}
	
	public function Deactivate($iGuestbookId) {
		$sql = "UPDATE ".Config::Get("db.prefix")."com_guestbook SET guestbook_active=0 WHERE guestbook_id=?";
		if ($this->oDb->Query($sql, $iGuestbookId)) return true;
		else return false;
	}
	
	public function Delete($iGuestbookId) {
		$sql = "DELETE FROM ".Config::Get("db.prefix")."com_guestbook WHERE guestbook_id=?";
		if ($this->oDb->Query($sql, $iGuestbookId)) return true;
		else return false;
	}
}	