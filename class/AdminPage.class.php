<?php


namespace PluginWPClass;

use PluginWPModel\RuntimeConfig;

class AdminPage
{
	public static function runPage($config, $pageUrl)
	{
		echo("<div id='wapsSessionStorage' style='display:none'>" . json_encode($config)  . "</div>");
		echo("<div id='wapsAdminPanel' class='wapsAdminPanel'>Plugin HTML Container</div>");

		if(Helper::checkRequest("post", "Name") && Helper::checkRequest("post", "Type")) {
			$runTimeConfig = new RuntimeConfig();

			$runTimeConfig::addToBase(["Name" => Helper::checkRequest("post", "Name")]);
			$runTimeConfig::addToBase(["Type" => Helper::checkRequest("post", "Type")]);

			file_put_contents($pageUrl, $runTimeConfig::getBase());
		}

	}
}
