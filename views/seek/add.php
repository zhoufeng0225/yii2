<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>

<style>
    .error{
        color: red;
    }
</style>

<?=Html::beginForm('','post',['class'=>'form-horizontal'])?>
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

<div class="form-group">
    <?=Html::submitButton('提交',['class'=>'btn btn-primary col-sm-offset-2']);?>
    <a href="<?=Url::to(['index']) ?>" class="btn default" style="background:#eee">返回</a>
</div>
<?=Html::endForm()?>
