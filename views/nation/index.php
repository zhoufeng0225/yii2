<style type="text/css">

	td,th{
		width: 200px;
		border:1px solid #eee;
		text-align: center;
	}

</style>
<script type="text/javascript" src="js/index.js"></script>
<div id="list">
	<table>
		<tr><th>id</th><th>name</th><th>pass</th><th>count</th><th>操作</th></tr>
<?php 
	foreach($data as $value){ ?>
	<tr>
		<td><?php echo $value['id']?></td>
		<td><?php echo $value['name']?></td>
		<td><?php echo $value['password']?></td>
		<td><?php echo $value['count']?></td>
		<td><a href="?r=nation/updata&id=<?php echo $value['id']?>">[修改]</a><a href="?r=nation/delete&id=<?php echo $value['id']?>">[删除]</a></td>
	</tr>
	
<?php }?>
	<tr><td colspan="6"><a href="?r=nation/add">[增加]</a></td></tr>
	</table>
</div>

