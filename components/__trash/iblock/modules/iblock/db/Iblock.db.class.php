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

class ComponentPage_ModulePage_DbPage extends Db {
	public function GetPageById($iId) {
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."com_pages WHERE page_id=?";
		$aRow=$this->oDb->SelectRow($sql, $iId);
		if ($aRow) return Engine::GetEntity('ComponentPage_Page', $aRow);
		else return null;
	}
	public function GetPageByNode($iNodeId) {
		
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."com_pages WHERE page_node=?";
		$aRow=$this->oDb->SelectRow($sql, $iNodeId);
		if ($aRow) return Engine::GetEntity('ComponentPage_Page', $aRow);
		else return null;
	}
	public function Add($oPage){
		$sql = "INSERT INTO ".Config::Get("db.prefix")."com_pages (
				page_body,
	            page_node			
			) 
			VALUES(?, ?)
		";
		return $this->oDb->Query($sql, 
			$oPage->getBody(),
			$oPage->getNode()
		);
	}
	public function Update($oPage){
		$sql = "UPDATE ".Config::Get("db.prefix")."com_pages SET 
				page_body=?,
	            page_node=?			
			WHERE page_id=?
		";
		return $this->oDb->Query($sql, 
			$oPage->getBody(),
			$oPage->getNode(),
			$oPage->getId()
		);
	}
}	