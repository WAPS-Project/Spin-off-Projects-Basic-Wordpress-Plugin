<?php


namespace PluginWPClass;


class ScriptLoader
{
    public static function headScripts($path) {
        ?>
        <link href="<?php echo $path ?>content/dist/css/style.css">
        <?php
    }

    public static function footerScripts($path) {
        ?>

        <?php
    }

}