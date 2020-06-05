<?php
/**
 *Team:Internet-2020
 *Coding by 
 *周新星，1811526
 *郑羽辰，1811524
 *前台 国内每日数据折线图 view层
 */

use Hisune\EchartsPHP\ECharts;

?>
<div id="chart1">
        <?php  
        $chart = new ECharts();
        $chart->title->text = '国内疫情数据统计';
        $chart->title->left= 'center';
        $chart->title->top= '0px';
        $chart->tooltip->show = true;
        $chart->legend->data[] = '总确诊人数';
        $chart->legend->data[] = '死亡人数';
        $chart->legend->data[] = '治愈人数';
        $chart->legend->data[] = '怀疑人数';
        $chart->legend->top= '30px';
        $chart->xAxis[] = array(
            'type' => 'category',
            'data' => $updateTime
        );
        $chart->yAxis[] = array(
            'type' => 'value'
        );
 
        $chart->series[] = array(
            'name' => '总确诊人数',
            'type' => 'line',
            //'stack' => '总量',
            'data' => $confirmedCount
 
        );
        $chart->series[] = array(
            'name' => '死亡人数',
            'type' => 'line',
            'data' => $deadCount
 
        );
        $chart->series[] = array(
            'name' => '治愈人数',
            'type' => 'line',
            'data' => $curedCount
 
        );
        $chart->series[] = array(
            'name' => '怀疑人数',
            'type' => 'line',
            'data' => $suspectedCount
 
        );
        echo $chart->render('simple-custom-1');
 
        ?>