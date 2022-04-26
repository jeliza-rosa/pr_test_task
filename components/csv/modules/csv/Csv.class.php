<?
class ComponentCsv_ModuleCsv extends Module {
	protected $oDb;
	public function Init() {
		$this->oDb=Engine::GetDb(__CLASS__);
		$this->oDb->Install();
	}
	public function GetCsv() {
		if (false === ($data = $this->Cache_Get("Csv_ids"))) {
			$data=$this->oDb->GetCsv();
			$this->Cache_Set("Csv_ids", $data, Config::Get("app.cache.expire"));
		}
		while( list($i,$iId) = each( $data )){
			$data[$i]=$this->oDb->GetCsvById($iId);
		}
		return $data;
	}
	public function GetCsvByNode($iNodeId, $iOnPage=0, $iPage=1) {
		if (false === ($data = $this->Cache_Get("Csv_node_{$iNodeId}"))) {
			$data=$this->oDb->GetCsvByNode($iNodeId);
			$this->Cache_Set("Csv_node_{$iNodeId}", $data, Config::Get("app.cache.expire"));
		}
		if($iOnPage){
			$iOffset = $iOnPage*($iPage-1);
			$data = array_slice($data, $iOffset, $iOnPage);
		}
		while( list($i,$iId) = each( $data )){
			$data[$i]=$this->GetCsvById($iId);
		}
		return $data;
	}
	public function GetActiveCsvByNode($iNodeId, $iOnPage=0, $iPage=1) {
		$data = $this->oDb->GetActiveCsvByNode($iNodeId);
		if( $iOnPage ){
			$iOffset = $iOnPage*($iPage-1);
			$data = array_slice($data, $iOffset, $iOnPage);
		}
		while( list($i,$iId) = each( $data )){
			$data[$i]=$this->GetCsvById($iId);
		}
		return $data;
	}
	public function GetActiveCsvCountByNode($iNodeId){
		$data = $this->oDb->GetActiveCsvByNode($iNodeId);
		return count($data);
	}
	public function GetCsvByIds($aIds) {
		foreach ($aIds as $iId) {
			$data[]=$this->GetCsvById($iId);
		}
		$data = array_filter($data, function($var){return !empty($var);});
		usort($data, function($a, $b){
			if($a->getDate() == $b->getDate()){
				return $a->getId() > $b->getId() ? 1 : -1;
			}
			return $a->getDate() > $b->getDate() ? -1 : 1;
		});
		return $data;
	}
	
	public function GetCsvById($iId) {
		if (false === ($data = $this->Cache_Get("Csv_{$iId}"))) {
			$data=$this->oDb->GetCsvById($iId);
			$this->Cache_Set("Csv_{$iId}", $data, Config::Get("app.cache.expire"));
		}
		return $data;
	}
	public function Add(ComponentCsv_ModuleCsv_EntityCsv $oCsv) {
		$this->Cache_Delete("Csv_ids");
		$this->Cache_Delete("Csv_node_{$oCsv->getNode()}");
		if ($iId=$this->oDb->Add($oCsv)){
			$oCsv->setId($iId);
		}
		return $oCsv;
	}
	public function Update(ComponentCsv_ModuleCsv_EntityCsv $oCsv) {
		$this->Cache_Delete("Csv_{$oCsv->getId()}");
		return $this->oDb->Update($oCsv);
	}
	
	public function Delete($iId) {
		$oCsv=$this->GetCsvById($iId);
		$this->Cache_Delete("Csv_{$oCsv->getId()}");
		$this->Cache_Delete("Csv_ids");
		$this->Cache_Delete("Csv_node_{$oCsv->getNode()}");
		return $this->oDb->Delete($iId);
	}
	
	public function Activate($iId) {
		$this->Cache_Delete("Csv_{$iId}");
		return $this->oDb->Activate($iId);
	}
	
	public function Deactivate($iId) {
		$this->Cache_Delete("Csv_{$iId}");
		return $this->oDb->Deactivate($iId);
	}

	public function Search($aWords){
		$aIds = array();
		foreach ($aWords as $sWord) {
			$aIds = array_merge( $aIds, $this->oDb->Search($sWord) );
		}
		$aIds = array_unique($aIds);

		$aResults = array();
		foreach( $aIds as $iId ){
			$oCsv = $this->GetCsvById( $iId );
			if( !$oCsv ) continue;

			$oNode = $this->Node_GetNodeById( $oCsv->getNode() );
			if( !$oNode ) continue;

			$oResult = Engine::GetEntity('ComponentSearch_Search', null, 'Result');
			$oResult->setNode( $oNode );
			$oResult->setText( strip_tags($oCsv->getBody()) );
			$oResult->setUrl(  $oNode->getFullUrl().$oCsv->getId()."/" );
			$oResult->setTitle($oNode->getTitle()." - ".$oCsv->getTitle() );
			$iCount=0;
			foreach ($aWords as $sWord) {
				$iCount += mb_substr_count(mb_strtolower($oResult->getText()), $sWord);
				$iCount += mb_substr_count(mb_strtolower($oResult->getTitle()), $sWord);
			}
			$oResult->setCount( $iCount );
			$sKey = md5( $oResult->getUrl() );
			$aResults[$sKey] = $oResult;
			unset($oResult);
		}
		return $aResults;
	}
}