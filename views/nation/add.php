<?php
	use yii\helpers\Html;
?>

<?php echo Html::beginForm('?r=nation/add','post',['id'=>'addForm','class'=>'form','data'=>'fm']);?>

姓		名：<?php echo Html::input('text','name','',['class'=>'input'])?>
密		码：<?php echo Html::input('password','password','',['class'=>'input'])?>
确认密码：<?php echo Html::input('password','confirm','',['class'=>'input'])?>
<input type="submit" value="新增">

<a href="?r=nation">[返回]</a>


<?php echo Html::endForm();?>
