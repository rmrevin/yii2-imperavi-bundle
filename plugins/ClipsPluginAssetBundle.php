<?php
/**
 * ClipsPluginAssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\imperavi\plugins;

/**
 * Class ClipsPluginAssetBundle
 * @package rmrevin\yii\imperavi\plugins
 */
class ClipsPluginAssetBundle extends PluginAssetBundle
{

    /**
     * @inheritdoc
     */
    public $name = 'clips';

    /**
     * @inheritdoc
     */
    public $css = [
        'plugins/clips/clips.css',
    ];
}