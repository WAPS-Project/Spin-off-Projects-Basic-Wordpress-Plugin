<?php


namespace PluginWPClass;


class ConfigLoader
{
    public static function loadConfig($path)
    {
        $config = self::validateConfig($path);

        if ($config != false) {

            foreach ($config as $firstLevel) {
                foreach ($firstLevel as $key => $value) {
                    define(strtoupper($key), $value);
                }
            }
            error_reporting(E_ALL);
		}

	}

	public static function returnConfig($path)
	{
		return self::validateConfig($path);
	}

    private static function validateConfig($path)
    {

		if(is_dir($path))
		{
			$files = scandir($path);
			foreach ($files as $file) {
				$fileParts = explode('.', $file);

				if (end($fileParts) === 'json') {
					$config = file_get_contents($path . $file);
					$configObj = json_decode($config, true, 512, JSON_THROW_ON_ERROR);

					if ($configObj['head']['title'] === 'configFile') {
						return $configObj;
					}
				}
			}
		} else {
			$fileParts = explode('.', $path);
			if (end($fileParts) === 'json') {
				$config = file_get_contents($path);
				$configObj = json_decode($config, true, 512, JSON_THROW_ON_ERROR);

				if ($configObj['head']['title'] === 'configFile') {
					return $configObj;
				}
			}
		}


        return false;
    }
}
