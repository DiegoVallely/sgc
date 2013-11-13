<?php foreach($comentarios as $comentario): ?>
<div class="comentario" id="c<?php echo $comentario->id_come; ?>">

	<?php echo CHtml::link("#{$comentario->id_come}", $comentario->getUrl($mural), array(
		'class'=>'cid',
		'title'=>' Link permanente para esse comentário',
	)); ?>

	<div class="autor">
		<?php echo $comentario->autorNome; ?> Diz:
	</div>

	<div class="time">
		<?php setlocale (LC_TIME, 'ptb'); echo strftime('%A, %d de %B de %Y %H:%M:%S',$comentario->criado_em); ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($comentario->comentario)); ?>
	</div>

</div><!-- comment -->
<?php endforeach; ?>