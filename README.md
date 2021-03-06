[![Yii2](https://img.shields.io/badge/required-Yii2_v2.0.33-blue.svg)](https://packagist.org/packages/yiisoft/yii2)
[![Downloads](https://img.shields.io/packagist/dt/wdmg/yii2-selectinput.svg)](https://packagist.org/packages/wdmg/yii2-selectinput)
[![Packagist Version](https://img.shields.io/packagist/v/wdmg/yii2-selectinput.svg)](https://packagist.org/packages/wdmg/yii2-selectinput)
![Progress](https://img.shields.io/badge/progress-ready_to_use-green.svg)
[![GitHub license](https://img.shields.io/github/license/wdmg/yii2-selectinput.svg)](https://github.com/wdmg/yii2-selectinput/blob/master/LICENSE)

# Yii2 SelectInput
SelectInput widget for Yii2

# Requirements 
* PHP 5.6 or higher
* Yii2 v.2.0.33 and newest
* Yii2 Bootstrap
* [Bootstrap SelectInput](https://github.com/wdmg/bootstrap-selectinput)

# Installation
To install the widget, run the following command in the console:

`$ composer require "wdmg/yii2-selectinput"`

# Usage
Example of standalone widget:

    <?php
    
    use wdmg\widgets\SelectInput;
    ...
    
    echo SelectInput::widget([
        'model' => $model,
        'attribute' => 'type',
        'items' => [
            'value' => 'Label',
            ...
        ],
        'options' => [
            'class' => 'form-control'
        ],
        'pluginOptions' => [
            'dropdownClass' => '.dropdown',
            'listClass' => '.dropdown-menu',
            'itemClass' => '.dropdown-item',
            'toggleClass' => '.btn .btn-default .dropdown-toggle',
            'toggleText' => 'Dropdown',
            'toggleCaret' => '<span class="caret"></span>',
            'toggleChange' => true,
            'autocomplete' => false,
            'minInput' => 2
        ]
    ])
    
    ?>

Example of use with ActiveForm:

    <?php
    
    use wdmg\widgets\SelectInput;
    ...
    
    $form = ActiveForm::begin();
    ...
    
    echo $form->field($model, 'type')->widget(SelectInput::class, [
        'items' => [
            'value' => 'Label',
            ...
        ],
        'options' => [
            'class' => 'form-control'
        ],
        'pluginOptions' => [
            'dropdownClass' => '.dropdown',
            'listClass' => '.dropdown-menu',
            'itemClass' => '.dropdown-item',
            'toggleClass' => '.btn .btn-default .dropdown-toggle',
            'toggleText' => 'Dropdown',
            'toggleCaret' => '<span class="caret"></span>',
            'toggleChange' => true,
            'autocomplete' => false,
            'minInput' => 2
        ]
    ]);
    ...
    
    ActiveForm::end();
    
    ?>


# Options

SelectInput extends InputWidget so you can use any options available for this widget. In addition, you can use these custom options if necessary:

| Name                   | Type    | Default                   | Description            |
|:---------------------- | ------- |:------------------------- |:---------------------- |
| options                | array   | `['class' => 'form-control']` | Standard options for the input widget. |
| pluginOptions          | array   | `['dropdownClass' => '.dropdown', 'listClass' => '.dropdown-menu', 'itemClass' => '.dropdown-item', 'toggleClass' => '.btn .btn-default .dropdown-toggle', 'toggleText' => 'Dropdown', 'toggleCaret' => '<span class="caret"></span>', 'toggleChange' => true`, 'autocomplete' => false, 'minInput' => 2 | Plugin SelectInput options passed to js. Read more here (https://github.com/wdmg/bootstrap-selectinput). |
| items                  | array   | `['value' => 'Label']` | Array values with labels. |


            
# Status and version
* v.1.0.9 - Update dependencies
* v.1.0.8 - Fixed widget ID and init after Pjax reloading
* v.1.0.7 - Update pluginOptions and plugin version
* v.1.0.6 - Fixed deprecated class declaration
* v.1.0.5 - Update README.md. Update Yii2 version.