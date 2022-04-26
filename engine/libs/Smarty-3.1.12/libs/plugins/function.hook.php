<?
function smarty_function_hook($aParams,&$oSmarty) {	

	if( !empty($aParams['hookgroup']) ){
		$oGroup = Engine::getInstance()->Hook_GetGroupByName($aParams['hookgroup']);
		if( !$oGroup ) return;
		$aHooks = Engine::getInstance()->Hook_GetHooksByNodeGroup( Router::GetCurrentNode()->getId(), $oGroup->getId() );
		foreach($aHooks as $oHook){
			$aHookParams = $oHook->getParamsArray();
			$aHookParams["name"] = $oHook->getName();
			$aHookParams["component"] = $oHook->getComponent();
			smarty_function_hook($aHookParams,$oSmarty);
		}
		return;
	}else{

		if(empty($aParams['name'])) {
			$oSmarty->trigger_error("Hook: отсутствует параметр 'name'");
			return;
		}
		
		if(empty($aParams['template'])) {
			$oSmarty->trigger_error("Hook: отсутствует параметр 'template'");
			return;
		}

		$sHookName = ( $aParams['component']?"Component".ucfirst($aParams['component'])."_":"" )."Hook".ucfirst($aParams["name"])."_".ucfirst($aParams["name"]);
			
		$result = call_user_func_array(array(
			Engine::getInstance(),  //объект
			$sHookName), 			//метод
			array($aParams)			//массив передаваемых параметров (мы передаем массив $aParams в качестве первого параметра)
		);
		echo $result;
	}
}