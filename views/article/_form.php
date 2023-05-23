<?php
use yii\helpers\Html;
?>


<style>
    .error{
        color: red;
    }
</style>

<?=Html::beginForm('','post',['class'=>'form-horizontal'])?>
<!--<div class="form-group">-->
<!--    --><?php //=Html::label('标题：','title',['class'=>'control-label col-sm-2'])?>
<!--    <div class="col-sm-10" >-->
<!--        --><?php //=Html::activeInput('text',$model,'title',['class'=>'form-control'])?>
<!--    </div>-->
<!--</div>-->
<div class="form-group">
    <?=Html::label('姓名：','name',['class'=>'control-label col-sm-2'])?>
    <div class="col-sm-10" >
        <?=Html::activeInput('text',$model,'name',['class'=>'form-control'])?>
        <?=Html::error($model , 'name' , ['class'=>'error'])?>
    </div>
</div>
<div class="form-group">
    <?=Html::label('密码：','password',['class'=>'control-label col-sm-2'])?>
    <div class="col-sm-10" >
        <?=Html::activeInput('password',$model,'password',['class'=>'form-control'])?>
        <?=Html::error($model , 'password' , ['class'=>'error'])?>
    </div>
</div>
<!--<div class="form-group">-->
<!--    --><?php //=Html::label('确认密码：','confirm',['class'=>'control-label col-sm-2'])?>
<!--    <div class="col-sm-10" >-->
<!--        --><?php //=Html::input('password','confirm','',['class'=>'form-control'])?>
<!--        --><?php //=Html::error($model , 'password' , ['class'=>'error'])?>
<!--    </div>-->
<!--</div>-->
<div class="form-group" style="margin-left: 15px">
    <?=Html::submitButton('提交',['class'=>'btn btn-primary col-sm-offset-2']);?>
    <a href="<?=\yii\helpers\Url::to(['index']) ?>" class="btn default" style="background:#eee">返回</a>
</div>

<?=Html::endForm()?>
