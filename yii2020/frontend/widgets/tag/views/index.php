<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 标签云
 */

use yii\helpers\Url;
?>
<div class="panel-title box-title">
    <span><strong><?=$data['title']?></strong></span>
    </div>
<div class="panel-body padding-left-0">
    <div class="tag-cloud">
        <?php foreach ($data['body'] as $list):?>
		<a><?=$list['tag_name']?></a>
		<?php endforeach;?>
    </div>
</div>