<?
$aNodes = Engine::GetInstance()->Node_GetNodesByComponent("сsv");
foreach ($aNodes as $i => $oNode) {
	$aсsvNodes[$oNode->getId()] = "id".$oNode->getId()." (".$oNode->getUrl().") ".$oNode->getTitle();
	if( !$i ) $iсsvNodeDefault = $oNode->getId();
}
unset($aNodes);

$this->SetConfig("сsv", "сsv", array(
	"template" => array(
		"title" => "Шаблон",
		"type" => "select",
		"values" => array(
			"default"=>"По умолчанию (default)",
			"attendance"=>"Участники"
		),
		"default" => "default"
	),
	"limit" => array(
		"title" => "Колличество элементов",
		"type" => "text",
		"default" => 10
	),
	"node" => array(
		"title" => "ID раздела сайта",
		"type" => "select",
		"values" => $aсsvNodes,
		"default" => $iсsvNodeDefault
	)
));