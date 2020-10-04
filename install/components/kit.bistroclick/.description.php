 <?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("KIT_CAT_BISTROCKLICK_NAME"),
	"DESCRIPTION" => GetMessage("KIT_CAT_BISTROCKLICK_DESCRIPTION"),
	"ICON" => "/images/component.gif",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"NAME" => GetMessage("KIT"),
		"ID" => "kit",
		"CHILD" => array(
			"ID" => 'kit_order',
			"NAME" => GetMessage("KIT_ORDER"),
			"SORT" => 9,
		),
	),
);
?>