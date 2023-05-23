<?php
	use yii\helpers\Html;
?>

<?php echo Html::beginForm('','post',['id'=>'addForm','class'=>'form','data'=>'fm']);?>

姓		名：<?php echo Html::input('text','name',$data['name'],['class'=>'input'])?>
密		码：<?php echo Html::input('password','password',$data['password'],['class'=>'input'])?>
确认密码：<?php echo Html::input('password','confirm',$data['password'],['class'=>'input'])?>
<input type="submit" value="修改">
<a href="?r=nation">[返回]</a>

<?php echo Html::endForm();?>




