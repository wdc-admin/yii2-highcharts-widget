<?php
/**
 * @link https://github.com/LAV45/yii2-db-migrate
 * @copyright Copyright (c) 2015 LAV45!
 * @author Alexey Loban <lav451@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace lav45\highcharts;

use yii\web\AssetBundle;

class HighmapsAsset extends AssetBundle
{
    public $sourcePath = '@bower/highcharts-release';

    public $js = [
        'highmaps.js'
    ];

    public $depends = [
        'lav45\highcharts\HighchartsAsset'
    ];
}