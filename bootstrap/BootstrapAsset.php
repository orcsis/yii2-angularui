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
class BoostrapAsset extends \yii\web\AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/lib';

    /**
     * @inheritdoc
     */
    public $js = [
        (YII_DEBUG ? 'ui-bootstrap-tpls.js' : 'ui-bootstrap-tpls.min.js'),
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}