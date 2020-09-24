DEPLOY_TARGET=C:/xampp/htdocs/wp-content/plugins/waps-plugin
# ./waps-plugin

rm -rf $DEPLOY_TARGET
mkdir $DEPLOY_TARGET
cp -rf ./class $DEPLOY_TARGET/class
cp -rf ./config $DEPLOY_TARGET/config
cp -rf ./content $DEPLOY_TARGET/content
rm -rf $DEPLOY_TARGET/content/src
cp -rf ./custom $DEPLOY_TARGET/custom
cp -rf ./model $DEPLOY_TARGET/model
cp -rf ./TestPluginWP.php $DEPLOY_TARGET/TestPluginWP.php
cp -rf ./core.loader.php $DEPLOY_TARGET/core.loader.php
cp -rf ./LICENSE $DEPLOY_TARGET/LICENSE
