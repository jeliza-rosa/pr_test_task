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

class ComponentCart_ModuleCart_DbCart extends Db {
	/*------------CART BEGIN--------------*/
    public function CartAdd($iItemId, $sid, $iCount)
	{
		$sql = "INSERT INTO ".Config::Get("db.prefix")."com_catalog_cart (
				cart_item,
				cart_sid,
				cart_count
			) 
			VALUES (?,?,?)
		";
		return $this->oDb->Query($sql, 
			$iItemId,
			$sid,
			$iCount
		);
	}
	public function GetCarts($sid)
	{
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."com_catalog_cart WHERE cart_sid = ?";
		$aResult = array();
		$aRows=$this->oDb->Select($sql, $sid);
		foreach ($aRows as $aRow) {
			$aResult[]=Engine::GetEntity('ComponentCart_Cart', $aRow);
		}
		return $aResult;
	}
	
	public function CartDelete($iCartId, $sid)
	{
		$sql = "DELETE FROM ".Config::Get("db.prefix")."com_catalog_cart WHERE cart_id = ? AND cart_sid = ?";
		return $this->oDb->Query($sql, 
			$iCartId,
			$sid
		);
	}
    /*------------CART END--------------*/
}	