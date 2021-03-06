<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/statics';
    public $css = [
        //'css/site.css',
        'assets/mycss.css',
        'vendor/plugins/summernote/summernote.css',
        'assets/skin/default_skin/css/theme.css',
        'assets/admin-tools/admin-forms/css/admin-forms.css',
        'assets/css/custom.css',
        'assets/css/style.blue.css',
        'assets/css/style.default.css',
        'assets/css/style.green.css',
        'assets/css/style.lightblue.css',
        'assets/css/style.marsala.css',
        'assets/css/style.pink.css',
        'assets/css/style.red.css',
        'assets/css/style.violet.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/font-awesome/css/font-awesome.min.css',
        
    ];
    public $js = [
        //'vendor/bootstrap/js/bootstrap.min.js',
        //'vendor/jquery/jquery-1.11.1.min.js',
        'vendor/jquery/jquery_ui/jquery-ui.min.js',
        'vendor/plugins/summernote/summernote.min.js',
        'assets/js/utility/utility.js',
        'assets/js/demo/demo.js',
        'assets/js/main.js',
        
    ];
    public $depends = [
        /* bootstrap.js ������
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        */
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
     
    ];
    public static function addScript($view, $jsfile)
    {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    
    }
    
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    }
    
   
}
