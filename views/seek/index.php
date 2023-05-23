<?php
use yii\helpers\Url;
?>


<table class="table table-hover">
    <tr><th>姓名</th><th>密码</th><th>count</th><th>操作</th></tr>
    <?php foreach ($data as $v){ ?>
        <tr><td><?php echo $v->name?></td><td><?php echo $v->password?></td><td><?php echo $v->count?></td>
            <td> <a href="<?=Url::to(['edit','id'=>$v->id])?>" >修改</a>|<a href="<?=Url::to(['delete','id'=>$v->id])?>" >删除</a></td>
        </tr>
    <?php } ?>
</table>

<p style="text-align: center">
    <a href="<?=Url::to(['add'])?>" class="btn btn-primary">添加</a>
</p>