<?php


namespace wdmg\widgets;

/**
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @copyright       Copyright (c) 2019 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 */

use yii\web\AssetBundle;

class SelectInputAssets extends AssetBundle
{

    public $sourcePath = '@bower/bootstrap-selectinput-plugin/src';

    public function init()
    {
        parent::init();
        $this->css = YII_DEBUG ? ['css/selectinput.css'] : ['css/selectinput.min.css'];
        $this->js = YII_DEBUG ? ['js/selectinput.js'] : ['js/selectinput.min.js'];
        $this->depends = [\yii\web\JqueryAsset::className()];
    }

}