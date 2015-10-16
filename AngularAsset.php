<?php

/**
 * @copyright Copyright &copy; Oliver Carreño, 2014 - 2015
 * @package yii2-angularui
 * @version 1.0.0
 */

namespace orcsis\angularui;

use Yii;

/**
 * Asset bundle for Angular-Boostrap Widget
 *
 * @author Oliver Carreño <orcoliver@gmail.com>
 * @since 1.0
 */
class AngularAsset extends \yii\web\AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/angular';

    /**
     * @inheritdoc
     */
    public $js = [
        (YII_DEBUG ? 'angular.js' : 'angular.min.js'),
    ];

    /**
     * @inheritdoc
     */
    /*public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];*/
}