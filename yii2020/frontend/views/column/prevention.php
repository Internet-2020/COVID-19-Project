<?php

/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 *column\防疫栏目
*/

/* @var $this yii\web\View */

use frontend\widgets\banner1\bannerwidget;
use yii\base\Widget;

$this->title = '防疫栏目';
?>
<div class="row">
    <div class="col-lg-2">
    </div>

    <div class="col-lg-8">
    <?=bannerwidget::widget()?>
    </div>

    <div class="col-lg-10">
    </div>

    <div class="col-lg-3">
    </div>

	<div class="col-lg-6">
	<div>
    	<div>
    		<h1>戴口罩</h1>
    		<h3><p>口罩该怎么选？</p></h3>
    		<p style="font-size: 15px">选择一：一次性医用口罩，连续佩戴4小时更换，污染或潮湿后立即更换；</p>
    		<p style="font-size: 15px">选择二：N95医用防护口罩，连续佩戴4小时更换，污染或潮湿后立即更换。</p>
    		<p style="font-size: 15px">棉布口罩、海绵口罩均不推荐。</p>
    	</div>
    	<div>
    		<h3><p>如何正确佩戴口罩？</p></h3>
    		<p style="font-size: 15px">分清楚口罩的正面、反面、上端、下端。医用口罩颜色深的是正面，正面应该朝外；颜色比较浅的一面是反面，反面正对脸部；医用口罩上有鼻夹金属条，有金属条的部分应该在口罩的上方。</p >
    		<p style="font-size: 15px">戴口罩前应先将手洗干净，将口罩横贴在脸部口鼻上，将两端的绳子挂在耳朵上。</p >
    		<p style="font-size: 15px">用双手压紧鼻梁两侧的金属条，使口罩上端紧贴鼻梁，然后向下拉伸口罩，使口罩不留有褶皱，最好覆盖住鼻子和嘴巴。</p >
    	</div>
    	<div>
    		<h3><p>特殊人群如何选用口罩？</p></h3>
    		<p style="font-size: 15px">孕妇佩戴防护口罩，应注意结合自身条件，选择舒适性比较好的产品。</p >
    		<p style="font-size: 15px">老年人及有心肺疾病慢性病患者佩戴后会造成不适感，甚至会加重原有病情，应寻求医生的专业指导。</p >
    		<p style="font-size: 15px">儿童处在生长发育阶段，其脸型小，选择儿童防护口罩。</p >
    	</div>
    	<div>
    		<h3><p>废弃口罩如何处理？</p ></h3>
    		<p style="font-size: 15px">摘下口罩后要认真洗手。</p >
    		<p style="font-size: 15px">废弃口罩放入垃圾桶内，使用75%酒精或含氯消毒剂对垃圾桶进行消毒处理。</p >
    	</div>
    	<div class="pic"><img src="statics/images/banner/c_1.jpg" alt="" width="400" height="300"></div>
    	<div>
    		<h1>勤洗手</h1>
    		<h3><p>如何正确洗手？</p ></h3>
    		<p style="font-size: 15px">正确洗手是预防腹泻和呼吸道感染的最有效措施之一。国家疾病预防与控制中心、WHO及美国CDC等权威机构均推荐用肥皂和清水（流水）充分洗手。正确洗手需掌握六步洗手法：</p >
    		<p style="font-size: 15px">第一步，双手手心相互搓洗（双手合十搓五下）。</p >
    		<p style="font-size: 15px">第二步，双手交叉搓洗手指缝（手心对手背，双手交叉相叠，左右手交换各搓洗五下）。</p >
    		<p style="font-size: 15px">第三步，手心对手心搓洗手指缝（手心相对十指交错，搓洗五下）。</p >
    		<p style="font-size: 15px">第四步，指尖搓洗手心，左右手相同（指尖放于手心相互搓洗搓五下）。</p >
    		<p style="font-size: 15px">第五步，一只手握住另一只手的拇指搓洗，左右手相同搓五 下。</p >
    		<p style="font-size: 15px">第六步，弯曲手指使关节在另一手掌心旋转揉搓，交换进行各搓五下。</p >
    	</div>
    	<div>
    		<h3><p>出行在外不方便洗手怎么办？</p ></h3>
    		<p style="font-size: 15px">可以使用含酒精消毒产品清洁双手。75%酒精可灭活病毒，达到一定浓度的含酒精消毒产品可以作为肥皂和流水洗手的替代方案。</p >
    	</div>
    	<div class="pic"><img src="statics/images/banner/c_2.jpg" alt="" width="400" height="300"></div>
    	<div>
    		<h1>少聚集</h1>
    		<h3><p>前往公共场所怎样预防新冠病毒感染？</p ></h3>
    		<p style="font-size: 15px">佩戴口罩减少接触病原风险。</p >
    		<p style="font-size: 15px">咳嗽打喷嚏时，用纸巾或袖或屈肘将鼻完全遮住；将用过的纸巾立刻扔进封闭式垃圾箱内；咳嗽打喷嚏后，用肥皂和清水或含酒精洗手液清洗双手。</p >
    		<p style="font-size: 15px">不随地吐痰，口鼻分泌物用纸巾包好弃置于有盖垃圾箱内。</p >
    		<p style="font-size: 15px">避免在未加防护的情况下与农场牲畜或野生动物接触。</p >
    		<p style="font-size: 15px">尽量避免各类聚会。</p >
    		<p style="font-size: 15px">外出回家后及时洗手。</p >
    	</div>
    	<div class="pic"><img src="statics/images/banner/c_3.jpg" alt="" width="400" height="300"></div>
    	<div>
    		<h1>注意饮食</h1>
    		<h3><p>如何安排饮食？</p ></h3>
  <p style="font-size: 15px">从正规渠道购买冰鲜禽肉，不要食用野生动物和已经患病的动物及其制品。</p >
    		<p style="font-size: 15px">食用禽肉、蛋奶时要充分煮熟。即使在发生疫情的地区，如果肉食在食品制备过程中予以彻底烹饪和妥善处理，也可安全食用。</p >
    		<p style="font-size: 15px">处理生食和熟食的切菜板及刀具要分开。处理生食和熟食之间要洗手。</p >
    		<p style="font-size: 15px">适量多饮水。</p >
    		<p style="font-size: 15px">保证营养充足。</p >
    	</div>
    	<div class="pic"><img src="statics/images/banner/c_4.jpg" alt="" width="400" height="300"></div>
    	<div>
    		<h1>不信谣，不传谣</h1>
    		<h3><p>如何正确认识疫情？</p ></h3>
    		<p style="font-size: 15px">信息公开是避免恐慌的最好办法，信息公开不是制造恐慌，而是最好的全民动员和警觉，相关人员应主动、真实报告相关信息。</p>
    		<p style="font-size: 15px">应通过官方渠道了解疫情相关信息，不信谣、不传谣、不恐慌。疫情爆发后，关于基因武器，抽烟能杀死病毒，烟花爆竹能抑制病毒传播等全是谣言。</p >
    		<p style="font-size: 15px">主动学习科学防疫知识，强化防护意识。保护好自己不被感染，就是对一线医护人员的最大支持，就是对社会做出的最大贡献。</p >
    	</div>
    	<div class="pic"><img src="statics/images/banner/c_5.jpg" alt="" width="400" height="300"></div>
        <div>
    		<h1>万物之中，希望最美。没有过不去的冬天，也没有来不了的春天，我们一定要坚信：疫情很快就会过去，春天很快就会到来！</h1>
    	</div>
    </div>

	</div>
	<div class="col-lg-9">
    </div>
</div>