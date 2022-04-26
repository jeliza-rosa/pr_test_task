<?
class ComponentCsvAdmin extends Component {
	protected $oNode=null;
	protected $sAction=null;
	protected $aParams=array();
	protected $aLang=array();

	public function Init(){
		$this->SetDefaultAction('default'); // Устанавливает экшн по умолчанию
		$this->oNode=Router::GetCurrentNode(); // Текущий редактируемый раздел
		$this->sAction=Router::GetActionAdmin(); // Текущий экшн
		$this->aParams=Router::getParams(); // Массив параметров
		$this->sTemplatePath=$this->Template_GetHost()."components/admin/templates/default/"; // Путь до шаблона админки

		$this->aLang=array(
			"Items"=>"Задачи", //Множественное число
			"items"=>"Задачи",
			"Item"=>"задачи", //Единственное число
			"item"=>"задачу",
			"item_genitive"=>"новости", //Родительный падеж
			"Item_genitive"=>"Новости"
		);

		$this->Template_Assign("aLang", $this->aLang);
	}

	protected function RegisterActions() {
		$this->AddAction('default','ActionDefault');
		$this->AddAction('add','ActionForm');
		$this->AddAction('edit','ActionForm');
		$this->AddAction('update','ActionUpdate');
		$this->AddAction('activate','ActionActivate');
		$this->AddAction('deactivate','ActionDeactivate');
		$this->AddAction('delete','ActionDelete');
		$this->AddAction('deleteall','ActionDeleteAll');
		$this->AddAction('removeimage','ActionRemoveImage');
        $this->AddAction('loadfile','LoadFile');
	}

	protected function ActionDefault() {
		if( !$this->AccessCheck("R") ) return $this->AccessDenied();
		$aCsv=$this->ComponentCsv_Csv_GetCsvByNode($this->oNode->getId());
		$this->Template_Assign("aCsv", $aCsv);
		$this->Template_Assign("sFormTitle", $this->oNode->getTitle());
		$this->SetTemplate("csv_list.tpl");
	}
	protected function ActionForm(ComponentCsv_ModuleCsv_EntityCsv $oCsv = null){
		if( !$this->AccessCheck("V") ) return $this->AccessDenied();
		$this->Template_Assign("sFormTitle", "Добавление ".$this->aLang['item_genitive']);
		$this->Template_Assign("sFormAction", "update");
		$this->Template_AddCss($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css");
		$this->Template_AddCss($this->sTemplatePath."assets/bootstrap/css/bootstrap-fileupload.css");
		$this->Template_AddJs($this->sTemplatePath."assets/chosen-bootstrap/chosen/chosen.jquery.min.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js");
		$this->Template_AddJs($this->sTemplatePath."assets/bootstrap/js/bootstrap-fileupload.js");
		$this->Template_AddJs($this->sTemplatePath."assets/ckeditor/ckeditor.js");

		if( !$oCsv ){
			if( $iId = intval(Router::getParam(0)) ){
				$oCsv=$this->ComponentCsv_Csv_GetCsvById($iId);
			}else{
				$oCsv=Engine::GetEntity('ComponentCsv_Csv');
				$oCsv->setNode($this->oNode->getId());
				$oCsv->setDatetime(date('Y-m-d H:i:s'));
				$oCsv->setActive(1);
			}
		}

		$this->Template_Assign("oCsv", $oCsv);
		$this->Template_Assign("action", "update");
		$this->SetTemplate("Csv_form.tpl");
	}

	protected function ActionUpdate(){
		if( !$this->AccessCheck("V") ) return $this->AccessDenied();
		if( $iId = getRequest('id', null, 'id') ){
			$oCsv=$this->ComponentCsv_Csv_GetCsvById($iId);
		}else{
			$oCsv=Engine::GetEntity('ComponentCsv_Csv');
		}

		$oCsv->setActive(getRequest('active'));
		$oCsv->setNode($this->oNode->getId());
		$oCsv->setType();
		$oCsv->setSort(1);
		$oCsv->setDatetime(getRequest('date'));
		$oCsv->setGroup(getRequest('group'));
		$oCsv->setTask(getRequest('task'));
        $oCsv->setTimeFact(getRequest('time_fact'));
        $oCsv->setTimePlan(getRequest('time_plan'));
        $oCsv->setSum(getRequest('sum'));
        $oCsv->setCreatedAt(date('Y-m-d'));
        $oCsv->setLink(getRequest('link'));

		if ($oCsv->getId()) $this->ComponentCsv_Csv_Update($oCsv);
		else $oCsv=$this->ComponentCsv_Csv_Add($oCsv);

        if (!getRequest("apply")) header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
        else header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/edit/".$oCsv->getId()."/");
	}

    protected function LoadFile(){
        $var = [];
        $content = fopen($_FILES["file"]["tmp_name"], "r");
        $fileCountable = file($_FILES["file"]["tmp_name"]);
        $headers = [1, 4];
        for ($i = 0; $i < count($fileCountable); $i++) {
            $csvContent = fgetcsv($content);
            $headers = $fileCountable[0];
            for ($j = 0; $j < count($csvContent); $j++) {
                $var[$i][$j] = $csvContent[$j];
            }
        }
        fclose($content);

        for ($i=1; $i < count($var); $i++) {
            $oCsv=Engine::GetEntity('ComponentCsv_Csv');
            $oCsv->setActive(1);
            $oCsv->setNode($this->oNode->getId());
            $oCsv->setType();
            $oCsv->setSort(1);
            $oCsv->setDatetime(date('Y-m-d'));
            $oCsv->setGroup($var[$i][0]);
            $oCsv->setTask($var[$i][1]);
            $oCsv->setTimeFact($var[$i][2]);
            $oCsv->setTimePlan($var[$i][3]);
            $oCsv->setSum($var[$i][4]);
            $oCsv->setCreatedAt(date('Y-m-d', strtotime($var[$i][5])));
            $oCsv->setLink($var[$i][6]);

            if ($oCsv->getId()) $this->ComponentCsv_Csv_Update($oCsv);
            else $oCsv=$this->ComponentCsv_Csv_Add($oCsv);
        }

        header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
    }

	protected function ActionDelete(){
		if( !$this->AccessCheck("W") ) return $this->AccessDenied();
		$this->ComponentCsv_Csv_Delete(intval(Router::GetParam(0)));
		header("Location: ".Config::Get("host")."admin/content/".$this->oNode->getId()."/");
	}
	public function ActionDeleteall(){
		if( !$this->AccessCheck("W") ) return $this->AccessDenied();
		if( $aIds = explode(',', Router::GetParam(0)) ){
			foreach ($aIds as $iId){
				$this->ComponentCsv_Csv_Delete( intval($iId) );
			}
		}
		$result['state']="success";
		$result['msg']=0;
		echo json_encode($result);
		exit;
	}
	protected function ActionDeactivate(){
		if( !$this->AccessCheck("V") ) return $this->AccessDenied();
		$iId=intval(Router::GetParam(0));
		if ($this->ComponentCsv_Csv_Deactivate($iId)){
			$result['state']="success";
			$result['msg']=0;
		}
		else $result['state']="error";
		echo json_encode($result);
		exit;
	}
	protected function ActionActivate(){
		if( !$this->AccessCheck("V") ) return $this->AccessDenied();
		$iId=intval(Router::GetParam(0));
		if ($this->ComponentCsv_Csv_Activate($iId)){
			$result['state']="success";
			$result['msg']=1;
		}
		else $result['state']="error";
		echo json_encode($result);
		exit;
	}

	protected function ActionRemoveImage(){
		if( !$this->AccessCheck("V") ) return $this->AccessDenied();
		$iId=intval(Router::GetParam(0));
		$oCsv=$this->ComponentCsv_Csv_GetCsvById($iId);
		$this->Image_Delete($oCsv->getImage());
		$oCsv->setImage("");
		$this->ComponentCsv_Csv_Update($oCsv);
		exit;
	}
}
