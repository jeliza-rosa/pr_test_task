<?
class ComponentOrder_ModuleOrder_DbOrder extends Db {

	public function Install(){
		if( !$this->oDb->CheckTableExists(Config::Get("db.prefix")."com_catalog_cart") ){
			$sql = "CREATE TABLE IF NOT EXISTS `".Config::Get("db.prefix")."com_catalog_cart` (
				`cart_id` int(11) NOT NULL AUTO_INCREMENT,
				`cart_item` int(11) NOT NULL,
				`cart_sid` varchar(50) NOT NULL,
				`cart_count` int(11) NOT NULL,
				PRIMARY KEY (`cart_id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
			$this->oDb->Query($sql);
		}
	}
	/*------------CART BEGIN--------------*/
    public function OrderAdd($iItemId, $sid, $iCount)
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
	public function GetOrders($sid)
	{
		$sql = "SELECT * FROM ".Config::Get("db.prefix")."com_catalog_cart WHERE cart_sid = ?";
		$aResult = array();
		$aRows=$this->oDb->Select($sql, $sid);
		foreach ($aRows as $aRow) {
			$aResult[]=Engine::GetEntity('ComponentCart_Cart', $aRow);
		}
		return $aResult;
	}
	
	public function OrderDelete($iCartId, $sid)
	{
		$sql = "DELETE FROM ".Config::Get("db.prefix")."com_catalog_cart WHERE cart_id = ? AND cart_sid = ?";
		return $this->oDb->Query($sql, 
			$iCartId,
			$sid
		);
	}
    /*------------CART END--------------*/
}	