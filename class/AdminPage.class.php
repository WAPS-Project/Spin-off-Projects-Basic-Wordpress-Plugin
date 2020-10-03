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
			foreach ($_POST as $key => $value) {
				$payload[$key] = Helper::checkRequest("post", $key);
			}
			// $payload = [
			// 	"Name" => Helper::checkRequest("post", "Name"),
			// 	"Type" => Helper::checkRequest("post", "Type"),
			// 	"Cool_Number" => Helper::checkRequest("post", "Cool_Number")
			// ];

			$runTimeConfig::addToBase($payload);

			file_put_contents($pageUrl, $runTimeConfig::getBase());
		}

	}
}
