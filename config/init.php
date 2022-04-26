<?
function func_stripslashes(&$data) {
	if (is_array($data)) {
		foreach ($data as $sKey => $value) {
			if (is_array($value)) {
				func_stripslashes($data[$sKey]);
			} else {
				$data[$sKey]=stripslashes($value);
			}
		}
	} else {
		$data=stripslashes($data);
	}
}
function mpr($array, $die=0){
	print("<pre>");
	print_r($array);
	print("</pre>");
	if(!empty($die)){
		die("stop");
	}
}
function mbt(){
	foreach(debug_backtrace() as $i => $b){
		echo '<div onclick="$(this).next().slideToggle();">open '.$i.'</div>';
		echo '<div style="display:none;">';
		mpr($b);
		echo '</div>';
	}
}
function removeWhitespace($string){ // функция безопасности
	$string = checkSpecialChars($string);
	return $string;
}
function check ($mData) {
	checkSpecialChars(htmlspecialchars(strip_tags(trim($mData))));
}
function checkSpecialChars ($mData) {
	$mData = str_replace('\\\"', '\"', $mData);
	$aPatterns = array(/*'/&/', '/\"/',*/ '/§/', '/©/', '/®/', '/°/', '/±/', '/·/', '/µ/', '/«/', '/»/', '/“/', '/”/', '/–/', '/¤/');
	$aReplacements = array(/*'&amp;', '&quot;',*/ '&sect;', '&copy;', '&reg;', '&deg;', '&plusmn;', '&middot;', '&micro;', '&laquo;', '&raquo;', '&laquo;', '&raquo;', '&ndash;', '&curren;');
	$mData = trim(preg_replace($aPatterns, $aReplacements, $mData));
	$mData = str_replace('\\\\\\\"', '\"', $mData);
	return $mData;
}
function validateVar($var, $type=null, $iMin=1, $iMax=250){
	/* TODO $type=phone */
	if( isset($var) && !is_array($var) ){
		$var=removeWhitespace($var);
		$var=($var);
	}
	switch($type)
	{
		case 'id': 			if (!preg_match("/^\d{".$iMin.','.$iMax."}$/" , $var)					){ return false; } break;				
		case 'float': 		if (!preg_match("/^[\-]?\d+[\.]?\d*$/" , $var)							){ return false; } break;	
		case 'mail': 		if (!preg_match("/^[\da-z\_\-\.\+]+@[\da-z_\-\.]+\.[a-z]{2,5}$/i" ,$var)){ return false; } break;
		case 'login': 		if (!preg_match("/^[\da-z\_\-]{".$iMin.','.$iMax."}$/i" , $var)			){ return false; } break;
		case 'md5': 		if (!preg_match("/^[\da-z]{32}$/i" , $var)								){ return false; } break;
		case 'password': 	if (!mb_strlen($var,'UTF-8')>=$iMin										){ return false; } break;
		case 'text': 		if (!mb_strlen($var,'UTF-8')>=$iMin and mb_strlen($var,'UTF-8')<=$iMax	){ return false; } break;
		default: break;
	}
	return $var;
}
function getRequest($var, $method=null, $type=null, $iMin=1, $iMax=250){ //берет GET/POST + валидация
	switch (strtolower($method)){
		case "get":
			$var=$_GET[$var];
			break;
		case "post":
			$var=$_POST[$var];
			break;
		default:
			$var=$_REQUEST[$var];
			break;
	}
	return validateVar($var, $type, $iMin, $iMax);
}
function getRequestPreg($pattern, $method=null, $type=null, $iMin=1, $iMax=250){ //берет GET/POST удовлетворяющие регулярному выражению + валидация
	$aResults=array();
	switch (strtolower($method)){
		case "get":
			foreach ($_GET as $var=>$val){
				if (preg_match($pattern , $var)){
					$aResults[$var]=getRequest($var, $method, $type, $iMin, $iMax);
				}
			}
			break;
		case "post":
			foreach ($_POST as $var=>$val){
				if (preg_match($pattern , $var)){
					$aResults[$var]=getRequest($var, $method, $type, $iMin, $iMax);
				}
			}
			break;
		default:
			foreach ($_REQUEST as $var=>$val){
				if (preg_match($pattern , $var)){
					$aResults[$var]=getRequest($var, $method, $type, $iMin, $iMax);
				}
			}
			break;
	}
	return $aResults;
}
function getContextByWord($sText, $sWord){
	$sText = strip_tags( $aResults[$iKey] );
	$iStart = mb_stripos($sText, $sWord);
	if( !$iStart ) return false;
	$iStart = ($iStart<20) ? 0 : ($iStart-20);
	$iStrLen = mb_strlen($sWord) + 20;
	$sText = ($iStart?"":"...").mb_substr($sText, $iStart, $iStrLen)."...";
	return $sText;
}