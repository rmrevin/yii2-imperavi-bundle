<?php
/**
 * PluginAssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\imperavi\plugins;

/**
 * Class PluginAssetBundle
 * @package rmrevin\yii\imperavi\plugins
 */
abstract class PluginAssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/rmrevin/yii2-imperavi/assets';

    /**
     * @var string plugin filename
     */
    public $name;

    public function init()
    {
        $this->js[] = 'plugins/' . $this->name . '/' . $this->name . '.js';
    }
}