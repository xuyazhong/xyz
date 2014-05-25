<?php
/* @var $this BooksMediaController */
/* @var $model BooksMedia */

$this->breadcrumbs=array(
	'Books Medias'=>array('index'),
	$model->medium_id,
);

$this->menu=array(
	array('label'=>'List BooksMedia', 'url'=>array('index')),
	array('label'=>'Create BooksMedia', 'url'=>array('create')),
	array('label'=>'Update BooksMedia', 'url'=>array('update', 'id'=>$model->medium_id)),
	array('label'=>'Delete BooksMedia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->medium_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BooksMedia', 'url'=>array('admin')),
);
?>

<h1>View BooksMedia #<?php echo $model->medium_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'medium_id',
		'medium_name',
	),
)); ?>
