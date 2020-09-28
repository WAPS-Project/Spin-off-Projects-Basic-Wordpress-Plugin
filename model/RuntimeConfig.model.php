<?php


namespace PluginWPModel;

use PluginWPClass\JsonHandler;

class RuntimeConfig {

	private static $base = array("head" => array("title" => "configFile"), "configData" => array());

	public static function addToBase($obj)
	{
		array_push(self::$base["configData"], $obj);
		self::$base["configData"];
	}

	public static function getBase()
	{
		return json_encode(self::$base, JSON_FORCE_OBJECT);
	}
}
