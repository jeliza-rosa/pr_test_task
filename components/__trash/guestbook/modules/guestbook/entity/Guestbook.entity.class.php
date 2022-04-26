<?
class ComponentGuestbook_ModuleGuestbook_EntityGuestbook extends Entity {
	public function getId() {
        return $this->_aData['guestbook_id'];
    }
    public function getQuestionhtml() {
        return str_replace("\n", "<br>", $this->_aData['guestbook_question']);
    } 
    public function getAnswerhtml() {
        return str_replace("\n", "<br>", $this->_aData['guestbook_answer']);
    }   
    public function getDatecreate() {
    	$sDatetime=explode(" ", $this->_aData['guestbook_datecreate']);
        return $sDatetime[0];
    }
    public function getAnswerauthortitle() {
	    $iIdAnswer=$this->_aData['guestbook_answerauthor'];
	    $oEngine=Engine::getInstance();
	    $oAuthor=$oEngine->ComponentNews_News_GetNewsById($iIdAnswer);
	    return $oAuthor->getTitle();
    }
    public function getAnswerauthorimage() {
	    $iIdAnswer=$this->_aData['guestbook_answerauthor'];
	    $oEngine=Engine::getInstance();
	    $oAuthor=$oEngine->ComponentNews_News_GetNewsById($iIdAnswer);
	    return $oAuthor->getCropImage(150, 200);
    }
     
    public function getDatefullcreate() {
        return $this->_aData['guestbook_datecreate'];
    }   
     
    public function getDatefullanswer() {
        return $this->_aData['guestbook_dateanswer'];
    }   	
    public function getTimecreate() {
    	$sDatetime=explode(" ", $this->_aData['guestbook_datecreate']);
        return substr($sDatetime[1], 0, 5);
    }
	
    public function getDateanswer() {
    	$sDatetime=explode(" ", $this->_aData['guestbook_dateanswer']);
        return $sDatetime[0];
    }
    
    public function getTimeanswer() {
    	$sDatetime=explode(" ", $this->_aData['guestbook_dateanswer']);
        return substr($sDatetime[1], 0, 5);
    }
    
    public function setId($data) {
    	$this->_aData['guestbook_id']=$data;
    }
    
    public function setDatecreate($data, $time) {
        $this->_aData['guestbook_datecreate']=$data." ".$time.":00";
	}
     
    public function setDateanswer($data, $time) {
        $this->_aData['guestbook_dateanswer']=$data." ".$time.":00";
	}   

}	