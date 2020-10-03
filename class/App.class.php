<?php


namespace PluginWPClass;

class App
{
	public static function runPage($config)
	{
		return '<div id="wapsApp">Your browser does not support JavaScript!</div><div id="wapsAppStorage" hidden>' . json_encode($config)  . '</div>';
	}
}
