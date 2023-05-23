<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id'=>'login-form',
    'options'=>['class'=>'form=horizontal'],
])?>

<?= $form->field($model,'username')?>
<?= $form->field($model,'password')->passwordInput()?>
<?= $form->field($model,'email')->input('email')?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('登录', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
