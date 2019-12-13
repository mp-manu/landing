<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      //Css Files
      'css/bootstrap.css',
      'css/font-awesome.css',
      'css/flaticon.css',
      'css/slick-slider.css',
      'css/prettyphoto.css',
      'build/mediaelementplayer.css',
      'style.css',
      'css/color.css',
      'css/color-two.css',
      'css/color-three.css',
      'css/color-four.css',
      'css/responsive.css',
    ];
    public $js = [
    //jQuery (necessary for JavaScript plugins)
    'script/jquery.js',
    'script/modernizr.js',
    'script/bootstrap.min.js',
    'script/jquery.prettyphoto.js',
    'script/jquery.countdown.min.js',
    'script/fitvideo.js',
    'script/skills.js',
    'script/slick.slider.min.js',
    'script/waypoints-min.js',
    'build/mediaelement-and-player.min.js',
    'script/isotope.min.js',
    'script/jquery.nicescroll.min.js',
    'script/functions.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
