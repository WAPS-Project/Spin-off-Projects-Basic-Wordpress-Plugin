<?php


namespace PluginWPClass;


class Helper
{
	public static function getUrlInterpreter()
	{
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('/', $url);
		$page = ucfirst($url[1]);
		if (isset($url[2])) {
			return 'Error_404';
		}

		if ($page === '') {
			return 'Home';
		}

		return $page;
	}

	public static function getRealIp()
	{
		$ip = 'undefined';
		if (isset($_SERVER)) {
			$ip = $_SERVER['REMOTE_ADDR'];
			if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
		} else {
			$ip = getenv('REMOTE_ADDR');
			if (getenv('HTTP_X_FORWARDED_FOR')) {
				$ip = getenv('HTTP_X_FORWARDED_FOR');
			} elseif (getenv('HTTP_CLIENT_IP')) {
				$ip = getenv('HTTP_CLIENT_IP');
			}
		}
		$ip = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');
		return $ip;
	}

	public static function checkRequest($mode, $key)
	{
		switch ($mode) {
			case 'post':
				return $_POST[$key] ?? null;

			case 'get':
				return $_GET[$key] ?? null;
		}

		return null;
	}

}
