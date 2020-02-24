<?php
use \yii\helpers\Html;
use \yii\helpers\HtmlPurifier;
?>

<h1><?php echo $data['message'] ?>11111111</h1>
<!--渲染变量-->
<h1><?=  $data['message'] ?></h1>
<h1><?=  $str ?></h1>


<!--//字符转实体-->
<p><?= Html::encode($str)?></p>
<p><?= HtmlPurifier::process($str)?></p>
<?/*=  $this->render()*/?><!--
可以模板间互相继承
-->
<iframe src="//player.bilibili.com/player.html?aid=40225605&cid=70647225&page=14" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"> </iframe>