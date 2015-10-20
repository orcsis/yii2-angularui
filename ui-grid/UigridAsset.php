<?php

/**
 * @copyright Copyright &copy; Oliver Carreño, 2014 - 2015
 * @package yii2-angularui
 * @version 1.0.0
 */

namespace orcsis\angularui\bootstrap;

use Yii;

/**
 * Asset bundle for Angular-Boostrap Widget
 *
 * @author Oliver Carreño <orcoliver@gmail.com>
 * @since 1.0
 */
class UigridAsset extends \yii\web\AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/angular-ui-grid';

    /**
     * @inheritdoc
     */
    public $js = [
        (YII_DEBUG ? 'ui-grid.js' : 'ui-grid.min.js'),
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        (YII_DEBUG ? 'ui-grid.css' : 'ui-grid.min.css'),
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'orcsis\angularui\AngularAsset',
    ];
}