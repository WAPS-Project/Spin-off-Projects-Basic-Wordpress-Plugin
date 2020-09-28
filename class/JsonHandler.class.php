<?php


namespace PluginWPClass;


class JsonHandler
{
    public static function FireSimpleJson($key, $value)
    {
        $array = [[$key => $value]];
        $json = self::BuildJson($array);
        echo $json;
    }

    public static function BuildJson($objectArray)
    {
        $arrayMaster = [];
        foreach ($objectArray as $value) {
            $arrayMaster[] = $value;
        }
        return json_encode($arrayMaster, JSON_THROW_ON_ERROR, 512);
    }

}
