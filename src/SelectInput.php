<?php

namespace wdmg\widgets;

/**
 * Yii2 SelectInput
 *
 * @category        Widgets
 * @version         1.0.0
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @link            https://github.com/wdmg/yii2-selectinput
 * @copyright       Copyright (c) 2019 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 *
 */

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;
use yii\base\InvalidConfigException;

class SelectInput extends InputWidget
{

    public $items = [];

    public $options = [
        'class' => 'form-control'
    ];

    public $pluginOptions = [
        'dropdownClass' => '.dropdown',
        'listClass' => '.dropdown-menu',
        'itemClass' => '.dropdown-item',
        'toggleClass' => '.btn .btn-default .dropdown-toggle',
        'toggleText' => 'Dropdown',
        'toggleCaret' => '<span class="caret"></span>',
        'toggleChange' => true
    ];

    private $selectinputId = null;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        // Build select
        $input = Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);

        // Get select id
        $this->selectinputId = $this->options['id'];

        // Register assets
        $this->registerAssets();

        echo $input;
    }

    /**
     * Register required assets for the widgets
     */
    public function registerAssets()
    {
        $js = [];
        $view = $this->getView();

        // Register selectinput assets to view
        SelectInputAssets::register($view);

        // Parse plugin options and insert inline
        $pluginOptions = !empty($this->pluginOptions) ? Json::encode($this->pluginOptions) : '';
        $js[] = "; jQuery('#" . $this->selectinputId . "').selectinput($pluginOptions);";

        // Register selectinput component initial script
        $view->registerJs(implode("\n", $js));

    }

}
