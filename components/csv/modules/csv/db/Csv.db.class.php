<?
class Componentcsv_Modulecsv_DbCsv extends Db {
    public function Install(){
        if( !$this->oDb->CheckTableExists(Config::Get("db.prefix")."com_csv") ){
            $sql = "CREATE TABLE IF NOT EXISTS `".Config::Get("db.prefix")."com_csv` (
				`csv_id` int(11) NOT NULL AUTO_INCREMENT,
				`csv_active` varchar(250) NOT NULL,
				`csv_node` text NOT NULL,
				`csv_type` datetime,
				`csv_sort` varchar(250) NOT NULL DEFAULT '',
				`csv_datetime` datetime NOT NULL,
                `csv_group` varchar(250),
                `csv_task` varchar(250),
                `csv_time_fact` float,
                `csv_time_plan` float,
                `csv_sum` int(11),
                `csv_created_at` datetime,
                `csv_link` text,
				PRIMARY KEY (`csv_id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8;";
            return $this->oDb->Query($sql);
        }
    }

    public function GetCsvById($iId) {
        $sql = "SELECT * FROM ".Config::Get("db.prefix")."com_csv WHERE csv_id=?";
        $aRow=$this->oDb->SelectRow($sql, $iId);
        if ($aRow) return Engine::GetEntity('Componentcsv_Csv', $aRow);
        else return null;
    }
    public function GetCsv() {
        $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv ORDER BY csv_id ASC";
        $aRows = $this->oDb->Select($sql);
        return array_map( function($var){ return $var["csv_id"]; }, $aRows);
    }
    public function GetCsvByNode($iNodeId) {
        $sql = "";
        if (!empty($_GET['sort'])) {
            if ($_GET['sort'] == 'asc') {
                $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv WHERE csv_node=? ORDER BY csv_datetime ASC, csv_id ASC";
            } elseif ($_GET['sort'] == 'desc') {
                $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv WHERE csv_node=? ORDER BY csv_datetime DESC, csv_id ASC";
            }
        } else {
            $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv WHERE csv_node=? ORDER BY csv_id ASC";
        }
        $aRows = $this->oDb->Select($sql, $iNodeId);
        return array_map( function($var){ return $var["csv_id"]; }, $aRows);
    }
    public function GetActiveCsvByNode($iNodeId){
        $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv WHERE csv_active=1 AND csv_node=? ORDER BY csv_id ASC";
        $aRows = $this->oDb->Select($sql, $iNodeId);
        return array_map( function($var){ return $var["csv_id"]; }, $aRows);
    }
    /*public function GetCsvByIds($aIds) {
        $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv WHERE csv_id IN (?) ORDER BY csv_datetime DESC, csv_id DESC";
        $sIds = implode("','", $aIds);
        $aRows = $this->oDb->Select($sql, $sIds);
        return array_map( function($var){ return $var["csv_id"]; }, $aRows);
    }*/


    public function Add($oCsv){
        $sql = "INSERT INTO ".Config::Get("db.prefix")."com_csv (
				csv_active,
				csv_node,
				csv_type,
				csv_sort,		
				csv_datetime,	
				csv_group,
				csv_task,
				csv_time_fact,
				csv_time_plan,
				csv_sum,
				csv_created_at,
				csv_link
			) 
			VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
		";
        return $this->oDb->Query($sql,
            $oCsv->getActive(),
            $oCsv->getNode(),
            $oCsv->getType(),
            $oCsv->getSort(),
            $oCsv->getDatetime(),
            $oCsv->getGroup(),
            $oCsv->getTask(),
            $oCsv->getTimeFact(),
            $oCsv->getTimePlan(),
            $oCsv->getSum(),
            $oCsv->getCreatedAt(),
            $oCsv->getLink()
        );
    }
    public function Update($oCsv){
        $sql = "UPDATE ".Config::Get("db.prefix")."com_csv SET 
				csv_active=?,
	            csv_node=?,
	            csv_type=?,
	            csv_sort=?,
	            csv_datetime=?,
	            csv_group=?,
	            csv_task=?,
	            csv_time_fact=?,
	            csv_time_plan=?,
	            csv_sum=?,
	            csv_created_at=?,
	            csv_link=?
			WHERE csv_id=?
		";
        return $this->oDb->Query($sql,
            $oCsv->getActive(),
            $oCsv->getNode(),
            $oCsv->getType(),
            $oCsv->getSort(),
            $oCsv->getDatetime(),
            $oCsv->getGroup(),
            $oCsv->getTask(),
            $oCsv->getTimeFact(),
            $oCsv->getTimePlan(),
            $oCsv->getSum(),
            $oCsv->getCreatedAt(),
            $oCsv->getLink(),
            $oCsv->getId()
        );
    }
    public function Activate($iCsvId) {
        $sql = "UPDATE ".Config::Get("db.prefix")."com_csv SET csv_active=1 WHERE csv_id=?";
        if ($this->oDb->Query($sql, $iCsvId)) return true;
        else return false;
    }

    public function Deactivate($iCsvId) {
        $sql = "UPDATE ".Config::Get("db.prefix")."com_csv SET csv_active=0 WHERE csv_id=?";
        if ($this->oDb->Query($sql, $iCsvId)) return true;
        else return false;
    }

    public function Delete($iCsvId) {
        $sql = "DELETE FROM ".Config::Get("db.prefix")."com_csv WHERE csv_id=?";
        if ($this->oDb->Query($sql, $iCsvId)) return true;
        else return false;
    }

    public function Search($sWord){
        $sWord = "%".$sWord."%";
        $sql = "SELECT csv_id FROM ".Config::Get("db.prefix")."com_csv WHERE ( csv_announcement LIKE ? OR csv_body LIKE ? ) AND csv_active =1 ";
        $aRows = $this->oDb->Select($sql, $sWord, $sWord);
        return array_map( function($var){ return $var["csv_id"]; }, $aRows );

    }
}	