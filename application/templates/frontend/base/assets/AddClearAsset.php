<?php
/**
 * @package    oakcms
 * @author     Hryvinskyi Volodymyr <script@email.ua>
 * @copyright  Copyright (c) 2015 - 2017. Hryvinskyi Volodymyr
 * @version    0.0.1-beta.0.1
 */

namespace app\templates\frontend\base\assets;

use yii\web\AssetBundle;

class AddClearAsset extends AssetBundle
{
    public $sourcePath = '@bower/add-clear/';
    public $basePath = '@app/add-clear/';

    public $css = [];
    public $js = [
        'addclear.min.js',
    ];
    public $depends = [];
}
