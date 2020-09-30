<?php


namespace PluginWPModel;

use PluginWPClass\JsonHandler;

class RuntimeConfig {

	private static $base = array("head" => array("title" => "configFile"));

	public static function addToBase($obj)
	{
		self::$base["configData"] = $obj;
	}

	public static function getBase()
	{
		return json_encode(self::$base, JSON_FORCE_OBJECT);
	}
}
