<?php
/**
 * AssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\imperavi;

/**
 * Class AssetBundle
 * @package rmrevin\yii\imperavi
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/rmrevin/yii2-imperavi/assets';

    /**
     * @var string
     */
    public $language;

    /**
     * @inheritdoc
     */
    public $css = [
        'redactor.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'redactor.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!empty($this->language)) {
            $this->js[] = 'lang/' . $this->language . '.js';
        }
    }
}