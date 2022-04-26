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

class ModuleTable_DbTable extends Db {
	public function AddByTableName($sTableName, $aFields){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="DESCRIBE ".Config::Get("db.prefix").$sTableName."; SHOW TABLE STATUS;";
		$aRows=$this->oDb->Select($sql);
		$aTableFields=array();
		foreach($aRows as $aRow){
			$aTableFields[]=$aRow['Field'];
		}
		
		
		$sql = "INSERT INTO ".Config::Get("db.prefix").$sTableName." (";
		foreach($aFields as $aField=>$sValue){
			if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
			$sql.=$aField.", ";
		}
		$sql=substr($sql, 0, strlen($sql)-2);
		$sql.=") VALUES (";
		foreach($aFields as $aField=>$sValue){
			if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
			$sql.="?, ";
		}
		$sql=substr($sql, 0, strlen($sql)-2);
		$sql.=")";
		
		$func='$this->oDb->Query($sql, ';
		foreach($aFields as $aField=>$sValue){
			if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
		
			$func.='"'.addslashes($sValue).'", ';
		}
		$func=substr($func, 0, strlen($func)-2);
		$func.=");";
		return eval($func);
	}
	
	public function Add($sTableName, $sKey, $aFields){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="DESCRIBE ".Config::Get("db.prefix").$sTableName."; SHOW TABLE STATUS;";
		$aRows=$this->oDb->Select($sql);
		$aTableFields=array();
		foreach($aRows as $aRow){
			$aTableFields[]=$aRow['Field'];
		}
		
		
		$sql = "INSERT INTO ".Config::Get("db.prefix").$sTableName." (";
		foreach($aFields as $aField=>$sValue){
			if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
			$sql.=$aField.", ";
		}
		$sql=substr($sql, 0, strlen($sql)-2);
		$sql.=") VALUES (";
		foreach($aFields as $aField=>$sValue){
			if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
			$sql.="?, ";
		}
		$sql=substr($sql, 0, strlen($sql)-2);
		$sql.=")";
		
		$func='$this->oDb->Query($sql, ';
		foreach($aFields as $aField=>$sValue){
			if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
		
			$func.='"'.addslashes($sValue).'", ';
		}
		$func=substr($func, 0, strlen($func)-2);
		$func.=");";
		return eval($func);
	}
	
	public function Update($sTableName, $sKey, $aFields){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="DESCRIBE ".Config::Get("db.prefix").$sTableName."; SHOW TABLE STATUS;";
		$aRows=$this->oDb->Select($sql);
		$aTableFields=array();
		foreach($aRows as $aRow){
			$aTableFields[]=$aRow['Field'];
		}
		
		
		$sql = "UPDATE ".Config::Get("db.prefix").$sTableName." SET ";
		foreach($aFields as $aField=>$sValue){
			if ($aField!=$sKey){
				if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
				$sql.=$aField." = ?, ";
			}else{
				$sKeyValue=$sValue;
			}
		}
		$sql=substr($sql, 0, strlen($sql)-2);
		$sql.=" WHERE ".$sKey." = ?";
		
		$func='$this->oDb->Query($sql, ';
		foreach($aFields as $aField=>$sValue){
			if ($aField!=$sKey){
				if (!in_array($aField, $aTableFields)) die("Field ".$aField." does not exist!");
				$func.='"'.addslashes($sValue).'", ';
			}
		}
		$func=substr($func, 0, strlen($func)-2);
		$func.=", '".$sKeyValue."');";
		return eval($func);
	}
	
	public function Truncate($sTableName){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="TRUNCATE TABLE ".Config::Get("db.prefix").$sTableName." ";
		return $this->oDb->Query($sql);
	}
	
	public function Select($sTableName){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="SELECT * FROM ".Config::Get("db.prefix").$sTableName." ";
		$aResult = array();
		$aRows=$this->oDb->Select($sql);
		foreach ($aRows as $aRow) {
			$aResult[]=Engine::GetEntity('Table',$aRow);
		}
		return $aResult;
	}
	
	public function SelectById($sTableName, $sKey, $iId){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="SELECT * FROM ".Config::Get("db.prefix").$sTableName." WHERE ".$sKey."=?";
		$aRows=$this->oDb->Select($sql, $iId);
		return $aRows[0];
	}
	
	public function Describe($sTableName){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="DESCRIBE ".Config::Get("db.prefix").$sTableName;
		$aRows=$this->oDb->Select($sql);
		return $aRows;
	}
	
	public function Delete($sTableName, $sKey, $iId){
		$sql ="SHOW TABLES";
		$aRows=$this->oDb->Select($sql);
		$aTables=array();
		foreach($aRows as $aRow){
			foreach($aRow as $sTable){
				$aTables[]=str_replace("pr_","",$sTable);
			}
		}
		if (!in_array($sTableName, $aTables)) die("Table ".$sTableName." does not exist!");
		
		$sql ="DELETE FROM ".Config::Get("db.prefix").$sTableName." WHERE ".$sKey."=?";
		return $this->oDb->Query($sql, $iId);
	}
}	