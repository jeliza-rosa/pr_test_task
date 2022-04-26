<?
class ComponentPage_ModulePage_EntityPage extends Entity {
	public function getId() {
        return $this->_aData['page_id'];
    }
    
    public function setId($data) {
    	$this->_aData['page_id']=$data;
    }
}	