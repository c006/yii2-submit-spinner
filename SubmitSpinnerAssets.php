<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/24/14
 * Time: 11:47 AM
 */

namespace c006\yii2;


use yii\web\AssetBundle;
use yii\web\View;

class SubmitSpinnerAssets extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/c006/yii2-submit-spinner/assets';
    /**
     * @inheritdoc
     */
    public $css = [
        'c006-submit-spinner.css',
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'c006-submit-spinner.js'
    ];
    /**
     * @inheritdoc
     */
    public $depends = [

    ];

    public $jsOptions = [
        'position' => View::POS_END,
    ];

}
