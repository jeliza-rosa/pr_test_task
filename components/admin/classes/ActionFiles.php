<?
if( !$this->AccessCheck("W") ) die('Access denied!');
$this->Template_SetPageTitle("Файловый менеджер");
$this->Template_Assign("sPageTitleSmall", "загруженные файлы");
$this->Template_Assign("sAction", "files");

if (getRequest("CKEditor")){
	$this->SetTemplate("files_browse.tpl");
}else{
	$this->SetTemplate("files.tpl");
}

$this->Template_AddCss($this->sTemplatePath."assets/elfinder-2.0/css/elfinder.min.css");
$this->Template_AddCss($this->sTemplatePath."assets/elfinder-2.0/css/theme.css");
$this->Template_AddCss($this->sTemplatePath."assets/elfinder-2.0/css/jquery-ui.css");
		
$this->Template_ReplaceJs(0, $this->sTemplatePath."assets/elfinder-2.0/js/jquery.min.js");
$this->Template_AddJs($this->sTemplatePath."assets/elfinder-2.0/js/elfinder.min.js");
$this->Template_AddJs($this->sTemplatePath."assets/elfinder-2.0/js/i18n/elfinder.ru.js");
$this->Template_AddJs($this->sTemplatePath."assets/elfinder-2.0/js/elfinder.js");

if (isset($_FILES['upload']) and is_uploaded_file($_FILES['upload']['tmp_name'])) {				
	echo <<<EOF
<script type="text/javascript">
(function(){var d=document.domain;while (true){try{var A=window.parent.document.domain;break;}catch(e) {};d=d.replace(/.*?(?:\.|$)/,'');if (d.length==0) break;try{document.domain=d;}catch (e){break;}}})();
EOF;
	$rpl = array( '\\' => '\\\\', '"' => '\\"' );
	if ($sFileName=$this->Image_UploadImage($_FILES['upload'], "content")) {	
		//echo $sFileName;
		echo 'window.parent.CKEDITOR.tools.callFunction("'. $_GET['CKEditorFuncNum'] . '","'. strtr($sFileName, $rpl). '", "'. strtr( "Файл {$_FILES['upload']['name']} загружен успешно!", $rpl). '");';
	} else {
		echo 'window.parent.CKEDITOR.tools.callFunction("'. $_GET['CKEditorFuncNum'] . '","'. strtr($sFileName, $rpl). '", "'. strtr( "Ошибка! Не получилось загрузить файл!", $rpl). '");';
	}
	echo '</script>';
	exit;
}
