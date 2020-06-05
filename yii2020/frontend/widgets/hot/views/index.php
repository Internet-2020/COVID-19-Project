<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 热门浏览组件
 */

use yii\helpers\Url;
?>
<?php if(!empty($data)):?>
<div class="panel">
    <div class="panel-title box-title">
        <span><strong><?=$data['title']?></strong></span>
    </div>
    <div class="panel-body hot-body">
        <?php foreach ($data['body'] as $list):?>
        <div class="clearfix hot-list">
            <div class="pull-left media-left">
                浏览<em><?=$list['browser']?></em>
            </div>
            <div class="media-right">
                <a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=$list['title']?></a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif;?>
