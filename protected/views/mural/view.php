<?php
$this->breadcrumbs=array(
	$model->titulo,
);
$this->pageTitle=$model->titulo;
?>

<?php $this->renderPartial('_view', array(
	'data'=>$model,
)); ?>

<div id="comentarios">
	<?php if($model->commentCount>=1): ?>
		<h3>
			<?php echo $model->commentCount>1 ? $model->commentCount . ' Comentários' : 'Um Comentário'; ?>
		</h3>

		<?php $this->renderPartial('_comentarios',array(
			'mural'=>$model,
			'comentarios'=>$model->comentarios,
		)); ?>
	<?php endif; ?>

	<h3>Deixe um Comentário :</h3>

	<?php if(Yii::app()->usuario->hasFlash('commentSubmitted')): ?>
		<div class="flash-success">
			<?php echo Yii::app()->usuario->getFlash('commentSubmitted'); ?>
		</div>
	<?php else: ?>
		<?php $this->renderPartial('/comentario/_form',array(
			'model'=>$comentario,
		)); ?>
	
        <?php endif; ?>

    
        
</div><!-- comments -->