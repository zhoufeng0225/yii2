<?php
    use yii\helpers\Url;
?>
<p style="text-align: right">
    <a href="<?=\yii\helpers\Url::to(['add'])?>" class="btn btn-primary">添加</a>
</p>

<table class="table table-hover">
    <tr>
        <th>id</th><th>name</th><th>pass</th><th>count</th><th>操作</th>
    </tr>
    <?php foreach($data as $v){?>
    <tr>
        <td><?=$v->id?></td><td><?=$v->name?></td><td><?=$v->password?></td><td><?=$v->count?></td>
        <td><a href="<?=Url::to(['edit' , 'id'=>$v->id])?>">修改</a> | <a href="<?=Url::to(['delete' , 'id'=>$v->id])?>">删除</a></td>
    </tr>
    <?php }?>
</table>

    <?=\yii\widgets\LinkPager::widget([
        'pagination'=>$pagination,
//        'nextPageLabel' => false,
//        'prevPageLabel' => false,
        'firstPageLabel' => '首页',
        'lastPageLabel' => '尾页',
        'nextPageLabel' => '下一页',
        'prevPageLabel' => '上一页',
        'options'=>[
          'class'=>'pagination',
        ],
    ]);?>

