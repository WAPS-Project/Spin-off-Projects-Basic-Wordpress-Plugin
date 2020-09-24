DEPLOY_TARGET=./waps-plugin

rm -rf $DEPLOY_TARGET
mkdir $DEPLOY_TARGET
cp -rf ./class $DEPLOY_TARGET/class
cp -rf ./config $DEPLOY_TARGET/config
cp -rf ./content/dist $DEPLOY_TARGET/content/dist
cp -rf ./content/img $DEPLOY_TARGET/content/img
cp -rf ./custom $DEPLOY_TARGET/custom
cp -rf ./model $DEPLOY_TARGET/model
cp -rf ./TestPluginWP.php $DEPLOY_TARGET/TestPluginWP.php
cp -rf ./core.loader.php $DEPLOY_TARGET/core.loader.php
cp -rf ./LICENSE $DEPLOY_TARGET/LICENSE
