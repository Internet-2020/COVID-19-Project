<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 世界各国数据地图 view层
*/

header('Content-Type: text/html; charset=utf-8');
require('../../vendor/autoload.php');

use \Hisune\EchartsPHP\ECharts;
use \Hisune\EchartsPHP\Config;
use \Hisune\EchartsPHP\Doc\IDE\Series;
?>

<div>
    <div id="chart1" class = row-lg-6>
        <?php  
            $chart = new ECharts();
            $chart->title->text = '世界总确诊人数统计';
            $chart->title->left= 'center';
            $chart->visualMap->min = 0;
            $chart->visualMap->max = 200000;
            $chart->visualMap->text = ['High', 'Low'];
            $chart->visualMap->calculable = true;
            $chart->visualMap->inRange->color = ['#FFF7FB', '#DC143C'];
            $chart->tooltip->trigger = 'item';
            $chart->tooltip->formatter = '{a}<br>{b}  {c}';

            $array = array();
            for ($i=0; $i < count($country_name_english); $i++) { 
                             $array[] = array(
                                'name' => $country_name_english[$i],
                                'value' => $country_confirmedCount[$i],
                             );
                         }

            $chart->series[] = array(
                        'name' => '总确诊人数',
                        'type' => 'map',
                        'map' =>'world',
                        'data' => $array,
                    );

            Config::addExtraScript('world.js', '../web/statics/assets/js');
            echo $chart->render('map1', ['style' => 'height: 500px;']);
        ?>
    </div>

    <div id="chart2" class = row-lg-6>
        <?php
            $chart2 = new ECharts();
            $chart2->title->text = '世界死亡人数统计';
            $chart2->title->left= 'center';
            $chart2->visualMap->min = 0;
            $chart2->visualMap->max = 10000;
            $chart2->visualMap->text = ['High', 'Low'];
            $chart2->visualMap->calculable = true;
            $chart2->visualMap->inRange->color = ['#FFFFFF', '#272727'];
            $chart2->tooltip->trigger = 'item';
            $chart2->tooltip->formatter = '{a}<br>{b}  {c}';

            $array2 = array();
            for ($i=0; $i < count($country_name_english); $i++) { 
                             $array2[] = array(
                                'name' => $country_name_english[$i],
                                'value' => $country_deadCount[$i],
                             );
                         }

            $chart2->series[] = array(
                        'name' => '死亡人数',
                        'type' => 'map',
                        'map' =>'world',
                        'data' => $array2,
                    );

            Config::addExtraScript('world.js', '../web/statics/assets/js');
            echo $chart2->render('map2', ['style' => 'height: 500px;']);
        ?>
    </div>

    <div id="chart3" class = row-lg-6>
        <?php
            $chart3 = new ECharts();
            $chart3->title->text = '世界治愈人数统计';
            $chart3->title->left= 'center';
            $chart3->visualMap->min = 0;
            $chart3->visualMap->max = 100000;
            $chart3->visualMap->text = ['High', 'Low'];
            $chart3->visualMap->calculable = true;
            $chart3->visualMap->inRange->color = ['#F0FFF0', '#006000'];
            $chart3->tooltip->trigger = 'item';
            $chart3->tooltip->formatter = '{a}<br>{b}  {c}';

            $array3 = array();
            for ($i=0; $i < count($country_name_english); $i++) { 
                             $array3[] = array(
                                'name' => $country_name_english[$i],
                                'value' => $country_curedCount[$i],
                             );
                         }

            $chart3->series[] = array(
                        'name' => '治愈人数',
                        'type' => 'map',
                        'map' =>'world',
                        'data' => $array3,
                    );


            Config::addExtraScript('world.js', '../web/statics/assets/js');
            echo $chart3->render('map3', ['style' => 'height: 500px;']);
        ?>
    </div>
</div>