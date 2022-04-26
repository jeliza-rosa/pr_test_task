<?
class ComponentCsv_ModuleCsv_EntityCsv extends Entity {
	public function getId() {
		return $this->_aData["csv_id"];
	}

    public function getTask() {
        return $this->_aData["csv_task"];
    }

    public function getGroup() {
        return $this->_aData["csv_group"];
    }

	public function getDate() {
		$sDatetime=explode(" ", $this->_aData["csv_datetime"]);
		return $sDatetime[0];
	}

	public function getTime() {
		$sDatetime=explode(" ", $this->_aData['csv_datetime']);
		return substr($sDatetime[1], 0, 5);
	}

    public function getTimePlan() {
        return $this->_aData["csv_time_plan"];
    }

    public function getTimeFact() {
        return $this->_aData["csv_time_fact"];
    }

    public function getSum() {
        return $this->_aData["csv_sum"];
    }

	public function setId($data) {
		$this->_aData['csv_id']=$data;
	}

	public function setDate($data) {
		$sDatetime=explode(" ", $this->_aData['csv_datetime']);
		$sDatetime[0]=$data;
		$this->_aData['csv_datetime']=implode(" ", $sDatetime);
	}

	public function setTime($data) {
		$sDatetime=explode(" ", $this->_aData['csv_datetime']);
		if (!$sDatetime[0]) $sDatetime[0]="1970-01-01";
		$sDatetime[1]=$data;
		$this->_aData['csv_datetime']=implode(" ", $sDatetime);
	}
}	