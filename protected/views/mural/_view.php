<div class="mural">
	<div class="titulo">
		<?php echo CHtml::link(CHtml::encode($data->titulo), $data->url); ?>
	</div>
	<div class="autor">
		Enviado por <?php setlocale (LC_TIME, 'ptb'); echo $data->autor->nome . ' em ' . strftime('%A, %d de %B de %Y %H:%M:%S',$data->criado_em); ?>
	</div>
        <div class="texto">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->texto;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<?php echo CHtml::link('Link Permanente', $data->url); ?> |
               	<?php echo CHtml::link("Comentários ({$data->commentCount})",$data->url.'#comentarios'); ?> |
		Ultima atualização em <?php setlocale (LC_TIME, 'ptb'); echo strftime('%A, %d de %B de %Y %H:%M:%S',$data->atualizado_em); ?>
	</div>
</div>
