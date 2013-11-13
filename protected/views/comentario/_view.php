<?php
$deleteJS = <<<DEL
$('.container').on('click','.time a.delete',function() {
	var th=$(this),
		container=th.closest('div.comentario'),
		id=container.attr('id').slice(1);
	if(confirm('Tem certeza que deseja remover esse comentário? #'+id+'?')) {
		$.ajax({
			url:th.attr('href'),
			type:'POST'
		}).done(function(){container.slideUp()});
	}
	return false;
});
DEL;
Yii::app()->getClientScript()->registerScript('delete', $deleteJS);
?>
<div class="comentario" id="c<?php echo $data->id_come; ?>">

	<?php echo CHtml::link("#{$data->id_come}", $data->url, array(
		'class'=>'cid',
		'title'=>'Link Permanente para esse comentário',
	)); ?>

	<div class="autor">
		<?php echo $data->autorNome; ?> Diz em
		<?php echo CHtml::link(CHtml::encode($data->mural->titulo)); ?>
	</div>

	<div class="time">
		<?php echo CHtml::link('Update',array('comentario/update','id'=>$data->id_come)); ?> |
		<?php echo CHtml::link('Delete',array('comentario/delete','id'=>$data->id_come),array('class'=>'delete')); ?> |
		<?php setlocale (LC_TIME, 'ptb'); echo strftime('%A, %d de %B de %Y %H:%M:%S',$data->criado_em);  ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($data->comentario)); ?>
	</div>

</div><!-- comment -->