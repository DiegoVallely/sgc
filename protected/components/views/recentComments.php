<ul>
	<?php foreach($this->getRecentComments() as $comentario): ?>
	<li><?php echo $comentario->autorNome; ?> em
		<?php echo CHtml::link(CHtml::encode($comentario->mural->titulo), $comentario->getUrl()); ?>
	</li>
	<?php endforeach; ?>
</ul>