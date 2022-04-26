<?
class ComponentCart_ModuleCart extends Module {
	protected $oDb;
	public function Init() {
		$this->oDb=Engine::GetDb(__CLASS__);
		$this->oDb->Install();
	}
	
	/*------------CART BEGIN--------------*/
    	public function CartAdd($iItemId, $iCount){
	        return $this->oDb->CartAdd($iItemId, $this->GetCartId(), $iCount);
	    }
    	
    	public function CartDelete($iCartId){
	        return $this->oDb->CartDelete($iCartId, $this->GetCartId());
	    }
	    
    	public function GetCartId(){
	        if (!$_COOKIE['CID']){
	        	$CID = md5(time().rand());
	        	setcookie("CID", $CID, time()+60*60*24*30, "/");
	        	$_COOKIE['CID'] = $CID;
	        }
	        return $_COOKIE['CID'];
	    }
	    
	    public function GetCarts(){
	        return $this->oDb->GetCarts($this->GetCartId());
	    }
    /*------------CART END--------------*/
    
}